
<?php
include '../connection/connect.php';

 if(isset($_POST['submit']) && $_POST['CatName'] <> "" ){
  
    $catname = $_POST['CatName'];
    $stocklimit = $_POST['StockLimit'];
    
// upload
$target_dir ="..\\assets\\images\\food_img\\ ";
$Picture = basename($_FILES["Picture"]["name"]);
$target_file = $target_dir . basename($_FILES["Picture"]["name"]);
 echo "targetfile".$target_file ;

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// echo "img=".$imageFileType;

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["Picture"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["Picture"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

    $sql = "INSERT INTO ctc_category VALUES('','$catname','$stocklimit','$Picture',now())";
    $result = mysqli_query($conn, $sql);
    if($result){
      echo "insert ok";
      // header("refresh: 2; url= cat.php ");
      // exit(0);
    }else{
      echo "error";
    }
 }
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
  <div class="container" style="margin-top:20px;">
      <form>
      <div class="input-group">
          <input type="text" class="form-control" placeholder="หมวดหมู่สินค้า">
          <span class="input-group-text"><i class="fas fa-search"></i></span>
        </div>
      </form> <br><br>
      <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fas fa-plus"></i> เพิ่มหมวดหมู่สินค้า</button>

      <!-- The Modal Add Category -->
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">เพิ่มหมวดหมู่สินค้า</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>

              <!-- Modal body -->
              <form action="cat.php" method="POST" enctype="multipart/form-data">
              <div class="modal-body">
              
                <div class="mb-3 mt-3">
                  <label for="CatName" class="form-label">ชื่อหมวดหมู่สินค้า:</label>
                  <input type="text" class="form-control" id="CatName" name="CatName" placeholder="ชื่อ" name="email">
                </div>
                <div class="mb-3 mt-3">
                  <label for="StockLimit" class="form-label">วัตถุดิบสินค้า:</label>
                  <input type="text" name="StockLimit" class="form-control" id="StockLimit" placeholder="วัตถุดิบ" name="pswd">
                </div>
                <div class="mb-3 mt-3">
                   <label for="Picture" class="form-label">รูปภาพหมวดหมู่สินค้า:</label>
                  <input type="file" name="Picture" class="form-control" id="Picture" placeholder="รูปภาพ" >
                </div>
                <button type="submit" name = "submit" class="btn btn-dark ">เพิ่มหมวดหมู่สินค้า</button>
              </form>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

    <!-- Card  -->      
      <div class="row">
              <?php   
              $sql= "SELECT * FROM ctc_category";
              $result = mysqli_query($conn, $sql);   
              while($row = mysqli_fetch_assoc($result)) {
            ?>
              <div class="col-md-4">
              <div class="card" style="margin-top:10px;">
                <div class="card-body">
                    <p><img src="../assets/images/food_img/<?php echo $row['Picture'] ?>"
        width="80" height="80"  ></p>
                    <p><?php echo $row['CatName'] ?></p>
                    <!-- ปุ่มแก้ไข -->
                    <a href="#" class="btn btn-warning btn-sm">
                      <i class="fas fa-edit"></i>
                    </a>
                    <!-- ปุ่มลบ -->
                    <a href="#" class="btn btn-danger btn-sm">
                      <i class="fas fa-trash-alt"></i>
                    </a>
                  </div>
              </div>
              </div>
            <?php  }  ?>
      </div>
   

    <!-- <table class="table table-hover">
    <thead>
      <tr>
        <th>หมวดหมู่สินค้า</th>
        <th>วัตถุดิบสินค้า</th>
        <th>รูปภาพ</th>
        <th>วันที่</th>
        <th>จัดการข้อมูล</th>
      </tr>
    </thead>
  <?php   
    $sql= "SELECT * FROM ctc_category";
    $result = mysqli_query($conn, $sql);   
    while($row = mysqli_fetch_assoc($result)) {
 
 ?>
     
    <tbody>
      <tr>
        <td><?php echo $row['CatName'] ?></td>
        <td><?php echo $row['StockLimit'] ?></td>
        <td><img src="../assets/images/food_img/<?php echo $row['Picture'] ?>"
        class="rounded"  width="80" height="80"  ></img></td>
        <td><?php echo $row['Date'] ?></td>
        <td>
          <button class="btn btn-warning btn-sm" ><i class="fas fa-edit"></i></button>
          <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
        </td>
      </tr> 
   <?php 
   }
   ?>     
    </tbody>
  </table> -->
  </div>
</body>

</html>