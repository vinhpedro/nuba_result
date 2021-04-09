<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../style/jquery/jquery.min.js"></script>
    <title>DASHBOARD | RESULT</title>
</head>

<body>
    <?PHP include('header.php')?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mt-5 mb-3 clearfix">
                    <h2 class="pull-left">Students Result</h2>

                </div>

                <script>
                $(document).ready(function() {
                    $("#myInput").on("keyup", function() {
                        var value = $(this).val().toLowerCase();
                        $("#myTable tr").filter(function() {
                            $(this).toggle($(this).text().toLowerCase().indexOf(
                                value) > -1)
                        });
                    });
                });
                </script>

                <input type="text" class="form-control" id="myInput"
                    placeholder="Search for Students by Name, Departments or Registration Number...."><br>
                <?php
                    
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM students";
                    if($result = $conn->query($sql)){
                        if($result->num_rows > 0){
                            echo '<table class="table table-bordered table-striped table-responsive">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>File No</th>";
                                        echo "<th>name</th>";
                                        echo "<th>State</th>";
                                        echo "<th>Regno</th>";
                                        echo "<th>Department</th>";
                                       
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody id='myTable'>";
                                while($row = $result->fetch_array()){
                                    echo "<tr>";
                                        echo "<td>" . $row['file_no'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['state'] . "</td>";
                                        echo "<td>" . $row['regno'] . "</td>";
                                        echo "<td>" . $row['department'] . "</td>";
                                        echo "<td>";
                                         echo '<a href="resultadd.php?regno='. $row['regno'] .'" class="mr-3" title="allocate Record" data-toggle="tooltip"><span class="fa fa-code-branch"></span></a>';
                                         echo '     <a href="resultview.php?regno='. $row['regno'] .'" class="mr-3" title="allocate Record" data-toggle="tooltip"><span class="fa fa-user-check"></span></a>';
                                         
                                         echo "</td>";
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
                <a href="http://localhost/nuba_result/admin/dashboard.php" class="btn btn-danger">EXIT</a>
            </div>
        </div>
    </div>


    </div>
    </div>

    </div>
</body>

</html>