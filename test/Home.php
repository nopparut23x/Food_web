<?php 
session_start();
$email = $_SESSION['Member_Email'];
require "../connection/connect.php"; 
//$email = $_SESSION['Member_Email'];
?>
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
    <?php //include 'menu.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="list-group mt-4 text-center">
                    <?php //require "left-menu.php"; ?></div>
            </div>
            <?php
                    $sql = "SELECT * FROM ctc_member WHERE Member_Email = '$email'";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        // output data of each row
                        $row = $result->fetch_assoc();
                            $name = $row['Member_Name'];
                            $Sname = $row['Member_Surname'];
                            $gender = $row['Gender'];
                            $Email = $row['Member_Email'];
                            $pass = $row['Member_Password'];
                            $address = $row['Member_address'];
                            $tell = $row['Member_Tell'];
                            $profile = $row['Member_Image'];
                        }
                    ?>
            <div class="col-md-8">
                <div class="card shadow-lg my-5 border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 ">
                                <center>
                                <form method="post" enctype="multipart/form-data" action="../edit_profile2.php">
                                        <img  class="rounded-circle" src="../<?php echo $profile ?>" width="200px" height="200px">
                                        <div class="col-md-6">
                                            <br>
                                            <input type="file" class="form-control"  name="profile">
                                        </div>


                                </center>

                                <div class="row my-5">
                                    <div class="col-md-6">
                                        <input type="text" name="firstname" class="form-control" required value="<?php echo $row['Member_Name']; ?>">
                                        <p>Firstname</p>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="lastname" class="form-control" required value="<?php echo $row['Member_Surname']; ?>">
                                        <p>Lastname</p>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-check-inline">
                                            <span>GENDER:</span>
                                            <input type="radio" name="gender" id="radio1" class="form-check-input" checked value="<?php echo $row['Gender']; ?>">
                                            <label class="form-check-label" for="radio1">Male</label>
                                        </div>
                                        <div class="form-check-inline">

                                            <input type="radio" name="gender" id="radio2" class="form-check-input" checked value="<?php echo $row['Gender']; ?>">
                                            <label class="form-check-label" for="radio2">Female</label>
                                        </div>
                                        <div class="form-check-inline">

                                            <input type="radio" name="gender" id="radio3" class="form-check-input" checked value="<?php echo $row['Gender']; ?>">
                                            <label class="form-check-label" for="radio3">other</label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mt-4">
                                        <input type="email" name="email" class="form-control" required value="<?php echo $row['Member_Email']; ?>">
                                        <p>Email</p>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <input type="password" name="password" class="form-control" pattern=".{6,}" title="กรุณาใส่มารหัสอย่างน้อย 6 ตัว " required value="<?php echo ($row['Member_Password']); ?>">
                                        <p>Password</p>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="address" class="form-control" required value="<?php echo $row['Member_address']; ?>">
                                        <p>Address</p>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="text" name="tell" class="form-control" required value="<?php echo $row['Member_Tell']; ?>">
                                        <p>TELEPHONE</p>
                                    </div>
                                    <div class="col-md-12 my-5 d-flex justify-content-center">
                                        <button class="btn btn-warning" type="submit" name="edit">
                                            เเก้ไขข้อมูล
                                        </button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>