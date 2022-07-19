<?php
 session_start();
 if(!(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)){
    // redirect them to your desired location
    header('location:index.php');
    exit; 
}
  $title = $_GET['title'];
  $article = $_GET['content'];
?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title;?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
    .userposts {
        /*margin: 1rem 20rem;*/
        margin-top: 1rem;
        margin-bottom: 1rem;
        margin-left:10rem;
        margin-right: 20rem;
    }
    .background{
        margin:1rem;
    }
    .userposts p{
        font-size:22px;
        font-weight:450;
    }
    body{
        background-image:url('img2.jpg');
    }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a class="active" href="feed.php" style="text-decoration:none;">BlogSite</a></li>
            <li><a class="active" href="feed.php" style="text-decoration:none;">Home</a></li>
            <li><a class="active" href="feed.php" style="text-decoration:none;">Articles</a></li>
            <li><a class="active" href="feed.php" style="text-decoration:none;">Create Blog</a></li>
            <li style="float:right"><a href="_logout.php" style="text-decoration:none;">Logout</a></li>
        </ul>
    </nav>
    <section class='background'>
    <div class='userposts'>
        <div class="mt-4 p-5 text-black rounded" style="background-color: #fff8f6;">
            <?php
            echo "<h1>$title</h1><br>";
            echo "<p>$article</p>";
            ?>
        </div>
</div>
</body>

</html>