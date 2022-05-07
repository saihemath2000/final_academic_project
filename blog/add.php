
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
    <style>
      html,
      body {
        margin: 0;
        font-family: 'Pacifico', cursive;
        /* padding: 3em;   */
      }
      .banner {
        /* background-color: yellow; */
        background-image: url(../sidenavigationbar/bannerimage/bgimage_1.jpg);
        height: 50px;
      }
      .banner__content {
        height: 50px;
        width: 700px;
        max-width: 1000px;
        padding: 16px;
        /* margin: 0 auto; */
        /* float:left; */
      }
      .banner__text {
        flex-grow: 1;
        line-height: 1.4;
        font-family: "Quicksand", sans-serif;
        font-size: 23px;
        /* margin-left:400px;  */
        float: right;
        color: red;
      }
      .banner__text:hover {
        color: black;
      }
      .banner__image {
        float: left;
      }
      .button {
        background: burlywood;
        box-shadow: 0 0 0;
        /* display:inline-block; */
        font-size: 2em;
        padding: 0.5em 2em;
        text-decoration: none;
        float: left;
      }
      .button:hover {
        box-shadow: 10px 10px 0 rgba(0, 0, 0, 0.5);
      }

      .parallelogram {
        transform: skew(-30deg);
        float: left;
        width: 20px;
        height: 2px;
        padding-top: 3px;
        padding-right: 30px;
        padding-bottom: 20px;
        padding-left: 35px;
      }

      .skew-fix {
        display: inline-block;
        transform: skew(30deg);
        text-align: center;
      }
    </style>
</head>
<body>
<div class="banner">
      <div class="banner__content">
         <div class="banner__text">
          <strong style="font-family:'Pacifico', cursive;">ONLINE LEARNING SYSTEM</strong>
        </div>
      </div>
    </div>
</body>
</html>
<?php
  include('session.php');
 ?>
<?php
    include('header.php');
?>
<?php
    include('post.php');
?>
<?php
    include('image_upload_function.php');
?>
 <?php
     $post = new Post($db);
     ?>
<?php
	$user = $_SESSION['user']['name'];
    if(isset($_POST['btnSubmit'])){

       	$data = date('Y-m-d');

    	if(!empty($_POST['title'])&&!empty($_POST['description'])){
			$course = strip_tags($_POST['course_name']);
    		$title = strip_tags($_POST['title']);
    		$description = $_POST['description'];
       		 $slug = createSlug($title);
    		$record = $post->addPost($course,$user,$title,$description,uploadImage(),$data,$slug);
    		if($record==True){
    			echo"<div class='text-center alert alert-success'>Post added Successfully!</div>";
    		}
    	}else{
    		echo"<div class='text-center alert alert-danger'>Every field is required</div>";
    	}
    }
?>

<div class="container">
	<br>
	<div class="row justify-content-center">
		<div class="col-md-10">
			<form action="add.php" method="POST" enctype="multipart/form-data">
			<div class="card">
				<div class="card-header">Add post</div>
				<div class="card-body">

					<div class="form-group">
						<label for="course_name">Select Course</label>
						<select name="course_name">
							<option value="">Choose Course </option>
							<?php
								$conn  = mysqli_connect("localhost", "root" , "", "course_info");

								$sql = "select title from courseinstructors where instructor='$user'";
								$result = mysqli_query($conn, $sql);
								while($row = mysqli_fetch_assoc($result)){
									$title = $row['title'];
									echo "<option>$title</option>";
								}
							 ?>
						</select>
					</div>

					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" name="title" class="form-control">
					</div>

					<div class="form-group">
						<label for="description">Description</label>
						<textarea cols="10" id="editor" name="description" class="form-control"></textarea>
					</div>

					<div class="form-group">
						<label for="image">Image</label>
						<input type="file" style="height: 45px"; name="image" class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" name="btnSubmit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</div>
		</form>

		</div>
	</div>

</div>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</script>
