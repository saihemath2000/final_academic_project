<?php include('header.php');
	  include('post.php');
	  include('../sidenavigationbar/topdashboard.php');

$posts = new Post($db);

 ?>
 <br><br>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog details</title>
	<style>
		body,
      html {
		font-size: 20px;  
        height: 100%;
        margin: 0;
        font-family: 'Pacifico', cursive;
      }
	</style>
</head>

<body>
<div class="container">
 	<div class="row">
 		<?php foreach($posts->getSinglePost($_GET['slug']) as $post){ ?>
 		<div class="card">
 			<center><img
			   width="400";
			   height="200";  
			   class="card-img-top"
			   style="float:center;"
			   src="images/<?php echo $post['image']; ?>" ><br><br><br>
 		</div>
 		<div class="card-body">
 			<h4 class="card-title"><?php echo $post['title']; ?></h4>
 			<p class="card-text"><?php echo $post['description']; ?></p>
 		</div>
 	<?php } ?>
</div>
</div>
	
</body>
</html>
 