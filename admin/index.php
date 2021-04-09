<?php
include_once('../public/header.php');
include('../validate/login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student login</title>
</head>
<style>
.container {
    width: 500px;
}
</style>

<body>

    <div class="container ml-lg-5 mr-lg-5">
        <div class="row ml-lg-5 mr-lg-5 p-lg-5">
            <div class="col ml-lg-5 mr-lg-5 p-lg-5 shadow">
                <form action="" method="POST">
                    <div class="display-6 text-center fw-bold text-success">Admin Login</div><br>
                    <div class="text-danger"><?php echo $err_msg ?></div>
                    <label for="regno">Username</label>
                    <input type="text" name="username" class="form-control">
                    <div class="text-danger"><?php echo $username_err ?></div>

                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                    <div class="text-danger"><?php echo $password_err ?></div>

                    <input type="submit" value="LOGIN" name="adm_login" class="btn btn-outline-primary"><br />
                    Dont Have an Account? <a href="index.php" class="link-success">SIGNUP</a>
                </form>
            </div>
        </div>
    </div>


</body>

</html>