<?php include('./functions.php'); ?>
<?php
 if(isset($_GET['name'])){
  $name = $_GET['name'];  
 }
 else{
   $name='';
 } 
 $db = mysqli_connect("localhost", "root", "", "course_info");
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql1 = "SELECT * from courseinstructors";
$result = mysqli_query($db, $sql1);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">    
    <link rel="stylesheet" href="homepage.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>


    <title>Homepage</title>
    <style>
      .btn1 {
        background-color: #ddd;
        border: none;
        color: black;
        padding: 16px 32px;
        text-align: center;
        font-size: 16px;
        margin: 4px 2px;
        transition: 0.3s;
      }

      .btn1:hover {
        background-color: #3252a8;
        color: white;
      }
      body {
        font-size: 20px;
        width: 100%;
      }
      body,
      html {
        height: 100%;
        margin: 0;
        font-family: 'Pacifico', cursive;
      }
      #asterik:after{
          content:'*';
          color:red;
        }
      .imagediv {
        background-image: url("./images/laptop.jpg");
        height: 50%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
        text-align: center;
        color: white;
      }
      .text {
        position: absolute;
        z-index: 999;
        margin: 0 auto;
        left: 0;
        right: 50%;
        text-align: center;
        top: 40%;
      }
      .text:hover {
        color: red;
      }
      .buttondiv {
        position: absolute;
        z-index: 999;
        margin: 0 auto;
        left: 70%;
        right: 0%;
        top: 40%;
      }
      .matter{
        background-color: #00004d;
        width:100%;
        height:500px;
        position: relative;
        margin: 0 auto;
      }
      .matter-text{
        position: absolute;
        z-index: 999;
        margin: 0 auto;
        left: 20%;
        /* right: 20%; */
        text-align: center;
        top: 10%;
      }
      .vision{
        /* background-color: #2e2e1f; */
        background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;
        width:100%;
        height:500px;
        position: relative;
      }
      .vision-text{
        position: absolute;
        z-index: 999;
        margin: 0 auto;
        left: 2%;
        right: 35%; 
        text-align: center;
        top: 5%;
      }
      @keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}
     #carouselExampleIndicators{
        width:800px;
        height: 600px;
        margin-left:350px; 
     }
     .carousel .carousel-indicators li {
        background-color: red;
      }
     .carousel .carousel-indicators li.active {
        background-color: blue;
      }
      #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;
}

