<?php
    $connect=mysqli_connect("","","","");
    if ($connect->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "Fail To Connect Database..!";    
    }
?>
