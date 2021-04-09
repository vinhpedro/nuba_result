<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COURSES</title>
</head>

<body>
    <?php
include('header.php');
$resultSet=$conn->query("SELECT department FROM tbl_department");
include('checker.php');
?>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="display-3 text-center">COURSES</div>

                <form action="" method="post">
                    <div class="text-danger"><?php echo $err_msg;?></div>
                    <div class="text-success"><?php echo $success;?></div>

                    <label for="tbl_department">DEPARTMENT</label>
                    <select name="tbl_department" class="form-select form-select-lg mb-3">
                        <?php
                        echo "<option disabled selected>Select Department</option>";
                    while($rows = $resultSet->fetch_assoc()){
                        $department=$rows['department'];
                        echo "
                        <option value='$department'>$department</option>";
                    }
                    ?>
                    </select><br>

                    <label for="state">COURSE CODE</label>
                    <input type="state" name="course" class="form-control" required>
                    <br>
                    <input type="submit" value="ADD COURSE" name="add_course" class="btn btn-success">
                    <a href="http://localhost/nuba_result/admin/dashboard.php" class="btn btn-danger">EXIT</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>