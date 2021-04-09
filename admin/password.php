<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin |password</title>
</head>

<body>
    <?php
include('header.php');
include('checker.php');
?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="display-3 text-center">CHANGE ADMIN PASSWORD</div>
                <form action="" method="post" class="text-center">
                    <div class="text-danger"><?php echo $err_msg;?></div>
                    <div class="text-success"><?php echo $success;?></div>
                    <input type="text" class="form-control mt-3" name="old" placeholder="ENTER YOUR OLD PASSWORD">
                    <input type="text" class="form-control mt-4" name="new" placeholder="ENTER YOUR NEW PASSWORD">
                    <input type="submit" value="CHANGE PASSWORD" name="change" class="btn btn-success mt-4"><br>
                    <a href="http://localhost/nuba_result/admin/dashboard.php" class="btn btn-danger">EXIT</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>