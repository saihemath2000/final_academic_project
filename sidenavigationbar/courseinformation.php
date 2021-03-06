<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE); ?>
<?php include './topdashboard.php'; ?>
<?php
session_start();
$course = $_GET['course'];
$db = mysqli_connect("localhost", "root", "", "course_info");
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CourseInfo</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="./courseinformation.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
    .sideinfo {
      /* background-color:#737067; */
      height: 60px;
    }

    .sticky-nav-tab {
      font-size: 20px;
    }

    .spa-slide {
      font-size: 18px;
      height: 50vh;
    }

    .aboutcourse {
      font-size: 20px;
      margin-right: 250px;
      text-align: justify;
      text-justify: inter-word;
    }
  </style>
</head>

<body>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <?php
  $path = './courseimages/';
  $path1='./coursevideo/';
  $sql1 = "SELECT * from courseinstructors where title='$course'";
  $result = mysqli_query($db, $sql1);
  if (!$result) {
    echo mysqli_error($db);
  }
  $row = mysqli_fetch_row($result);
  $videoforcourse=$row[10];
  $name='.mp4';
  ?>
  <div style="display:flex;">
    <h3 style="text-transform:uppercase;margin-top: 50px;margin-left:50px;"><?php echo $course; ?></h3>
    <img src="<?php echo $path . $row[9]; ?>" alt="courseimage" width="150" height="150" style="margin-left:auto;order:2;margin-right:50px;margin-top:60px;" />
  </div></br></br>
  <button type="button" 
          id="Publish"  
          class="btn btn-success" 
          data-toggle="modal" 
          data-target="#myModal3" 
          style="margin-left:700px;width:200px;">Publish</button>
  <div class="modal" id="myModal3">
    <div class="modal-dialog" style="margin-left:2px;margin-top:5px;">
      <div class="modal-content">  
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Do you really want to publish? Make sure you made all 
               changes before publishing.
            </h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>      
          <!-- Modal body -->
          <div class="modal-body">
              <button type="button" class="btn btn-secondary" onclick="setpublish(1);">Yes</button>
              <button type="button" class="btn btn-success" onclick="setpublish(0);">No</button>
          </div>
      </div>
    </div>
  </div>



  <h2 style='margin-left:50px;'>Course Video</h2></br>
 <?php  
    if($videoforcourse==''){
      echo "<h3 style='margin-left:50px;color:red;'>Sorry no video uploaded to display</h3><br>";
    } 
  ?>
  <div class="video">
      <video style="width:600px;height:300px;margin-left:50px;" id="main_video" controls>
      <source src="<?php if ($videoforcourse != ''){
                        echo $path1 . $videoforcourse . $name;
                    } else {
                        echo "Sorry no video found";
                    } ?>
                    " type="video/mp4">
    </video></br></br></br>
  </div>
  <div class="sideinfo" style="display:flex;">
    <svg width="60" height="60" style="margin-left:40px;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" focusable="false" aria-hidden="true">
      <path d="M16.24 7.76A5.974 5.974 0 0012 6v6l-4.24 4.24c2.34 2.34 6.14 2.34 8.49 0a5.99 5.99 0 00-.01-8.48zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z" fill="currentColor"></path>
    </svg>
    &nbsp;<h2 style="margin-right:100px;font-size:23px;margin-top:10px;">Starts At:<?php echo $row[4] ?></h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <svg width="60" height="60" style="margin-left:10px;font-style:23px;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" focusable="false" aria-hidden="true">
      <path d="M16.24 7.76A5.974 5.974 0 0012 6v6l-4.24 4.24c2.34 2.34 6.14 2.34 8.49 0a5.99 5.99 0 00-.01-8.48zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z" fill="currentColor"></path>
    </svg>
    &nbsp;<h2 style="margin-right:100px;font-size:23px;margin-top:10px;">Ends At:<?php echo $row[5] ?></h2>&nbsp;&nbsp;&nbsp;&nbsp;
    <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" focusable="false" aria-hidden="true">
      <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm.31-8.86c-1.77-.45-2.34-.94-2.34-1.67 0-.84.79-1.43 2.1-1.43 1.38 0 1.9.66 1.94 1.64h1.71c-.05-1.34-.87-2.57-2.49-2.97V5H10.9v1.69c-1.51.32-2.72 1.3-2.72 2.81 0 1.79 1.49 2.69 3.66 3.21 1.95.46 2.34 1.15 2.34 1.87 0 .53-.39 1.39-2.1 1.39-1.6 0-2.23-.72-2.32-1.64H8.04c.1 1.7 1.36 2.66 2.86 2.97V19h2.34v-1.67c1.52-.29 2.72-1.16 2.73-2.77-.01-2.2-1.9-2.96-3.66-3.42z" fill="currentColor"></path>
    </svg>&nbsp;
    <h2 style="font-size:23px;margin-top:10px;"> RS.<?php echo $row[6] ?></h2>
  </div>
  <section class="sticky-nav-tabs">
    <div class="sticky-nav-tabs-container">
      <a class="sticky-nav-tab" style="text-decoration:none;" href="#tab-react">About</a>
      <a class="sticky-nav-tab" style="text-decoration:none;" href="#tab-angular">Syllabus</a>
      <a class="sticky-nav-tab" style="text-decoration:none;" href="#tab-cssscript">Teachers</a>
      <span class="sticky-nav-tab-slider"></span>
    </div>
  </section>
  <main class="spa-main">
    <div class="tab-content">
      <section class="spa-slide" style="height:50vh;" id="tab-react">
        <h1 style="margin-right:630px;">
          About this Course
        </h1><br>
        <p class="aboutcourse"><?php echo $row[8]; ?></p>
      </section>
      <section class="spa-slide" id="tab-angular" style="height:450vh;">
        <h1 style="margin-right:820px;">Syllabus</h1><br>
        <?php include('./modulesdisplayincourseinformation.php'); ?>
      </section>
      <section class="spa-slide" id="tab-cssscript" style="height:50vh;">
        <?php include('./teacherprofileincourseinformation.php'); ?>
      </section>
    </div>
  </main>

  <script src="./script.js"></script>
  <script>
    function setpublish(value){
      if(value==1){
        //  var a = document.getElementById('Publish');
        // //  alert(a.innerHTML);
        //  a.innerHTML='published';
        //  a.style.width='220px';
        //  localStorage ='published';
         window.location.href='setpublish.php?value=1&course=<?php echo $course; ?>';  
      }
      else{
        window.location.href='setpublish.php?value=0&course=<?php echo $course; ?>'; 
      }
    }
  </script>
</body>

</html>