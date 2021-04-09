<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student| Dashboard</title>
</head>

<body>
    <?php
include('header.php')
?>

    <div class="container">
        <div class="row ">
            <div class="col-sm text-center">
                <a href="department.php">
                    <div class="alert alert-success m-2 p-5">
                        <div class=" alert-heading fw-bold text-decoration-none alert-link ">
                            <i class="fa fa-home" style="font-size:50px"></i><br>
                            DEPERTMENTS
                        </div>
                        <div class=" alert-info">View and add departments</div>
                    </div>
                </a>
            </div>

            <div class="col-sm text-center">
                <a href="courses.php">
                    <div class="alert alert-success m-2 p-5">
                        <div class=" alert-heading fw-bold text-decoration-none alert-link ">
                            <i class="fa fa-book" style="font-size:50px"></i><br>

                            COURSES
                        </div>
                        <div class=" alert-info">View and add courses according to department</div>
                    </div>
                </a>
            </div>

            <div class="col-sm text-center">
                <a href="students.php">
                    <div class="alert alert-success m-2 p-5">
                        <div class=" alert-heading fw-bold text-decoration-none alert-link ">
                            <i class="fa  fa-user" style="font-size:50px"></i><br>
                            STUDENTS
                        </div>
                        <div class=" alert-info">View all Students contained in Database</div>
                    </div>
                </a>
            </div>

        </div>



        <div class="row">

            <div class="col-sm text-center">
                <a href="allocate.php">
                    <div class="alert alert-success m-2 p-5">
                        <div class=" alert-heading fw-bold text-decoration-none alert-link ">
                            <i class="fa fa-code-branch" style="font-size:50px"></i><br>
                            ALLOCATE COURSE CODE
                        </div>
                        <div class=" alert-info">Allocate Course code to each students</div>
                    </div>
                </a>
            </div>

            <div class="col-sm text-center">
                <a href="result.php">
                    <div class="alert alert-success m-2 p-5">
                        <div class=" alert-heading fw-bold text-decoration-none alert-link ">
                            <i class="fa fa-paperclip " style="font-size:50px"></i><br>
                            STUDENTS RESULT
                        </div>
                        <div class=" alert-info">View and Manage all student Results</div>
                    </div>
                </a>
            </div>




            <div class="col-sm text-center">
                <a href="password.php">
                    <div class="alert alert-success m-2 p-5">
                        <div class=" alert-heading fw-bold text-decoration-none alert-link ">
                            <i class="fa fa-key" style="font-size:50px"></i><br>
                            CHANGE PASSWORD
                        </div>
                        <div class=" alert-info">Manage your password</div>
                    </div>
                </a>
            </div>



        </div>


    </div>
</body>

</html>