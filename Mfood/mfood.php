<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">        
        <li class="nav-item">
          <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal">เพิ่มรายการอาหาร</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-warning" type="button">ค้นหา</button>
      </form>
    </div>
  </div>
</nav>
<br>
<h3>ข้อมูลรายการอาหาร</h3>
  <div class="shadow-lg p-4 mb-4 bg-white ">
    <div class="row">
      <div class="col-md-4">
          <div class="card" style="width:300px">
          <img class="card-img-top" src="../assets/images/food_img/t1.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">เมนูเส้น</h4>
              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <a href="#" class="btn btn-warning">แก้ไข</a>
              <a href="#" class="btn btn-danger">ลบ</a>
            </div>
        </div>
      </div>

      <div class="col-md-4">
          <div class="card" style="width:300px">
          <img class="card-img-top" src="../assets/images/food_img/t1.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">เมนูเส้น</h4>
              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <a href="#" class="btn btn-warning">แก้ไข</a>
              <a href="#" class="btn btn-danger">ลบ</a>
            </div>
        </div>
      </div>

      <div class="col-md-4">
          <div class="card" style="width:300px">
          <img class="card-img-top" src="../assets/images/food_img/t2.jpg" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">เมนูเส้น</h4>
              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <a href="#" class="btn btn-warning">แก้ไข</a>
              <a href="#" class="btn btn-danger">ลบ</a>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header bg-warning p-3">
                <h4 class="modal-title">เพิ่มรายการอาหาร</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>

              <!-- Modal body -->
              <form action="cat.php" method="POST" enctype="multipart/form-data">
              <div class="modal-body">
              
                <div class="mb-3 mt-3">
                  <label for="CatName" class="form-label">ชื่ออาหาร:</label>
                  <input type="text" class="form-control" id="foodname" name="foodname" placeholder="ชื่อ" name="email">
                </div>
                <div class="mb-3 mt-3">
                  <label for="StockLimit" class="form-label">ประเภท:</label>
                  <input type="text" name="catname" class="form-control" id="catname" placeholder="ประเภท" name="pswd">
                </div>
                <div class="mb-3 mt-3">
                  <label for="CatName" class="form-label">รายละเอียดอาหาร:</label>
                  <input type="text" class="form-control" id="detailfood" name="detailfood" placeholder="ชื่อ" name="email">
                </div>
                <div class="mb-3 mt-3">
                  <label for="CatName" class="form-label">ส่วนลดราคา:</label>
                  <input type="text" class="form-control" id="detailfood" name="detailfood" placeholder="ชื่อ" name="email">
                </div>
                <div class="mb-3 mt-3">
                   <label for="Picture" class="form-label">รูปภาพประเภท:</label>
                  <input type="file" name="Picture" class="form-control" id="Picture" placeholder="รูปภาพ" >
                </div>                
              
              </div>

              <!-- Modal footer -->
              <div class="modal-footer d-grid">
                 <button type="submit" name = "submit" class="btn btn-dark btn-block">เพิ่มรายการอาหาร</button>              
              </form>
              </div>

            </div>
          </div>
        </div>
