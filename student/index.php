<?php
include_once('../public/header.php');
    $resultSet=$conn->query("SELECT department FROM tbl_department");
include('../validate/register.php');
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/flick/flickity.css">
    <script src="../styles/flick/flickity.pkgd.min.js"></script>
    <script src="../styles/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="../public/styles/style.css">
    <title>LIBRARY SIGNUP</title>
</head>
<style>
.dropdown-content a:hover {
    background-color: #f1f1f1
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>

<body>

    <br>
    <div class="container ml-lg-5 mr-lg-5">


        <div class="row  ml-lg-5 mr-lg-5 p-lg-5">
            <div class="col  ml-lg-5 mr-lg-5 p-lg-5 shadow alert-success">
                <form action="" method="POST">

                    <label for="name"><i class="fa fa-user"></i>Name</label>
                    <input type="text" name="name" class="form-control">



                    <label for="regno"><i class="fa fa-user"></i>Regno</label>
                    <input type="text" name="regno" class="form-control">
                    <div class="text-danger"><?php echo $regno_err?></div><br>

                    <select name="gender" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected="gender">SELECT GENDER</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>


                    <label for="state"><i class="fas fa-envelope"></i>State of origin</label>
                    <input type="state" name="state" class="form-control" required>
                    <br>

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
                    </select>
                    <br>
                    <select name="section" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected="section">SELECT SECTION</option>
                        <option value="ND-1">ND-1</option>
                        <option value="ND-2">ND-2</option>
                        <option value="HND-1">HND-1</option>
                        <option value="HND-2">HND-2</option>
                    </select>




                    <label for=" password"><i class="fa fa-key"></i> Password</label>
                    <input type="password" name="password" class="form-control" required>
                    <div class="text-danger"><?php echo $pass_err?></div><br>



                    <br /><br />
                    <input type="submit" value="SUBMIT" class="btn btn-outline-primary">
                </form>
            </div>
        </div>
    </div>

    <?php include_once('../public/bottom.php')?>

</body>


</html>