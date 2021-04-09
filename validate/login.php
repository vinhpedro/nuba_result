<?php

$err_msg = $regno_err= $password_err= $username=$username_err="";

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['st_login'])){
	$regno=strtolower($_POST['regno']);
	$password=trim($_POST['password']);

 
    
	if(empty(trim($regno))){
	$regno_err="please fill in regno";
	}elseif ($stmt = $conn->prepare('SELECT file_no,name,regno,department,password FROM students WHERE regno = ?')) {
        
        $stmt->bind_param('s', $regno);
		$stmt->execute();

		$stmt->store_result();

		if(empty($password)){
			$password_err= "please fill in password";
		}elseif($stmt->num_rows == false){
			$regno_err= "Incorrect Reg Number or Password";
		}else{	
			$stmt->bind_result($file_no,$name,$regno,$department,$pass);
			$stmt->fetch();
			
			
			if($password == $pass){
				 
				session_start();
				$_SESSION['id']=$file_no;
				$_SESSION['status']="true";
				$_SESSION['name']=$name;
				$_SESSION['department']=$department;
				header("location:dashboard.php");
			}else{
				
				$err_msg= "Incorrect reg number or password";
			}
			}

		$stmt->close();	
		}
    }










	if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['adm_login'])){
	$username=strtolower($_POST['username']);
	$password=trim($_POST['password']);

 
    
	if(empty(trim($username))){
	$regno_err="please fill in username";
	}elseif ($stmt = $conn->prepare('SELECT id, username,name,password FROM admin WHERE username = ?')) {
        
        $stmt->bind_param('s', $username);
		$stmt->execute();

		$stmt->store_result();

		if(empty($password)){
			$password_err= "please fill in password";
		}elseif($stmt->num_rows == false){
			$username_err= "Incorrect Username or Password";
		}else{	
			$stmt->bind_result($id,$username,$name,$pass);
			$stmt->fetch();
			
			
			if($password == $pass){
				 
				session_start();
				$_SESSION['id']=$id;
				$_SESSION['status']="true";
				$_SESSION['name']=$name;
				$_SESSION['username']=$username;
				header("location:dashboard.php");
			}else{
				
				$err_msg= "Incorrect reg number or password";
			}
			}

		$stmt->close();	
		}
    }$conn->close();
?>