<?php include '../connection/connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social NetWork</title>
    <link rel="stylesheet" href="../assets/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
    <script src="../assets/js/jquery-3.6.0.js"></script>
    <script src="../assets/bootstrap5/js/bootstrap.min.js"></script>
    <script src="../assets/fontawesome/js/all.min.js"></script>

</head>

<body>
    <!-- ด้านบน -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" style="font-size: 30px;"><b>IT-CTC <span class="text-warning"><samp>FOOD DELIVERY</samp></span></b></a>
            <div class="d-flex">
                <div class="input-group">
                <a onclick="return confirm('คุณต้องการออกจากระบบหรือไม่')" href="../logout.php">
                    <button class="btn btn-warning btn-sm" type="submit" ><strong><i class="fas fa-sign-in-alt"></i> Logout </strong></button>
                </a>
                  </div>
            </div>
        </div>
    </nav>
