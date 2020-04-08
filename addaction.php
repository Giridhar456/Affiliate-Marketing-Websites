<?php
    require('connection.php');

        $query = "INSERT INTO produc(id,productname,productpricing,productfrom,filenam)VALUES(:id,:productname,:productpricing,:productfrom,:filenam)";
        for($count = 0; $count<count($_POST['id']); $count++)
        {
            $data = array(
                ':id'	=>	$_POST['id'][$count],
                ':productname'	=>	$_POST['productname'][$count],
                ':productpricing'	=>	$_POST['productpricing'][$count],
                ':productfrom'	=>	$_POST['productfrom'][$count],
                ':filenam'	=>	$_POST['filenam'][$count]
                //':last_name'	=>	$_POST['hidden_last_name'][$count]
            );
            $statement = $connect->prepare($query);
            $statement->execute($data);
        }
   ?>
