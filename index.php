<?php
 session_start();
 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    // redirect them to your desired location
    header('location:feed.php');
    exit;
}
?>

<html>
<head>
    <title>Blogsite</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color : rgba(188,56,46,255);
        }
        .images{
            margin-left:5rem;
            margin-top: 10rem;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a class="active" href="#home">BlogSite</a></li>
            <li style="float:right"><a href="signup.php">Sign Up</a></li>
            <li style="float:right"><a href="login.php">Login</a></li>           
          </ul>
    </nav>
    <div class="content-A" style="text-align:center">
        <h1 style="color: white ">Create and Interact with<br> People on our Website</h1>
        <button type="button" onclick="location.href = 'login.php';" class="btn btn-warning">Create you Blog</button>
    <div class="images">
                <img src="unnamed.png" alt="Family Blog" style="width: 75%;">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>

</html>