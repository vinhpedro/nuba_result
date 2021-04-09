<?php 
include("../db/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/fontawesome/css/all.min.css">
    <title>Document</title>
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../public/index.php">

                <img src="../pix/nubalogo.jpeg" width="50" class="d-inline-block align-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../public/index.php"><i
                                class="fas fa-home"></i>Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user"></i>Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">

                            <li><a class="dropdown-item" href="../student/login.php">Login</a></li>
                            <hr class="dropdown-hr">
                            <li><a class="dropdown-item fw-bold" href="../student">Signup</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">About</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <script src="../style/js/bootstrap.min.js"></script>

</body>

</html>