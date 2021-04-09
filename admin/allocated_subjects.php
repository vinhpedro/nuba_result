<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALLOCETED SUBJECTS</title>
</head>

<body>
    <?php 
    include('./header.php');?>
    <div class="container">
        <div class="row">
            <div class="col">

                <?php
    $id=$_GET['id'];
    echo '<div class="alert alert-success text-center fw-bolder mt-5">'.strToUpper($id).'</div>';
    $sql="SELECT id,course FROM  tbl_allocate WHERE regno='$id'";

                        if($result = $conn->query($sql)){
                        if($result->num_rows > 0){
                            echo '<table class="table table-bordered table-striped table-responsive">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>ID</th>";
                                        echo "<th>COURSES</th>";
                                        
                                       
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody id='myTable'>";
                                while($row = $result->fetch_array()){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['course'] . "</td>";
                                       
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.".$conn->error;
                    }
                    
                    // Close connection
                    $conn->close();
                    ?>
            </div>
        </div>
    </div>
</body>

</html>