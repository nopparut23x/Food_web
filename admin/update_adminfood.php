<?php
include '../connection/connect.php';
    if(isset($_POST['btn_edit'])){
      $id = $_GET['id'];
      $sql = "UPDATE ctc_adminfood SET lastname='Doe' WHERE id=2";

      if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . $conn->error;
      }
      
      $conn->close();
      ?>

    }
  
?>