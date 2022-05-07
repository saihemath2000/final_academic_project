
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
</html><br>
<?php
include('session.php');
include('header.php'); ?>
<?php
include('post.php');
$post = new Post($db);

?>

<div class="col-md-12">
	<h2>All Posts</h2>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Title</th>
				<th>Course Name</th>
				<th>Created</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($post->getPost() as $post){ ?>
			<tr>
				<td><?php echo $post['title']; ?></td>
				<td><?php echo $post['course_title'] ?></td>
				<td><?php echo date('Y-m-d',strtotime($post['created_at'])); ?></td>
				<td>
					<a href="view.php?slug=<?php echo $post['slug'];?>"><button style="width: 100px ; margin:5px;"; type="submit" class="btn btn-outline-success btn-sm">View</button></a>
					<a href="edit.php?slug=<?php echo $post['slug'];?>"><button  style="width: 100px; margin:5px;";type="submit" class="btn btn-outline-primary btn-sm">Edit</button></a>
					<a href="delete.php?slug=<?php echo $post['slug'];?>"><button  style="width: 100px; margin:5px;";type="submit" class="btn btn-outline-danger btn-sm">Delete</button></a>
				</td>
			<?php }?>
			</tr>
		</tbody>
	</table>
</div>