#myBtn:hover {
  background-color: #555;
}

    </style>
  </head>
  <body>
   <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-light"
      style="height: 80px"
    >
    <img src="./images/teach_and_learn.png" width="90px" height="90px" style="margin-top:5px;">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
              style="color: black"
            >
              Courses
            </a>
            <div
              class="dropdown-menu mega-menu"
              aria-labelledby="navbarDropdown"
            >
              <div class="row">
                <div class="col-8">
                  <h1><b>Courses</b></h1>
                </div>
                <div class="col-4">
                  <a href="allcourses.php"><button class="btn1">View All Courses</button></a>
                </div>
              </div>
              <hr
                style="
                  height: 2px;
                  border-width: 0;
                  color: gray;
                  background-color: gray;
                "
              />
              <div class="row">
                <div class="col-6">
                  <?php
                    $count=0;
                    while ($row = mysqli_fetch_assoc($result)) {
                      if($count==4){
                        break;
                      }
                      else{
                        echo '<p><a style="color:black" href="">'.$row['title'].'</a></p>';
                        $count=$count+1;
                      }
                    }
                  ?>
                </div>
              </div>
            </div>
          </li>
          <li>
              <button
                id="login"
                type="button"
                class="btn btn-secondary pull-right"
                style="margin-left:800px;margin-top:5px;"
                data-toggle="modal" 
                data-target="#myModal1"  
              >
                Login
              </button>
            </li>
             <li>
              <button
                id="register"
                type="button"
                class="btn btn-danger"
                style="margin-left:17px;margin-top:5px;"
                data-toggle="modal" 
                data-target="#myModal"  
              >
                Register
              </button>
            </li>
            <li>
            <div class="modal" id="myModal">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Choose</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  
                  <!-- Modal body -->
                  <div class="modal-body">
                    <button type="button" class="btn btn-secondary" onclick="window.location.href='./signup_and_signin_folder/signup.php'">Register as a Learner</button>
                    <button type="button" class="btn btn-success" onclick="window.location.href='../teacherregistration/teacher_register.php'">Register as a Teacher</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal" id="myModal1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Choose</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  
                  <!-- Modal body -->
                  <div class="modal-body">
                    <button type="button" class="btn btn-secondary" onclick="window.location.href='./signup_and_signin_folder/signin.php'">Login as a Learner</button>
                    <button type="button" class="btn btn-success" onclick="window.location.href='../teacherregistration/teacher_login.php'">Login as a Teacher</button>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <?php
          if (isset($_SESSION['user'])){
          echo '<div class="dropdown" style="margin-left:10px;">
            <button 
            type="button" 
            class="btn dropdown-toggle" 
            data-toggle="dropdown"
            style="width:120px;font-size:20px;">
              My Account
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="studentprofile.php?name='.$name.'">Profile</a>
              <a class="dropdown-item" href="./signout.php">Logout</a>
            </div>
          </div>';
          }
          else{

          }
          ?>
        </div>
        </ul>
      </div>
    </nav>
    <div class="imagediv">
      <div class="text">
        <center><h1>Start Learning with Upadana </h1></center>
      </div>
    </div>
    <br /><br />
    <h1 id ="abc" style="margin-left: 28px">Explore Top Courses</h1>
    <br />
    <?php 
       $path='../sidenavigationbar/courseimages/';
       $sql2="SELECT * from courseinstructors where publish=1";
       $result1 = mysqli_query($db,$sql2);
       if(!$result1){
         mysqli_error($db);
       }
       $count =1;
       if (mysqli_num_rows($result1) > 0) {
        // output data of each row
        echo '<div class="card-columns" style="height:400px;margin-left:20px;" id="courses">';
        while ($count<=3 && $count<=mysqli_num_rows($result1)) {
          $row = mysqli_fetch_assoc($result1);
            $mycourse=$row['title'];
            $fortitle=$row['title'];
            $fortitle=str_replace(' ', '', $fortitle);
            $fortitle=strtolower($fortitle);
            $tags[$fortitle]=$row['tags'];
            echo '<div class="card" name="hello"  id='.$fortitle.' style="width: 25rem;height:20rem;margin-left:10px;">';
            echo '<img class="card-img-top" src=' . $path . $row['image'] . ' style="height:150px;width:150px;margin-top:5px;" alt="course image">';
            echo '<div class="card-body" style="width:350px;"><h5 class="card-title">' . $row['title'] . '</h5>
                    <a href="courseinformation.php?course='.$mycourse.'" class="btn btn-primary">Goto Course</a></div></div>';
            echo '&nbsp; <br>';
            $count = $count+1;
        }
        echo '<center><a href="allcourses.php"><p>View More</p></a></center>';
        echo '</div>';
    } else {
        echo "<center><h2>No published Courses</h2></center>";
    }    
    ?>
    <br><br>
    <h2 id ="carouselheader" style="margin-left:40px;color:blue;">Latest Blog Posts</h2><br>  
    <div id="carouselExampleIndicators" style="background-color:rgb(204, 255, 153);"class="carousel" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" style="color:red;"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" style="color:red;"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2" style="color:red;"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3" style="color:red;"></li>
      </ol>
      <div class="carousel-inner" style="margin: auto;">
        <?php
          $path1 ="../blog/images/"; 
          $db1 = mysqli_connect("localhost","root","","blog");
          $sql3 = "select title,image from posts order by created_at";
          $result2 = mysqli_query($db1,$sql3);
          if(!$result2){
            echo mysqli_error($db1);
          } 
          else{
            $i=1;
            while($row=mysqli_fetch_assoc($result2) and $i<=4){
              $image = $row['image'];
              $title = $row['title'];
              if($i==1){
                echo "<div class='carousel-item active'>
                <img class='d-block w-100' src='$path1$image' width='750px' height='550px' alt='Second slide'>
                <div class='carousel-caption d-none d-md-block'>
              <h5 style='color:brown;'>$title</h5>
            </div>
              </div>"; 
              } 
              else{
                echo "<div class='carousel-item'>
                <img class='d-block w-100' src='$path1$image' width='750px' height='550px' alt='Second slide'>
                <div class='carousel-caption d-none d-md-block'>
              <h5 style='color:brown;'>$title</h5>
            </div>
              </div>"; 
              } 
              $i++;
            }
          }
        ?>
        </div>
      <!-- <div class="carousel-inner" style="margin: auto;">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./images/Bhavana.jpg" width="750px" height="550px" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>...</h5>
          </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./images/c_image.png" width="750px" height="550px" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./images/breaking_bad_animation.jpg" width="750px" height="550px" alt="Third slide">
        </div>
      </div> -->
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="color:yellow;">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="color:yellow;">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <br><br><br>

    <div class="matter">
        <img 
           src="./images/myimage.jpeg" 
           alt="image"
           width="400px"
           height="500px"
           style="transform:skew(-5deg);margin-left:35px;">
         <div class="matter-text">
            <h2 style="color:yellow;">For Learners:</h2><br>
            <h4 style="margin-left:400px;color:white;">
                Explore Courses, expand your knowledge at any level</h4> <br>
            <h2 style="color:magenta;">For Teachers:</h2><br>
            <h4 style="margin-left:300px;color:white;">
                Create your own courses with free of cost</h4> <br>     
         </div>  
    </div>
    <br><br><br>
    <div class="vision">
      <div class="vision-text">
        <h3 style="color:yellow;margin-right:700px;">Our Vision</h3><br>
        <p align="justify" 
           style="color:white;font-size:30px;margin-left:50px;">
          Provide all students with challenging learning experiences in a safe and welcoming environment</p><br>
        <p align="justify"
           style="color:white;font-size:30px;margin-left:50px;">
          Vision of a world where every learner can access education to unlock thier potential,
        without barriers of cost and location</p>  
      </div>
    </div><br><br>
    <h2 style="margin-left:25px;">Contact Form</h2></br>
    <form method="POST" action='./contact_form.php' style='margin-left:25px;'>
      <div class="form-group col-4">
        <label for="name" id="asterik">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
      </div>
      <div class="form-group col-4">
        <label for="email" id="asterik">Email</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group col-6">
        <label for="message" id="asterik">Message</label>
        <textarea class="form-control" id="message" rows="3" name="message" required></textarea>
      </div>
      <button name="details" type="submit" class="btn btn-primary" style='margin-left:15px;'>Submit</button>
    </form>
  </br></br>
    <?php include('./footer.php'); ?>
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
      integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
      integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
      crossorigin="anonymous"
    ></script>
    <script language="JavaScript" type="text/javascript">
      setInterval(
        function () {
          var randomColor = Math.floor(Math.random()*16777215).toString(16);
          var a = document.getElementById('carouselheader');
          a.style.color = "#"+randomColor;
        },1000);
    </script>
    <script>
      var mybutton = document.getElementById("myBtn");
      window.onscroll = function() {scrollFunction()};
      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <script language="JavaScript" type="text/javascript">
      $(document).ready(function(){
        $('.carousel').carousel({
          interval: 2000
        })
      }); 

    </script>
  </body>
</html>
