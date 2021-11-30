<?php
	session_start();

    if(isset($_SESSION["useruid"])){

    if ($_SESSION["useraccess"] == "ADVISER"){
        
        if (isset($_GET['delservices'])) {
            $serviceId = $_GET['delservices'];
            include_once 'phpcode/dbh.php';

            $sql = "SELECT file FROM services WHERE serviceId = '$serviceId'";
            $resultd = mysqli_query($conn, $sql);
            $file = mysqli_fetch_assoc($resultd);
            $filepath = 'assets/uploads/adviser/' . $file['file'];
                
            $resultd = mysqli_query($conn, "DELETE FROM services WHERE serviceId = '$serviceId'");
            unlink($filepath);
            echo  "<script> alert('Deleted!');window.location='user.php#services'</script>";
        } 
        else if (isset($_GET['delforum'])) {
            $forumId = $_GET['delforum'];
            include_once 'phpcode/dbh.php';
            $resultd = mysqli_query($conn, "DELETE FROM forum WHERE forumId = '$forumId'");
            
            echo  "<script> alert('Deleted!');window.location='user.php#forum'</script>";
        }
        else if (isset($_GET['delevent'])) {
            $eventId = $_GET['delevent'];
            include_once 'phpcode/dbh.php';
            $resultd = mysqli_query($conn, "DELETE FROM event WHERE eventId = '$eventId'");
            
            echo  "<script> alert('Deleted!');window.location='user.php#event'</script>";
        }

       else if (isset($_GET['download'])) {
            
            $serviceId = $_GET['download'];
            include_once 'phpcode/dbh.php';
        
            // fetch file to download from database
            $sql = "SELECT * FROM services WHERE serviceId = '$serviceId' ";
            $result = mysqli_query($conn, $sql);
        
            $files = mysqli_fetch_assoc($result);
            $filepath = 'assets/uploads/adviser/' . $files['file'];
        
            if (file_exists($filepath)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename=' . basename($filepath));
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize('assets/uploads/adviser/' . $files['file']));
                readfile('assets/uploads/adviser/' . $files['file']);
                exit;
            }
        
        }
             else if (isset($_GET['downloadapp'])) {
            
            $appId = $_GET['downloadapp'];
            include_once 'phpcode/dbh.php';
        
            // fetch file to download from database
            $sql = "SELECT * FROM application WHERE appId = '$appId' ";
            $result = mysqli_query($conn, $sql);
        
            $files = mysqli_fetch_assoc($result);
            $filepath = 'assets/uploads/client/' . $files['file'];
        
            if (file_exists($filepath)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename=' . basename($filepath));
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize('assets/uploads/client/' . $files['file']));
                readfile('assets/uploads/client/' . $files['file']);
                exit;
            }
        
        }
        
       
     include 'user-adviser.php';

     

    
} 
    else if ($_SESSION["useraccess"] == "CLIENT"){
        if (isset($_GET['download'])) {
            
            $serviceId = $_GET['download'];
            include_once 'phpcode/dbh.php';
        
            // fetch file to download from database
            $sql = "SELECT * FROM services WHERE serviceId = '$serviceId' ";
            $result = mysqli_query($conn, $sql);
        
            $files = mysqli_fetch_assoc($result);
            $filepath = 'assets/uploads/adviser/' . $files['file'];
        
            if (file_exists($filepath)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename=' . basename($filepath));
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize('assets/uploads/adviser/' . $files['file']));
                readfile('assets/uploads/adviser/' . $files['file']);
                exit;
            }
        
        }
        if (isset($_GET['downloadapp'])) {
            
            $appId = $_GET['downloadapp'];
            include_once 'phpcode/dbh.php';
        
            // fetch file to download from database
            $sql = "SELECT * FROM application WHERE appId = '$appId' ";
            $result = mysqli_query($conn, $sql);
        
            $files = mysqli_fetch_assoc($result);
            $filepath = 'assets/uploads/client/' . $files['file'];
        
            if (file_exists($filepath)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename=' . basename($filepath));
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize('assets/uploads/client/' . $files['file']));
                readfile('assets/uploads/client/' . $files['file']);
                exit;
            }
        
        }
    include 'user-client.php';
}
}
