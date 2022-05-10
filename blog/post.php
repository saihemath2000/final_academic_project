<?php
include('db.php');
    class Post
    {
        private $db;
        public function __construct($db){
            $this->db = $db;
        }
        public function addPost($course, $user, $title,$description,$image,$date,$slug){


      		$sql = "INSERT INTO posts(course_title,instructor,title,description,image,created_at,slug)VALUES('$course','$user','$title','$description','$image','$date','$slug')";
      		$result = mysqli_query($this->db,$sql);
      		return $result;
      	}

        public function getPost(){
          if(isset($_GET['tag'])){
            $tag = $_GET['tag'];
            $sql = "SELECT *
                    FROM posts
                    INNER JOIN post_tags ON posts.id = post_tags.post_id
                    INNER JOIN tags ON tags.id = post_tags.tag_id
                    WHERE tags.tag='$tag'";
          $result = mysqli_query($this->db,$sql);
          return $result;

        }
            $name = $_SESSION['user']['name'];
            $sql = "SELECT * from posts where instructor='$name'";
            $result = mysqli_query($this->db, $sql);
            return $result;
        }

        public function updatePost($title,$description,$slug){
      		$newImage = $_FILES['image']['name'];
      		if(!empty($newImage)){
      			$image = uploadImage();
      			$sql = "UPDATE posts SET title ='$title',description='$description',image = '$image' WHERE slug = '$slug'";
      			$result = mysqli_query($this->db,$sql);
      			return $result;

      		}else{
      			$sql = "UPDATE posts SET title ='$title',description='$description' WHERE slug = '$slug'";
      			$result = mysqli_query($this->db,$sql);
      			return $result;
      		}
      	}

        public function deletePostBySlug($slug){
          $sql = "DELETE FROM posts WHERE slug='$slug'";
          $result = mysqli_query($this->db,$sql);
          return $result;
        }

        public function getSinglePost($slug){
          $sql = "SELECT * FROM posts WHERE slug='$slug'";
          $result = mysqli_query($this->db, $sql);
          return $result;
      }
    }

?>
