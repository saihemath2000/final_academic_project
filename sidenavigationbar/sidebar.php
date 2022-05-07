<?php 
  include('../registration/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Side Navigation Bar</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css" />
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>
      html,body{
        font-family: 'Pacifico', cursive;
      }
         </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="sidebar" 
      style="font-size: 22px;width:300px; min-height: 20px;overflow:scroll;overflow-x: hidden;max-height:100vh;">
      <?php  if (isset($_SESSION['user'])) : ?>
					<h1 style="color:white;font-size:28px;margin-left:10px;"><?php echo $_SESSION['user']['name']; ?></h1>
      <?php endif ?></br>
        <ul>
          <h3 style="margin-left: 10px; color: white;">Teacher</h3>
          <li>
            <a href="dashboard.php" target="iframe_a"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                version="1.1"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 40 40"
                width="22"
                height="19"
              >
                <g
                  transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)"
                >
                  <path
                    d="M5,16.751c-0.552,0-1,0.448-1,1s0.448,1,1,1h16c0.552,0,1-0.448,1-1s-0.448-1-1-1H5z M24,14.251c0-0.552-0.448-1-1-1H4.5 c-2.485,0.001-4.499,2.017-4.498,4.502c0.001,2.484,2.014,4.497,4.498,4.498H23c0.552,0,1-0.448,1-1s-0.448-1-1-1H4.5 c-1.381,0-2.5-1.119-2.5-2.5s1.119-2.5,2.5-2.5H23C23.552,15.251,24,14.803,24,14.251z M1,7.751h0.209 c0.224,0,0.42,0.149,0.481,0.364c0.754,2.656,3.519,4.199,6.175,3.445c2.15-0.61,3.634-2.574,3.635-4.809 c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5c0.001,2.761,2.24,4.999,5.001,4.999c2.235-0.001,4.198-1.485,4.809-3.635 c0.061-0.215,0.257-0.364,0.481-0.364H23c0.552,0,1-0.448,1-1s-0.448-1-1-1h-0.209c-0.223,0-0.42-0.148-0.481-0.363 c-0.741-2.648-3.489-4.194-6.137-3.453c-1.214,0.34-2.253,1.127-2.909,2.203c-0.119,0.193-0.353,0.282-0.57,0.217 c-0.452-0.139-0.936-0.139-1.388,0c-0.217,0.065-0.451-0.024-0.57-0.217C9.305,1.79,6.241,1.047,3.893,2.479 C2.817,3.135,2.03,4.174,1.69,5.388C1.629,5.603,1.432,5.751,1.209,5.751H1c-0.552,0-1,0.448-1,1S0.448,7.751,1,7.751z M17.5,3.751 c1.657,0,3,1.343,3,3s-1.343,3-3,3s-3-1.343-3-3S15.843,3.751,17.5,3.751z M6.5,3.751c1.657,0,3,1.343,3,3s-1.343,3-3,3 s-3-1.343-3-3S4.843,3.751,6.5,3.751z"
                    stroke="none"
                    fill="currentColor"
                    stroke-width="0"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </g>
              </svg>
              Dashboard</a
            >
          </li>
          <li>
            <a href="teacher_profile.php" target="iframe_a"><i class="fas fa-user"></i>Profile</a>
          </li>
          <li>
            <a href="edit_teacher_profile.php" target="iframe_a"><svg
              xmlns="http://www.w3.org/2000/svg"
              version="1.1"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              viewBox="0 0 40 40"
              width="22"
              height="22"
            >
              <g
                transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)"
              >
                <path
                  d="M19,13c-0.552,0-1,0.448-1,1v7c0,0.552-0.448,1-1,1H3c-0.552,0-1-0.448-1-1V3c0-0.552,0.448-1,1-1h7c0.552,0,1-0.448,1-1 s-0.448-1-1-1H3C1.343,0,0,1.343,0,3v18c0,1.657,1.343,3,3,3h14c1.657,0,3-1.343,3-3v-7C20,13.448,19.552,13,19,13z M8.73,12.521 c-0.174,0.048-0.309,0.186-0.353,0.361L7.82,15.119l-1.252,1.252c-0.293,0.293-0.293,0.768,0,1.061c0,0,0,0,0,0 c0.295,0.287,0.765,0.287,1.06,0l1.264-1.262l2.207-0.555c0.174-0.044,0.312-0.177,0.36-0.35c0.048-0.173,0-0.359-0.127-0.487 L9.217,12.65C9.09,12.522,8.904,12.473,8.73,12.521z M23.707,0.293c-0.39-0.39-1.024-0.39-1.414,0l-0.9,0.9 c-0.518-0.138-1.07-0.063-1.533,0.208L19.808,1.35c-1.172-1.165-3.066-1.162-4.235,0.006l-3.612,3.605 c-0.39,0.391-0.39,1.023,0,1.414c0.394,0.384,1.021,0.384,1.415,0L17,2.761c0.392-0.384,1.019-0.381,1.407,0.007L17.7,3.475 c-0.195,0.195-0.195,0.512,0,0.707L19.818,6.3c0.195,0.195,0.512,0.195,0.707,0l1.768-1.768c0.504-0.505,0.701-1.241,0.517-1.93 l0.9-0.9C24.096,1.311,24.095,0.682,23.707,0.293z M12.4,14.22c0.132,0,0.259-0.053,0.353-0.147l6.356-6.355 c0.195-0.195,0.195-0.512,0-0.707L16.99,4.889c-0.198-0.188-0.509-0.188-0.707,0l-6.356,6.356c-0.195,0.195-0.195,0.512,0,0.707 l2.121,2.121C12.141,14.167,12.268,14.219,12.4,14.22z"
                  stroke="none"
                  fill="currentColor"
                  stroke-width="0"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </g>
            </svg>
             Edit Profile</a>
          </li>
          <li>
            <a href="./coursetab.php" target="iframe_a"><i class="fas fa-plus"></i>Create course</a>
          </li>
          <li>
            <a href="./mycourses.php" target="iframe_a">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                version="1.1"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 40 40"
                width="22"
                height="22"
              >
                <g
                  transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)"
                >
                  <path
                    d="M24,1.5C24,0.672,23.328,0,22.5,0h-21C0.672,0,0,0.672,0,1.5v21C0,23.328,0.672,24,1.5,24h21c0.828,0,1.5-0.672,1.5-1.5 V1.5z M10,21.5c0,0.276-0.224,0.5-0.5,0.5h-3C6.224,22,6,21.776,6,21.5v-6C6,15.224,6.224,15,6.5,15h3c0.276,0,0.5,0.224,0.5,0.5 V21.5z M15.5,21.5c0,0.276-0.224,0.5-0.5,0.5h-2c-0.276,0-0.5-0.224-0.5-0.5v-5c0-0.276,0.224-0.5,0.5-0.5h2 c0.276,0,0.5,0.224,0.5,0.5V21.5z M20.5,21.5c0,0.276-0.224,0.5-0.5,0.5h-2c-0.276,0-0.5-0.224-0.5-0.5v-6 c0-0.276,0.224-0.5,0.5-0.5h2c0.276,0,0.5,0.224,0.5,0.5V21.5z M23,11.75c0,0.414-0.336,0.75-0.75,0.75H1.75 C1.336,12.5,1,12.164,1,11.75S1.336,11,1.75,11H3c0.276,0,0.5-0.224,0.5-0.5V3.487C3.487,3.232,3.683,3.014,3.938,3h2.624 C6.817,3.014,7.013,3.232,7,3.487V10.5C7,10.776,7.224,11,7.5,11h1C8.776,11,9,10.776,9,10.5V6c0.012-0.288,0.254-0.511,0.542-0.5 h2.166c0.288-0.011,0.53,0.212,0.542,0.5v4.5c0,0.276,0.224,0.5,0.5,0.5h3.106c0.138,0,0.25-0.112,0.25-0.25 c0-0.029-0.005-0.059-0.015-0.086l-2.565-7c-0.079-0.229,0.043-0.479,0.272-0.558c0.007-0.003,0.015-0.005,0.023-0.007l1.8-0.577 c0.242-0.082,0.505,0.039,0.6,0.276l2.886,7.871c0.072,0.197,0.259,0.328,0.469,0.328h2.674c0.414,0,0.75,0.336,0.75,0.75 c0,0.001,0,0.003,0,0.004V11.75z"
                    stroke="none"
                    fill="currentColor"
                    stroke-width="0"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </g>
              </svg>
              My Courses
            </a>
          </li>
          <li>
            <a href="editcourse.php" target="iframe_a">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                version="1.1"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 40 40"
                width="22"
                height="22"
              >
                <g
                  transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)"
                >
                  <path
                    d="M19,13c-0.552,0-1,0.448-1,1v7c0,0.552-0.448,1-1,1H3c-0.552,0-1-0.448-1-1V3c0-0.552,0.448-1,1-1h7c0.552,0,1-0.448,1-1 s-0.448-1-1-1H3C1.343,0,0,1.343,0,3v18c0,1.657,1.343,3,3,3h14c1.657,0,3-1.343,3-3v-7C20,13.448,19.552,13,19,13z M8.73,12.521 c-0.174,0.048-0.309,0.186-0.353,0.361L7.82,15.119l-1.252,1.252c-0.293,0.293-0.293,0.768,0,1.061c0,0,0,0,0,0 c0.295,0.287,0.765,0.287,1.06,0l1.264-1.262l2.207-0.555c0.174-0.044,0.312-0.177,0.36-0.35c0.048-0.173,0-0.359-0.127-0.487 L9.217,12.65C9.09,12.522,8.904,12.473,8.73,12.521z M23.707,0.293c-0.39-0.39-1.024-0.39-1.414,0l-0.9,0.9 c-0.518-0.138-1.07-0.063-1.533,0.208L19.808,1.35c-1.172-1.165-3.066-1.162-4.235,0.006l-3.612,3.605 c-0.39,0.391-0.39,1.023,0,1.414c0.394,0.384,1.021,0.384,1.415,0L17,2.761c0.392-0.384,1.019-0.381,1.407,0.007L17.7,3.475 c-0.195,0.195-0.195,0.512,0,0.707L19.818,6.3c0.195,0.195,0.512,0.195,0.707,0l1.768-1.768c0.504-0.505,0.701-1.241,0.517-1.93 l0.9-0.9C24.096,1.311,24.095,0.682,23.707,0.293z M12.4,14.22c0.132,0,0.259-0.053,0.353-0.147l6.356-6.355 c0.195-0.195,0.195-0.512,0-0.707L16.99,4.889c-0.198-0.188-0.509-0.188-0.707,0l-6.356,6.356c-0.195,0.195-0.195,0.512,0,0.707 l2.121,2.121C12.141,14.167,12.268,14.219,12.4,14.22z"
                    stroke="none"
                    fill="currentColor"
                    stroke-width="0"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </g>
              </svg>
              Edit Course
            </a>
          </li>
          <li>
            <a href="../discussion_forum/courseinfo.php" target="iframe_a"><i class="fa fa-comment"></i> Discussion Forum</a>
          </li>
          <li>
            <a href="./../blog/add.php" target="iframe_a"><i class="fas fa-blog"></i> Create Blog</a>
          </li>
          <li>
            <a href="./../blog/result.php" target="iframe_a"><i class="fas fa-blog"></i> Blogs</a>
          </li>
          <li>
            <a href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" fill="white" style="width:28px;height:23px;color:white;" viewBox="0 0 16 16"><g class="icon-color"><path d="M10 13v1H3V2h7v1h1V1.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5V13h-1z"/><path d="M9.983 5.041a.5.5 0 0 1 .812-.39l3.7 2.96a.5.5 0 0 1 0 .78l-3.7 2.96a.5.5 0 0 1-.812-.39V9H7V7h2.983V5.041z"/></g></svg>Logout</a>
          </li>
          <li>
            <a>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                version="1.1"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 40 40"
                width="22"
                height="22"
              >
                <g
                  transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)"
                >
                  <path
                    d="M20.375,15.792V4.958c0.008-0.59-0.463-1.075-1.053-1.083c0,0,0,0,0,0H1.428c-0.59,0.008-1.061,0.493-1.053,1.083 c0,0,0,0,0,0v10.834c-0.008,0.59,0.463,1.075,1.053,1.083c0,0,0,0,0,0h17.894C19.912,16.867,20.383,16.382,20.375,15.792 C20.375,15.792,20.375,15.792,20.375,15.792z M10.375,13.375c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3 S12.032,13.375,10.375,13.375z M22.875,6.625c-0.414,0-0.75,0.336-0.75,0.75v11c0,0.138-0.112,0.25-0.25,0.25h-18 c-0.414,0-0.75,0.336-0.75,0.75s0.336,0.75,0.75,0.75h18c0.966-0.001,1.749-0.784,1.75-1.75v-11 C23.625,6.961,23.289,6.625,22.875,6.625z"
                    stroke="none"
                    fill="currentColor"
                    stroke-width="0"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </g>
              </svg>
              Payout
            </a>
          </li>
        </ul>
      </br></br>
        <ul>
          <h3 style="margin-left: 10px; color: white">Student details</h3>
          <li>
            <a
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                version="1.1"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 0 40 40"
                width="22"
                height="19"
              >
                <g
                  transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)"
                >
                  <path
                    d="M5,16.751c-0.552,0-1,0.448-1,1s0.448,1,1,1h16c0.552,0,1-0.448,1-1s-0.448-1-1-1H5z M24,14.251c0-0.552-0.448-1-1-1H4.5 c-2.485,0.001-4.499,2.017-4.498,4.502c0.001,2.484,2.014,4.497,4.498,4.498H23c0.552,0,1-0.448,1-1s-0.448-1-1-1H4.5 c-1.381,0-2.5-1.119-2.5-2.5s1.119-2.5,2.5-2.5H23C23.552,15.251,24,14.803,24,14.251z M1,7.751h0.209 c0.224,0,0.42,0.149,0.481,0.364c0.754,2.656,3.519,4.199,6.175,3.445c2.15-0.61,3.634-2.574,3.635-4.809 c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5c0.001,2.761,2.24,4.999,5.001,4.999c2.235-0.001,4.198-1.485,4.809-3.635 c0.061-0.215,0.257-0.364,0.481-0.364H23c0.552,0,1-0.448,1-1s-0.448-1-1-1h-0.209c-0.223,0-0.42-0.148-0.481-0.363 c-0.741-2.648-3.489-4.194-6.137-3.453c-1.214,0.34-2.253,1.127-2.909,2.203c-0.119,0.193-0.353,0.282-0.57,0.217 c-0.452-0.139-0.936-0.139-1.388,0c-0.217,0.065-0.451-0.024-0.57-0.217C9.305,1.79,6.241,1.047,3.893,2.479 C2.817,3.135,2.03,4.174,1.69,5.388C1.629,5.603,1.432,5.751,1.209,5.751H1c-0.552,0-1,0.448-1,1S0.448,7.751,1,7.751z M17.5,3.751 c1.657,0,3,1.343,3,3s-1.343,3-3,3s-3-1.343-3-3S15.843,3.751,17.5,3.751z M6.5,3.751c1.657,0,3,1.343,3,3s-1.343,3-3,3 s-3-1.343-3-3S4.843,3.751,6.5,3.751z"
                    stroke="none"
                    fill="currentColor"
                    stroke-width="0"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </g>
              </svg>
              Dashboard</a
            >
          </li>
          <li>
            <a href="#"><i class="fas fa-user"></i>Profile</a>
          </li>
          <li>
            <a href="#"><i class="fas fa-bell"></i>Notify</a>
          </li>
        </ul>
      </div>
        <iframe src="dashboard.php" name="iframe_a" width="100%" height="1000px" title="Iframe Example" style="margin-left:300px;"  frameborder="0" allowfullscreen></iframe> 
    </div>
  </body>
</html>
