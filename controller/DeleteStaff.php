<?php
    session_start();
    require '../db/connection.php';
    require './Notification.php';


    if(isset($_POST['delete'])){



      //GETING RECORD ID
      $record_id = $_POST['id'];

      // GETING IMAGE RECORD
      $sql = "SELECT * FROM `staffs` WHERE `id`=$record_id;";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      $image_name = $row['image'];
      $file_path = "../img/team/$image_name";

      $sql = "DELETE FROM staffs WHERE id=$record_id ";
      if(file_exists($file_path)){
        if($conn->query($sql) === TRUE){
            if(unlink($file_path)){
                redirector("http://localhost/project_ftc/admin.php", "Record deleted successfully!", "success");
                $conn->close();
            }else{
                redirector("http://localhost/project_ftc/admin.php", "Image deletion failed!", "warning");
            }
        }else{
            redirector("http://localhost/project_ftc/admin.php", "Record deletion failed!", "warning");
        }
    }else{
        redirector("http://localhost/project_ftc/admin.php", "Image doesn't exist!", "warning");
    }
    
  }
?>