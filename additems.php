<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./css/add.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <center>    
            <h2>Add Items</h2>    
            <div class="add">
                <button id="add">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
            <div id="form-controller">
                <form method="post" action="addaction.php" enctype="multipart/form-data"                >
                    <table>    
                     <div class="repeat">
                    
                      </div>
                      <input type="submit" name="Insert">
                    </table>
                </form>    
            </div>
        </center>        
    </div>    
</body>
<script>
  $("#add").click(function(){
    $(".repeat").append('<tr><td><input type="text" placeholder="Id" name="Id"></td><td><input type="text" placeholder="Product Name" name="productname"></td><td><input type="text" placeholder="Product Pricing" name="productpricing"></td><td><input type="text" placeholder="Product From" name="productfrom"></td><td><input type="file" placeholder="File" name="filenam"></td><!--<td><button id="remove">Remove</button></td>--></tr>');
  });
  $("#remove").click(function(){
      $(".repeat").remove();
  });
</script>
</html>