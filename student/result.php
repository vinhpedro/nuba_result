<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD | MY RESULT</title>
</head>

<body>
    <?php include('header.php')?>

    <div class="container">
        <div class="row">
            <div class="col-10">
                <br><br>
                <?php 
$id=$_SESSION['id'];
$sql="SELECT name,regno,department,section FROM students WHERE file_no=$id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $regno=$row["regno"];
  echo "<h5 class='alert alert-light'>";
        echo "Name: " . strtoupper($row["name"]);
        echo "<br>Regno: " . strtoupper($row["regno"]);
        echo "<br> Department: " . strtoupper($row["department"]);
        echo " / " . $row["section"];
        echo "</h5>";
   
}












            $sql = "SELECT course,result FROM tbl_result where regno='$regno'";
                    if($result = $conn->query($sql)){
                        if($result->num_rows < 0){
                            header("location:noresult.php");
                        }
                        elseif($result->num_rows > 0){
                            echo '<table class="table  table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>COURSE</th>";
                                        echo "<th>SCORE</th>";
                                        
                                        
                                       
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody id='myTable'>";
                                while($row = $result->fetch_array()){
                                    echo "<tr>";
                                        
                                        echo "<td>" . $row['course'] . "</td>";
                                        echo "<td>" . $row['result'] . "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                    
                    

                    $sql="SELECT SUM(result) AS count FROM tbl_result WHERE regno='$regno'"; 
                    $result=$conn->query($sql);
                    
                    $rec=$result->fetch_assoc();
                    $total=$rec['count'];
                    echo "<h6 class='text-center'>Total: ".$total."</h6>";
                    
                    
   

                    
                    $conn->close();
?>

                <div class="text-right text-center">
                    <br><br><br><br><br><br><br>
                    <button class="btn btn-success" onClick="window.print()"><i class="fa fa-print"></i>PRINT</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>