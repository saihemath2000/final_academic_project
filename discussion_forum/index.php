<?php include('../sidenavigationbar/topdashboard.php'); ?>
<?php
    session_start();
    if(isset($_GET['mod_id'])){
        $_SESSION['mod_id'] = $_GET['mod_id'];
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Discussion Forum</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="comments.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php 
        $name = $_SESSION['user']['name']; 
        $mod = $_SESSION['mod_id'];
        $conn = mysqli_connect("localhost", "root", "", "course_info");
        $result = mysqli_query($conn, "select * from module where id=".$mod);

        $row = mysqli_fetch_assoc($result);

        $course_name = $row["coursename"];
        $topic = $row["title"];
        echo "<h1>". $course_name .">>". $topic."</h1>";
    ?>

    <div class="comments" style="width: 90%; margin: 0 auto;"></div>

    <script>
        const comments_page_id = <?php  $mod = $_SESSION['mod_id']; echo $mod ?>; // This number should be unique on every page
        fetch("comments.php?page_id=" + comments_page_id).then(response => response.text()).then(data => {
            document.querySelector(".comments").innerHTML = data;
            document.querySelectorAll(".comments .write_comment_btn, .comments .reply_comment_btn").forEach(element => {
                element.onclick = event => {
                    event.preventDefault();
                    document.querySelectorAll(".comments .write_comment").forEach(element => element.style.display = 'none');
                    document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "']").style.display = 'block';
                    document.querySelector("div[data-comment-id='" + element.getAttribute("data-comment-id") + "'] input[name='name']").focus();
                };
            });

            document.querySelectorAll(".comments .write_comment form").forEach(element => {
                element.onsubmit = event => {
                    event.preventDefault();
                    fetch("comments.php?page_id=" + comments_page_id, {
                        method: 'POST',
                        body: new FormData(element)
                    }).then(response => response.text()).then(data => {
                        element.parentElement.innerHTML = data;
                    });
                };
            });
        });
    </script>

</body>
</html>