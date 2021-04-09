<?php 

$err_msg=$success="";



 if(isset($_POST['add_dept'])){
     $dept=$_POST['department'];

     if(empty(trim($dept))){
         $err_msg="PLEASE FILL IN THIS FIELD";
     }else{
         $sql="INSERT INTO tbl_department(department) VALUES(?)";
              $stmt=$conn->prepare($sql);
              $stmt->bind_param('s',$dept);
                   $dept=$_POST['department'];

              $stmt->execute();
              $stmt->close();
                $success="NEW DEPARTMENET INSERTED";
        }
    }
     



if(isset($_POST["add_course"])){
    $department=$_POST['tbl_department'];
    $courses=$_POST['course'];

    $sql="INSERT INTO tbl_courses(department,courses) VALUES(?,?)";
$stmt=$conn->prepare($sql);
$stmt->bind_param('ss',$department,$courses);

if($stmt->execute()){
    $success="new record inserted";
}else{
    $err_msg="Oops , something went wrong".$conn->error;
}
}

if(isset($_POST["change"])){
    $old=$_POST['old'];
    $new=$_POST['new'];

    $sql="SELECT password FROM admin WHERE password=?";
$stmt=$conn->prepare($sql);
$stmt->bind_param('s',$old);
$stmt->execute();
$stmt->store_result();

if($stmt->num_rows == false){
    $err_msg="Old password is not correct";
}else{
    $update="UPDATE admin SET password={$new}";
    if($conn->query($update)){
        $success="PASSWORD HAVE BEEN SUCCESSFULLY UPDATED";
    }else {
        $err_msg= "Please fill all fields";
    }
}


}



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