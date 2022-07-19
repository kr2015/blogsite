<?php
$showAlert = false;
$showError =false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST["email"];
    $name = $_POST["fullname"];
    $password = $_POST["pass"];
    // $exists=false;

    // Check whether this username exists
    $existSql = "SELECT * FROM `userprofile` WHERE email = '$email'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "Account With This Email Already Exists"; 
        header("Loaction: signup.php");
    }
    else{
        // $exists = false; 
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `userprofile` ( `email`, `name`, `password`, `dt`) VALUES ('$email','$name', '$hash', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            echo "<script>
              alert('Acount Created Sucessfully');
              window.location.href='index.php';
            </script>"; 
            //header("Location: signup.php?account");
    }
}
    
?>