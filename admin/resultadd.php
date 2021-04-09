<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add result</title>
</head>

<body>
    <?php
$regno=$_GET['regno'];

include('./header.php');



$resultSet=$conn->query("SELECT distinct course FROM tbl_allocate where regno='$regno'");
?>


    <div class="container">
        <div class="row">
            <div class="col">
                <?php 

    

 
  
 $err_msg=$success="";
  if(isset($_POST['allocate'])){
      $course=$_POST['course'];
      $result=$_POST['result'];
      

      $sql="SELECT course,regno FROM  tbl_result WHERE course=? && regno=?";
      $stmt=$conn->prepare($sql);
      $stmt->bind_param('ss',$course,$regno);
      $stmt->execute();
      $stmt->store_result();

      if($stmt->num_rows >0){
        $err_msg= "subject have been assigned, please choose another!";
      }else{
          $sql="INSERT INTO tbl_result(regno,course,result) VALUES(?,?,?)";
          $stmt=$conn->prepare($sql);
      
            $stmt->bind_param('sss',$regno,$course,$result);
            if($stmt->execute()){
                $success= "Inserted";
            }
      }
      
    }

    $conn->close();
    ?>


                <form action="" method="post" class="text-center">
                    <div class="text-danger fw-bold"><?php echo $err_msg ?></div>
                    <div class="text-success fw-bold"><?php echo $success ?></div>
                    <br>
                    <div class="alert alert-primary pt-3"><?php echo strtoUpper($regno) ?></div>
                    <br>



                    <select name="course" class="form-select form-select-lg mb-3">
                        <?php
                        echo "<option disabled selected>Select course</option>";
                    while($rows = $resultSet->fetch_assoc()){
                        $course=$rows['course'];
                        echo "
                        <option value='$course'>$course</option>";
                    }
                    ?>
                    </select>
                    <br>
                    <label for="result" class="fw-bold">ALLOCATE RESULT</label>
                    <input type="number" name="result" class=" form-control">

                    <BR>

                    <INPUT type="submit" value="ASSIGN" class="btn btn-primary" name="allocate">
                    <a href="http://localhost/nuba_result/admin/result.php" class="btn btn-danger">EXIT</a>
                </form>


</body>

</html>