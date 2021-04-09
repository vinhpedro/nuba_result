<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALLOCATE TO STUDENT</title>
</head>

<body>
    <?php include('header.php');
    $resultSet=$conn->query("SELECT courses FROM tbl_courses");
    ?>


    <div class="container">
        <div class="row">
            <div class="col">
                <?php 
    $id=$_GET['id'];
    


         $regno="SELECT regno,department FROM students WHERE file_no=$id";
  $sql=$conn->query($regno);
  
  if($sql->num_rows>0){
      $row=$sql->fetch_assoc();
      $file_no= strtoupper($row['regno']);
      $department= strtoupper($row['department']);

  }
$err_msg=$success="";
if(isset($_POST["add_dept"])){
    $department=$_POST['department'];
    $sql="INSERT INTO tbl_department(department) VALUES(?)";
$stmt=$conn->prepare($sql);
$stmt->bind_param('s',$department);

if($stmt->execute()){
    $success="new record inserted";
}else{
    $err_msg="Oops , something went wrong";
}
}

     $regno="SELECT regno,department FROM students WHERE file_no=$id";
  $sql=$conn->query($regno);
  
  if($sql->num_rows>0){
      $row=$sql->fetch_assoc();
      $file_no= strtoupper($row['regno']);
      $department= strtoupper($row['department']);

  }
  
 $err_msg=$success="";
  if(isset($_POST['allocate'])){
      $courses=$_POST['courses'];

      $sql="SELECT regno, course FROM  tbl_allocate WHERE course=? AND regno=?";
      $stmt=$conn->prepare($sql);
      $stmt->bind_param('ss',$courses,$file_no);
      $stmt->execute();
      $stmt->store_result();

      if($stmt->num_rows >0){
        $err_msg= "subject already exist! Please choose another";
      }else{
          $sql="INSERT INTO tbl_allocate(department,regno,course) VALUES(?,?,?)";
          $stmt=$conn->prepare($sql);
      
            $stmt->bind_param('sss',$department,$file_no,$courses);
            if($stmt->execute()){
                $success= "Inserted";
            }
      }
      
    }

    $conn->close();
    ?>


                <form action="" method="post" class="text-center">
                    <div class="text-danger"><?php echo $err_msg ?></div>
                    <div class="text-success"><?php echo $success ?></div>
                    <br>
                    <div class="alert alert-primary pt-3"><?php echo $file_no ?></div>
                    <br>
                    <div class="alert alert-primary pt-3"><?php echo $department ?> - DEPARTMENT</div>
                    <br>


                    <select name="courses" class="form-select form-select-lg mb-3">
                        <?php
                        echo "<option disabled selected>Allocate course</option>";
                    while($rows = $resultSet->fetch_assoc()){
                        $courses=$rows['courses'];
                        echo "
                        <option value='$courses'>$courses</option>";
                    }
                    ?>
                    </select>
                    <br>

                    <INPUT type="submit" value="ALLOCATE" class="btn btn-primary" name="allocate">
                </form>












            </div>

        </div>
    </div>
</body>

</html>