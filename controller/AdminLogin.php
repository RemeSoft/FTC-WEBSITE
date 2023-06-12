<?php
require '../db/connection.php';

if(isset($_POST['submit'])) {

    $username =   mysqli_real_escape_string($conn, $_POST['username']);
    $password =   mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM auth";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if($username == $row['username'] && $password == $row['password']){
                session_start();
                $_SESSION['AdminLoginId'] = $username;
                header("Location: /project_ftc/admin.php");
                exit;
            }else{
                echo "<script>alert('Wrong credential');</script>";
                header("Location: /project_ftc/login.php");
            }
        }
    }
        

}
?>