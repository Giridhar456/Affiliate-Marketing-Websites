<?php
    require'connection.php';
                $query="SELECT * FROM productdata ORDER BY No DESC LIMIT 8";
                $result=mysqli_query($connect,$query);
                while($row=mysqli_fetch_array($result))
                { 
                    ?>
                    
            <!-- <a href="<?php echo $row['productlink'];?>" target="_blank" id="<?php echo "Sports";?>"> -->
                <div class="product-container">
                    <img src="./files/<?php echo $row['file'];?>" alt="<?php echo $row['productname'];?>" class="product-image">
                    <h2 class="product-name"><?php echo $row['productname'];?></h2>
                    <h2 class="product-price">&#8377;<?php echo $row['productprice'];?></h2>
                    <h2 class="product-brand">Brand:&nbsp;  <?php echo $row['productbrand'];?></h2>
                    <a href="<?php echo $row['productlink'];?>"  class="purchage" target="_blank"><button>Buy</button></a>
                    <h2 class="product-from">&#128722;<?php echo $row['productfrom'];?></h2>                
                    <h2 class="product-date"><span class='fas'>&#xf073;</span><?php echo $row['uploadeddate'];?></h2>
                </div>
            </a>
            <?php
                }
            ?>




<!-- <?php
    // include('./connection.php');
    // require'connection.php';
    // $query="SELECT * FROM productdata";
    // $result=mysqli_query($connect,$query);
    // $res=array();            
    // while($row = mysqli_fetch_array($result))
    //     array_push($res, array(
    //                             'No' => $row[0],
    //                             'productid' => $row[1],
    //                             'productname' => $row[2],
    //                             'productbrand' => $row[3],
    //                             'productprice' => $row[4],
    //                             'productlink' => $row[5],
    //                             'productfrom' => $row[6],
    //                             'uploadeddate' => $row[7],
    //                             'file' => $row[8],
    //                             'productcategories' => $row[9]
    //                         ));
    // echo json_encode(array('result' => $res));
?>
<div class=".product-container"></div> -->
