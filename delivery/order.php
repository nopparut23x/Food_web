<?php
require '../connection/connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
    <script src="../assets/js/jquery-3.6.0.js"></script>
    <script src="../assets/bootstrap5/js/bootstrap.min.js"></script>
    <script src="../assets/fontawesome/js/all.min.js"></script>

    <title>HOME</title>
    <style>
        body {
            background: #ECECEC;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <?php include 'slidebar.php'; ?>
            </div>
            <div class="col py-3">
            <?php

require 'nav.php'

?>
                <?php

                require 'body.php'

                ?>
            </div>
        </div>
    </div>


</body>

</html>