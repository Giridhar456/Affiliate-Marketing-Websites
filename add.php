<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add</title>
    <link href="./css/style.css" rel="stylesheet">
    <link href="./css/form.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>
    <div class="nav">
        <div class="nav-title">Couplone.in</div>
        <ul>
            <li>Home</li>
            <li><a href="delete.php">Delete Items</a></li>
        </ul>
    </div>
    <br/>
    <div class="form-controller">
    <h1>Add Items</h1>
    <form method="post" action="./action.php" enctype="multipart/form-data">
    <input type="text" placeholder="ProductId" name="productid" required><br/>
    <input type="text" placeholder="ProductName" name="productname" required><br/>
    <select name="productcategories" required>
		<option>Electronics,TVs&Mobiles</option>
		<option>Men</option>
		<option>Women</option>
		<option>Sports&Books</option>
		<option>Kids</option>
	</select><br/>
    <input type="text" placeholder="ProductBrand" name="productbrand" required><br/>
    <input type="text" placeholder="ProductPrice" name="productprice" required><br/>
    <input type="text" placeholder="ProductLink" name="productlink" required><br/>
    <select name="productfrom"><br/>
        <option>Amazon</option>
        <option>Flipkart</option>
        <option>Others</option>
    </select><br/>
    <input type="file" name="file" placeholder="Choose File To upload" class="fil" required><br/>
    <input type="submit" Value="Upload" name="upload">
    </form>
    </div>
</body>
</html>