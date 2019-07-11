<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center">EVENT APP<span class="splash-description">Fill the form to apply for Registration.</span></div>
            <div class="card-body">
              
                
                    <div class="form-group">
                        <!-- <label for="">Full Name</label> -->
                        <input class="form-control form-control-lg" id="name" type="text" placeholder="Full Name" autocomplete="off">
                    </div>
                    <div class="form-group">
                    <!-- <label for="">Phone</label> -->
                        <input class="form-control form-control-lg" id="phone" type="text" placeholder="Phone">
                    </div>

                    <div class="form-group">
                    <!-- <label for="">Email</label> -->
                        <input class="form-control form-control-lg" id="email" type="email" placeholder="Email">
                    </div>

                    <div class="form-group">
                    <!-- <label for="">Username</label> -->
                        <input class="form-control form-control-lg" id="username" type="text" placeholder="Username">
                    </div>

                    <div class="form-group">
                    <!-- <label for="">Password</label> -->
                        <input class="form-control form-control-lg" id="password" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                    <!-- <label for="">Confirm Password</label> -->
                        <input class="form-control form-control-lg" id="passwordConfirm" type="password" placeholder="Confirm Password">
                    </div>

                    <!-- <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div> -->
                    <button type="button" onclick="register()" class="btn btn-primary btn-lg btn-block">Register</button>
                
            </div>
            <!-- <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div> -->
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="js/custom.js"></script>
</body>
 
</html>