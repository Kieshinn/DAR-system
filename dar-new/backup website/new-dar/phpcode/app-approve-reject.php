<?php
    require_once 'dbh.php';
 
    
if (isset($_POST['approve'])) {
    
    $appId = $_POST["appid"];
    $status = "APPROVE";
   
   
    

    $sql = "UPDATE application SET status = '$status' WHERE appId = '$appId';"; 
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../user.php");
        exit();
    }
    
    
    mysqli_stmt_bind_param($stmt, "s", $status);
    
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    header("location: ../user.php?application=approve");
        exit();


}
else if (isset($_POST['reject'])) {
    $appId = $_POST["appid"];
    $status = "REJECT";
    


    $sql = "UPDATE application SET status = '$status' WHERE appId = '$appId';"; 
    $stmt = mysqli_stmt_init($conn);
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../user.php");
        exit();
    }
    
    
    mysqli_stmt_bind_param($stmt, "s", $status);
    
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    header("location: ../user.php?application=reject");
        exit();

} else {
    header("location: ../user.php");
    exit();
}