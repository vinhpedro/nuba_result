<?php 
session_start();
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

            <img src="../pix/nubalogo.jpeg" width="50" class="d-inline-block align-top">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="dashboard.php"><i
                                class="fas fa-home"></i>Home</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="result.php" tabindex="-1">Check Result</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php" tabindex="-1">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1">About</a>
                    </li>
                </ul>
                <?php echo "<b class='text-light'>Welcome  ".$_SESSION['name']."</b>"; ?>
                <a class="nav-link text-danger" href="../validate/logout.php" tabindex="-1">Logout</a>

            </div>
        </div>
    </nav>

    <script src="../style/js/bootstrap.min.js"></script>

</body>

</html>