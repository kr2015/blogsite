<?php
 session_start();
 if(!(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)){
    // redirect them to your desired location
    header('location:feed.php');
    exit;
}
?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';

    
    $sno=$_SESSION['sno'] ;
    $title = $_POST['title'];
    $article = $_POST['article'];
    $sql = "INSERT INTO `posts` ( `sno`, `post_title`, `post_text`, `post_dt`) VALUES ('$sno','$title', '$article', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    echo "<script>
              alert('Posted Successfully');
              window.location.href='index.php';
            </script>"; 
}

?>