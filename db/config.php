<?php
$host="localhost";
$user="root";
$password="";
$db="nuba_result";

$conn=new mysqli($host,$user,$password,$db);

if($conn->connect_error){
    die('UNABLE TO CONNECT'.$conn->error);
};

/*$sql="CREATE TABLE tbl_result(
    id INT(30) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    department VARCHAR(25) NOT NULL,
    regno VARCHAR(25) NOT NULL,
    course VARCHAR(25) NOT NULL,
    result VARCHAR(25) NOT NULL

)";

IF($conn->query($sql) == "true"){
    echo("created");
}else{
    die($conn->error);
}*/

?>