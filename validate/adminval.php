<?php

$err_msg=$pass_err="";

if($_SERVER["REQUEST_METHOD"] == "POST"){
	$username=$_POST['username'];
	$password=$_POST['password'];

 
    
	if(empty(trim($username))){
	$regno_err="please fill in username";
	}elseif ($stmt = $conn->prepare('SELECT id,username,password,type FROM admin WHERE username = ?')) {
        
        $stmt->bind_param('s', $username);
		$stmt->execute();

		$stmt->store_result();

		if(empty(trim($password))){
			$pass_err= "please fill in field";
		}elseif($stmt->num_rows == false){
			$err_msg= "Incorrect username Number or Password";
		}else{	
			$stmt->bind_result($id,$user,$pass,$type);
			$stmt->fetch();
			
			if(trim($type) != "admin"){
                echo "you are not an admin";
            }
			elseif($user == $username && $password == $pass){
				
				session_start();
				$_SESSION['id']=$id;
				$_SESSION['admin']="true";
				$_SESSION['username']=$username;
				header("location:dashboard.php");
			}else{
				echo "Oops! Something went wrong";
			}
			}

		$stmt->close();	
		}
    }$conn->close();
?>