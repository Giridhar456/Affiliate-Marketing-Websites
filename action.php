<?php
	include('./connection.php');
	$productid=$_POST['productid'];
	$productname=$_POST['productname'];
	$productbrand=$_POST['productbrand'];
	$productprice=$_POST['productprice'];
	$productlink=$_POST['productlink'];
	$productfrom=$_POST['productfrom'];
	$productcategories=$_POST['productcategories'];
	$uploadeddate=date("d/m/Y");
		$target = "files/".basename($_FILES['file']['name']);
		$file = $_FILES['file']['name'];
		$sql = "INSERT INTO productdata (productid,productname,productbrand,productprice,productlink,productfrom,uploadeddate,file,productcategories) VALUES ('$productid','$productname','$productbrand','$productprice','$productlink','$productfrom','$uploadeddate','$file','$productcategories')";
		mysqli_query($connect, $sql);

		if (move_uploaded_file($_FILES['file']['tmp_name'], $target)) {
			$msg = "File uploade    d successfully";
	}else{
			$msg = "File to upload image";
}
	header("refresh: 0; url = ./add.php");
?>
