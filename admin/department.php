<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEPARTMENTS</title>
</head>

<body>
    <?php
include('header.php');
include('checker.php')
?>
    <div class="container">
        <div class="display-3 text-center">DEPARTMENTS</div>
        <div class="row">
            <div class="col">
                <form action="" method="post" class="text-center">

                    <div class="text-danger"><?php echo $err_msg;?></div>
                    <div class="text-success"><?php echo $success;?></div>
                    <input type="text" class="form-control" name="department" placeholder="Add a new department .....">
                    <input type="submit" value="ADD DEPARTMENT" class="btn btn-success m-2" name="add_dept">
                </form>


                <a href="http://localhost/nuba_result/admin/dashboard.php" class="btn btn-danger">EXIT</a>
            </div>
        </div>
    </div>
</body>

</html>