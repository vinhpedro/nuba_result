<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Result View</title>
</head>

<body>
    <?php include('header.php') ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <?php 
             // Attempt select query execution
             $regno=$_GET['regno'];
                    $sql = "SELECT DISTINCT course,result FROM tbl_result where regno='$regno'";
                    if($result = $conn->query($sql)){
                        if($result->num_rows > 0){
                            echo '<div class="display-5 fw-bolder text-center alert alert-success">'.strtoupper($regno).'</div>' ;
                            echo '<table class="table table-bordered table-striped table-responsive">';
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
                    
                    // Close connection
                    $conn->close();
            ?>
                <a href="http://localhost/nuba_result/admin/result.php" class="btn btn-danger">BACK</a>
            </div>
        </div>
    </div>
</body>

</html>