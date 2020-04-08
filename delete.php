<?php
    include('./connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete</title>
    <link href="./css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>
    <div class="nav">
        <div class="nav-title">Couplone.in</div>
        <ul>
            <li>Home</li>
            <li>About</li>
        </ul>
    </div>

        <div class="categories-container">
            <center>
                <h1>Categories</h1><br/>
                <h2><button id="Electronics">Electronics,TVs&Mobiles</button><h2>
                <h2><button>Men</button><h2>
                <h2><button>Women</button><h2>
                <h2><button>Sports&Books</button><h2>
                <h2><button>Kids</button><h2>

            </center>
        </div>
        <div class="container">
            <?php
                $query="SELECT * FROM productdata ORDER BY No DESC ";
                $result=mysqli_query($connect,$query);
                while($row=mysqli_fetch_array($result))
                { 
                    ?>
                    
            <!-- <a href="<?php echo $row['productlink'];?>" target="_blank" id="<?php echo "Sports";?>"> -->
                <div class="product-container">
                    <img src="./files/<?php echo $row['file'];?>" alt="<?php echo $row['productname'];?>" class="product-image">
                    <h2 class="product-name"><?php echo $row['productname'];?></h2>
                    <h2 class="product-price">Price:&nbsp;&#8377;<?php echo $row['productprice'];?></h2>
                    <h2 class="product-brand">Brand:&nbsp;  <?php echo $row['productbrand'];?></h2>
                    <a href="remove.php?No=<?php echo $row['No'];?>&file=<?php echo $row['file'];?>"  class="purchage" ><button id="delete">Delete</button></a>
                    <h2 class="product-from">From:&nbsp;  <?php echo $row['productfrom'];?></h2>                
                    <!--<h2 class="product-from"><?php echo $row['productfrom'];?></h2>-->
                </div>
            </a>
            <?php
                    //echo $row['productid'].'<br/>';
                    //echo $row['productname'].'<br/>';
                    //echo $row['productbrand'].'<br/>';
                    //echo $row['productprice'].'<br/>';
                    //echo $row['productfrom'].'<br/>';
                }
            ?>
        </center>        
        </div>
        <button class="load-more">LoadMore</button>
</body>
<script>
</script>
</html>