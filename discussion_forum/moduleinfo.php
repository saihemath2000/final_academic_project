<?php include('../sidenavigationbar/topdashboard.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPLE FORM</title>
    <meta name="viewport"
		content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/all.min.css">-->
</head>
<style>





    *{
        margin:0px;
        padding:0px;
        box-sizing:border-box;
        font-family: Montserrat, sans-serif;
    }
    body{
        
    }
    .content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  margin-left:33%;
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: center;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}
.btn{
  width:150px;
    padding: 12px 15px;
    background:#009879;
    color:#fff;
    border:none;
    outline:none;
    border-radius:05px;
    font-weight:bold;
    cursor:pointer;
}
.form-control, .num{
    border:none;
    outline:none;
    background:none;
    min-width:460px;
    padding: 8px 0px;
    border:2px solid #009879;
    font-size:17px;
    border-radius:05px;
    padding-left:4px;
}
</style>
<body>




    <div class="containner">
    <?php
	if(isset($_GET['errors'])){
		$error=$_GET['errors'];
		echo "<div class='alert alert-danger'>
            $error</div>";
			
	}
	if(isset($_GET['success'])){
		$success= $_GET['success'];
		echo "<div class='alert alert-success'>
           $success</div>";
	}?>
        
        <form method="post" >
        
        <table class="content-table">
          <br/><br/><br/><br/><br/><br/></br></br></br>
                <thead>
				<tr>
				<th>Course Modules</th>
				
				</tr>
                </thead>
        <?php
                $con= new mysqli('localhost','root','','course_info');
               $txt = $_GET['tit'];
               $qur="SELECT id,title FROM module where coursename='$txt'";
				$result = mysqli_query($con,$qur);
                
                while($row = mysqli_fetch_assoc($result))
                {
                  $mod_id=$row['id'];
                echo "<tr>";
                echo "<td><a href='index.php?mod_id=$mod_id'>" . $row['title'] . '</a></td>';
                echo "</tr>";
                }
               
				echo "</table>";
			?>
            
            </form>
            
    </div>
    
</body>

</html>