<?php 
$regno_err=$pass_err="";




if($_SERVER["REQUEST_METHOD"] == "POST"){
    $password=strtolower($_POST['password']);
    $regno=strtolower($_POST['regno']);
    


    if(strlen($regno)<9){
        $regno_err="regno must be more than 9 Characters";
    }elseif(empty(trim($regno))){
        $regno_err="please fill in this field";
    }elseif($stmt = $conn->prepare('SELECT file_no, name FROM students WHERE regno = ?')) {
        // Bind parameters (s = string, i = int, b = blob, etc), hash the password using the PHP password_hash function.
        $stmt->bind_param('s', $regno);
        $stmt->execute();
        $stmt->store_result();
        // Store the result so we can check if the account exists in the database.
        
        if ($stmt->num_rows > 0) {
            // Username already exists
            $regno_err= 'regno exists, please choose another!';            
        } else {
            $sql="INSERT INTO students(name,gender,state,regno,department,section,password) VALUES(?,?,?,?,?,?,?)";
            if(strlen($password)<6){
                $pass_err="password must me be more than 6 characters";
            }elseif($stmt=$conn->prepare($sql)){
                $name=mysqli_real_escape_string($conn,$_POST['name']);
                $gender=mysqli_real_escape_string($conn,$_POST['gender']);
                $state=mysqli_real_escape_string($conn,$_POST['state']);
                $regno=mysqli_real_escape_string($conn,$regno);
                $department=mysqli_real_escape_string($conn,$_POST['tbl_department']);
                $section=mysqli_real_escape_string($conn,$_POST['section']);
                $pass=mysqli_real_escape_string($conn,$password);
                
                $stmt->bind_param('sssssss',$name,$gender,$state,$regno,$department,$section,$pass);
                if($stmt->execute()){
                    
                    echo '<div class="alert alert-success">SUCCESSFULLY REGISTERED PROCEED TO <a class="alert-link" href="login.php">LOGIN</a></div>';
                    
                }
            }else{
                echo "something went wrong";
            }
        }
        
    } else {
        // Something is wrong with the sql statement, check to make sure accounts table exists with all 3 fields.
        echo 'Could not prepare statement!';
    }
}
$conn->close();
?>