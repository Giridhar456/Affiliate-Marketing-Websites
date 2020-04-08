<?php
    require'connection.php';
          $No = $_GET['No'];
          $file = $_GET['file'];    
          $querydelete="DELETE FROM productdata WHERE No = {$No}";
          $res=mysqli_query($connect,$querydelete);
          unlink("./files/" . $file);
          header("refresh: 0; url = ./delete.php");
?>
