<?php
    $connect=mysqli_connect("sql304.epizy.com","epiz_23196514","appece456","epiz_23196514_mpes");
    if ($connect->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        echo "Fail To Connect Database..!";    
    }
?>