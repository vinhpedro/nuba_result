<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student profile</title>
</head>

<body>
    <?php include('header.php');?>
    <div class="container">

        <?php

            $sql="SELECT name,gender,state,regno,department,section FROM students WHERE file_no={$_SESSION['id']}";

            $result=$conn->query($sql);
                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        $name=$row['name'];
                        $gender=$row['gender'];
                        $state=$row['state'];
                        $regno=$row['regno'];
                        $department=$row['department'];
                        $section=$row['section'];
                    }
                }

            ?>
        <div class="row">

            <div class="col-2"></div>
            <div class="col-lg">

                <table class="table table-hover table-striped mr-5 table-responsive table-bordered">
                    <div class="display-5 text-center fw-bold text-success">
                        MY PROFILE
                    </div>
                    <tr>
                        <th class="col">NAME</th>
                        <td class="col"><?php echo $name?></td>
                    </tr>

                    <tr>
                        <th class="col">GENDER</th>
                        <td class="col"><?php echo $gender?></td>
                    </tr>

                    <tr>
                        <th class="col">STATE OF ORIGIN</th>
                        <td class="col"><?php echo $state?></td>
                    </tr>

                    <tr>
                        <th class="col">REGISTRATION NUMBER</th>
                        <td class="col"><?php echo $regno?></td>
                    </tr>

                    <tr>
                        <th class="col">DEPARTMENT</th>
                        <td class="col"><?php echo $department?></td>
                    </tr>
                    <tr>
                        <th class="col">SECTION</th>
                        <td class="col"><?php echo $section?></td>
                    </tr>
                </table>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    </div>
</body>

</html>