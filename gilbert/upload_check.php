<?php
include 'conn.php';

if (isset($_POST['submit'])) {
    
    $file_name = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];
    $folder = 'uploads/'.$file_name; 
    $sql = "INSERT INTO file(filename) VALUES ('$file_name')";
    $re = mysqli_query($conn,$sql);

    if (move_uploaded_file($tmpname, $folder)) {
        echo "file uploaded successfully";
    }else{
        echo"not";
    }
}

?>