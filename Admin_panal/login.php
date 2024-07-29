<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content='IE=edge' http-equiv=X-UA-Compatible>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MS Login Panel</title>
    <link rel="shortcut icon" type="image/png" href="#">

    <!-- Core Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/line-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    #contener {
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;

    }

    #row {
        background-color: white;
        height: 100vh;
        width: 500px;
        display: flex;
        justify-content: center;
        border: 1px solid whitesmoke;
    }

    h2 {
        margin-top: 20px;
        text-align: center;
    }

    #input {
        height: 40px;
        width: 450px;
        margin-left: 20px;
        margin-top: 30px;
    }

    #condition {
        margin-top: 40px;
        padding: 10px;
    }

    #check1 {
        margin-left: 10px;
    }

    #ogin_Register {
        display: block;
        flex-direction: column;
    }

    .login {
        width: 100%;
        margin-top: 70px;
        display: flex;
        justify-content: center;
        text-decoration: none;
        align-items: center;

    }

    .login_button {
        height: 30px;
        width: 80px;
        cursor: pointer;
        background-color: green;
        border: none;
        color: white;
    }

    .button_login {
        width: 100%;
        margin-top: 70px;
        display: flex;
        justify-content: center;
    }

    .login a {
        text-decoration: none;
    }

    .login p {
        padding: 7px;
        margin-left: 16px;
        font-size: 15px;
    }

    .button_login button {
        height: 35px;
        width: 100px;
        cursor: pointer;
        background-color: green;
        border: none;
        color: white;
    }

    p {
        text-align: center;
        color: red;
        margin-top: 20px;
        font-size: 13px;
    }
</style>

<body>
    <!-- ########## START: Login Form ########## -->
    <div class="login-form bg-white p-3 p-lg-5 rounded" id="contener">
        <div class="row" id="row">
            <div class="col-12 col-lg-6 d-none d-lg-flex pr-lg-2">

            </div>
            <div class="col-12 col-lg-6 pl-lg-2">
                <div class="pagetitle mb-4">
                    <h2>Login</h2>
                    <?php
                    session_start();

                    if (isset($_POST['email']) && isset($_POST['password'])) {
                        $email = $_POST['email'];
                        $password = $_POST['password'];

                        if (!empty($email) &&  !empty($password)) {
                            if ($email ==  $_SESSION['Email'] && $password ==  $_SESSION['password']) {
                                header("location:index.php");
                            } else {
                                echo "<p>invalide Email or Password</p>";
                            }
                        } else {
                            echo "<p class = 'empty'>Empty</p>";
                        }
                    }

                    ?>
                    <!-- <span>Fill the below form to create a new account.</span> -->
                </div>
                <form action="login.php" method="post">

                    <div class="form-group mb-4">
                        <!-- <label>Email Id</label> -->
                        <input id="input" type="email" name="email" class="form-control border-light input-h-42" placeholder="john.doe@domain.com" required>
                    </div>
                    <div class="form-group mb-4">
                        <!-- <label>Password</label> -->
                        <input id="input" type="password" name="password" class="form-control border-light input-h-42" placeholder="Password" aria-label="Password" required>
                    </div>
                    <div class="button_login">
                        <button type="submit" class="btn btn-primary waves-effect waves-primary w-50">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>
    <!-- ########## END: Login Form ########## -->
</body>

<script src="assets/scripts/jquery.min.js"></script>
<script src="assets/scripts/popper.min.js"></script>
<script src="assets/scripts/bootstrap-slider.min.js"></script>
<script src="assets/scripts/bootstrap.min.js"></script>
<script src="assets/scripts/bootstrap.bundle.min.js"></script>
<script src="assets/scripts/bootstrap-select.min.js"></script>
<script src="assets/scripts/bootstrap-tooltip-custom-class.js"></script>
<script src="assets/scripts/jquery.mCustomScrollbar.js"></script>
<script src="assets/scripts/datatables.min.js"></script>
<script src="assets/scripts/ripple.min.js"></script>
<script src="assets/scripts/custome.js"></script>

</html>