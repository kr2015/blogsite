<?php
 session_start();
 if(!(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)){
    // redirect them to your desired location
    header('location:index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Create Blog</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <!--Bootstrap Cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- fontawesome cdn For Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!--Internal CSS start-->
    <style>
    h1 {
        padding-top: 20px;
        padding-bottom: 20px;
        text-align: center;
        color: #957dad;
        font-family: 'Montserrat', sans-serif;
    }

    section {
        padding: 5%;
        padding-top: 0;
        height: 100vh;
    }

    .side {
        margin-left: 0;
    }

    button {
        margin: 10px;
        border-color: #957dad !important;

        margin-bottom: 25px;
    }

    button:hover {
        background-color: #fec8d8 !important;
    }

    textarea {
        padding: 3%;
        border-color: #957dad;
        border-width: thick;
        resize:none;
    }

    .flex-box {
        display: flex;
        justify-content: center;
    }

    </style>
    <!--Internal CSS End-->
</head>
<!--Body start-->

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

    <section class="">
        <h1 class="shadow-sm">Write Your Blog</h1>
        <div class="flex-box">
            <div class="row">
                <div class="col">
                    <!-- Adding different buttons for
                         different functionality-->
                    <!--onclick attribute is added to give 
                        button a work to do when it is clicked-->
                    <button type="button" style=" color: #888888;" onclick="f1()"
                        class=" shadow-sm btn btn-outline-secondary" data-toggle="tooltip" data-placement="top"
                        title="Bold Text">
                        Bold</button>
                    <button type="button" style=" color: #888888;" onclick="f2()"
                        class="shadow-sm btn btn-outline-success" data-toggle="tooltip" data-placement="top"
                        title="Italic Text">
                        Italic</button>
                    <button type="button" style=" color: #888888;" onclick="f3()"
                        class=" shadow-sm btn btn-outline-primary" data-toggle="tooltip" data-placement="top"
                        title="Left Align">
                        <i class="fas fa-align-left"></i></button>
                    <button type="button" style=" color: #888888;" onclick="f4()"
                        class="btn shadow-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top"
                        title="Center Align">
                        <i class="fas fa-align-center"></i></button>
                    <button type="button" style=" color: #888888;" onclick="f5()"
                        class="btn shadow-sm btn-outline-primary" data-toggle="tooltip" data-placement="top"
                        title="Right Align">
                        <i class="fas fa-align-right"></i></button>
                    <button type="button" style=" color: #888888;" onclick="f6()"
                        class="btn shadow-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top"
                        title="Uppercase Text">
                        Upper Case</button>
                    <button type="button" style=" color: #888888;" onclick="f7()"
                        class="btn shadow-sm btn-outline-primary" data-toggle="tooltip" data-placement="top"
                        title="Lowercase Text">
                        Lower Case</button>
                    <button type="button" style=" color: #888888;" onclick="f8()"
                        class="btn shadow-sm btn-outline-primary" data-toggle="tooltip" data-placement="top"
                        title="Capitalize Text">
                        Capitalize</button>
                    <button type="button" style=" color: #888888;" onclick="f9()"
                        class="btn shadow-sm btn-outline-primary side" data-toggle="tooltip" data-placement="top"
                        title="Tooltip on top">
                        Clear Text</button>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-3 col-sm-3">
            </div>
            <div class="col-md-6 col-sm-9">
            <form action="_upload.php" method="POST" id="articles">
                <div class="flex-box" style="flex-direction: column;">
                    <textarea id="textarea" class="input shadow" name="title" rows="1" cols="100"
                        placeholder="Title Here "  style="margin-bottom: 10px;">
                    </textarea>
                    <textarea id="textarea1" class="input shadow" name="article" rows="10" cols="100"
                        placeholder="Your text here ">
                    </textarea>

                </div>
                <button type="submit" 
                    class="btn btn-primary" form="articles">Submit</button>
</form>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </section>
    <br>
    <br>
    <h6 style="text-align:center;">Priyansh Jha 2021.</h6>

    <!--External JavaScript file-->
    <script src="home.js"></script>
</body>

</html>