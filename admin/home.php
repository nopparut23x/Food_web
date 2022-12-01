<?php 
session_start();
//$email = $_SESSION['Member_Email'];
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
                   <center>
                     <?php
                       include 'cat.php';
                     ?>
                       
                    </center>
                      
                            
                 </div>
            </div>
        </div>
    </div>
  </body>
  </html>