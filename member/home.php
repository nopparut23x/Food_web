<?php 
session_start();
$email = $_SESSION['Member_Email'];
require "menu.php";
?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="list-group mt-4 text-center">
                    <?php include "left-menu.php"; ?>
                </div>
            </div>          
            <div class="col-md-8">
                 <div class="shadow p-4 mb-4 bg-white">
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
                    <center>
                      <img src="../<?php echo $profile ?>" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">                     
                      
                     <button class="btn btn-warning rounded-circle" style=" font-size: 20px;" data-bs-toggle="modal" data-bs-target="#myProfile">
                     <i class="fas fa-camera-retro"></i>
                     </button>
                         <!-- The Modal -->
                        <div class="modal" id="myProfile">
                        <div class="modal-dialog">
                            <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">แก้ไขรูปภาพประจำตัว</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                            <img src="../assets/images/2.png" class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">                     
                            <form  method="post" enctype="multipart/form-data">
                              <input type="file" class="form-control" accept="image/*" name="profile">
                            </form>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>

                            </div>
                        </div>
                        </div>
                    </center>
                      <form action="../edit_profile.php" method="post" enctype="multipart/form-data" style="padding-top:15px;">
                            <center>
                            <div class="col-md-6 mt-3">
                                <input type="file" class="form-control" accept="image/*" name="profile">
                            </div>  
                           </center> <br>

                            <div class="form-group  row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control rounded-0" name="firstname" value="<?php echo $name; ?>" required>
                                    <p>First name</p>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control rounded-0" name="lastname" value="<?php echo $Sname; ?>"required>
                                    <p>Last name</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <span>Gender:</span>
                                    <div class="form-check-inline">
                                        <input class="form-check-input " value="ชาย" type="radio" name="gender" id="radio1" >
                                        <label class="form-check-label" for="radio1" >Male</label>
                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input" value="หญิง" name="gender" id="radio2">
                                            <lable class="form-check-lable" for="radio2" >Female</lable>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input" value="อื่นๆ" name="gender" id="radio3" checked>
                                            <lable class="form-check-lable" for="radio3" >Other</lable>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <input class="form-control rounded-0" type="Email" name="Email" value="<?php echo $Email; ?>" required>
                                    <p>Email</p>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <input class="form-control rounded-0" type="password" name="Password" value="<?php echo $pass; ?>" required>
                                    <p>Password</p>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" name="address" class="form-control rounded-0" value="<?php echo $address; ?>">
                                    <p>Address</p>
                                </div>
                                <div class="col-md-12">
                                    <input type="text" name="tell" class="form-control rounded-0" value="<?php echo $tell; ?>">
                                    <p>Telephone</p>
                                </div>
                              
                            </div>
                            <div class="button-group m-5 d-flex justify-content-center">

                                <button class="btn btn-warning btn-block ms-1" type="submit" name="edit_profile">
                                    แก้ไขข้อมูล
                                </button>

                            </div>
                        </form>
                        <?php //require "../edit_profile.php";?>          
                 </div>
            </div>
        </div>
    </div>
  </body>
  </html>