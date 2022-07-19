<?php
 session_start();
 if(!(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)){
    // redirect them to your desired location
    header('location:index.php');
    exit;
}
?>
<?php
 include '_dbconnect.php';
 if (!$conn) {
    //echo "Database connection failed!: " . mysqli_connect_error();
    header('location:index.php');
    }

 $sql = "SELECT * FROM posts ORDER BY post_id DESC";
 $query = mysqli_query($conn,$sql);


    ?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
    .userposts {
        /*margin: 1rem 20rem;*/
        margin-top: 1rem auto;
    }
    .background{
        margin:1rem;        
    }

    .card{
        width:900px;
        margin:auto;
    }

    .card-body a{
        text-decoration:none;
        color: #007bff;
        float: right;
        padding-right: 1rem;;
        margin-top: 5px;
    }

    .card-body h4{
        text-weight:bold;
    }

    .heading{
        color:white;
        font-size:3rem;
        text-shadow: 3px 3px 4px black;
        text-align: center;
        margin-bottom: 30px;
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
            <li><a class="active" href="createblog.php" style="text-decoration:none;">Create Blog</a></li>
            <li style="float:right"><a href="_logout.php" style="text-decoration:none;">Logout</a></li>
        </ul>
    </nav>

    <section class='background'>
    <div class='userposts'>
        <div class="mt-4 p-1 text-black rounded">
        <h2 class="heading">Blogs</h2>
        <?php
          while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
            $title=$row["post_title"];
            $description=$row["post_text"];
            $temptxt=substr($description,0,235);
            echo "
            <div class='card'>
            <div class='card-body'>
            <h4 class='card-title'>$title</h4>
            <p class='card-text'>$temptxt...<span><a href='content.php?title=$title&content=$description' class='card-link'>Read More</a></span></p>
            </div>
            </div>";
            }
    ?>  
        </div>
    </div>
    </section>



</body>

</html>