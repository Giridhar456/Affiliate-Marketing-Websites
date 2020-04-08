<?php
    require('connection.php');
        $loadnewcount=$_POST['loadnewcount'];

        $query="SELECT * FROM productdata ORDER BY No DESC LIMIT $loadnewcount";
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
                    <a href="<?php echo $row['productlink'];?>"  class="purchage" target="_blank"><button>Buy</button></a>
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
    