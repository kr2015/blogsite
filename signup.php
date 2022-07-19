<?php
 session_start();
 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    // redirect them to your desired location
    header('location:feed.php');
    exit;
}
?>

<?php

include '_signuphandler.php';

?>
<html>

<head>
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<?php      
    if($showError){
    echo ' <div id="signerr" class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="myFunction(){document.getElementById("signerr").style.display= "none"}">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
    }
    ?>
    <section class="vh-100" style="background-color: #9A616D;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="loginimg.webp" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="signup.php" method="post">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">Blogsite</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Create Your
                                            Account</h5>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="fullname"
                                                class="form-control form-control-lg" name="fullname"/>
                                            <label class="form-label" for="fullname">Full Name</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="emailid"
                                                class="form-control form-control-lg" name="email"/>
                                            <label class="form-label" for="email">Email address</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="password" name="pass"
                                                class="form-control form-control-lg" />
                                            <label class="form-label" for="password" >Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Sign Up</button>
                                        </div>

                                        <a class="small text-muted" href="#!">Forgot password?</a>
                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Have an account? <a
                                                href="login.php" style="color: #393f81;">Login</a></p>
                                        <a href="#!" class="small text-muted">Terms of use.</a>
                                        <a href="#!" class="small text-muted">Privacy policy</a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>