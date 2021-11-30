

<?php


// Uploads files
if (isset($_POST['addservice'])) { // if save button on the form is clicked
    // name of the uploaded file
   
    $name = $_POST["name"];
    $subject = $_POST["subject"];
    
    
    require_once 'dbh.php';

    
    $filename = rand(1000,10000)."-".$_FILES['sfile']['name'];

    // destination of the file on the server
    $destination = '../assets/uploads/adviser/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['sfile']['tmp_name'];
    $size = $_FILES['sfile']['size'];

    if (!in_array($extension, ['zip', 'rar'])) {
        echo "<script> alert('You file extension must be .zip or .rar');window.location='../user.php#aservices'</script>";
        
    } 
    
    elseif ($_FILES['sfile']['size'] > 100000) { // file shouldn't be larger than 1Megabyte
         echo "<script> alert('Your file is too big!');window.location='../user.php#aservices'</script>";
        
        
    }
    
    else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO services (name, subject, file) VALUES ('$name', '$subject', '$filename' )";
            if (mysqli_query($conn, $sql)) {    
                    echo "<script> alert('Successfully Upload!');window.location='../user.php#aservices'</script>";
                 
            }
        } 
        
        else {
            echo "<script> alert('Failed to upload file.!');window.location='../user.php#aservices'</script>";
        }
    }
}