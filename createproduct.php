<?php 
if(isset($_POST['submit'] )){
   
    
    $name=$_POST['name'];
    $description=$_POST['desc'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $id=$_POST['id'];
    $image=$_POST['img'];

    $newproduct=[

"name"=>$name,
"descrip"=>$description,
"price"=>$price,
"quantity"=>$quantity,
"id"=>$id,
"img"=>$image,


    ];
#gett old products
$oldProducts=file_get_contents("products.json");
#convert json old products to array
$oldProductsArray=json_decode($oldProducts,true);
#append new products
array_push($oldProductsArray,$newproduct);
#json encode old+new
$allProductsAsJson=json_encode($oldProductsArray);
#save in file
file_put_contents("products.json",$allProductsAsJson);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<title>Online Shopping</title>
<meta name="keywords" content="">
<meta name="description" content="">


<!-- Site Icons -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/style3.css">
<link rel="stylesheet" href="css/stylingg.css">
<!-- Responsive CSS -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
</head>
<body>

<?php include('nav.php');?>


        <!-- login -->
        <div class="container login">
            <div class="row">
                <div class="col-md-4" id="side1">
                    <h3>Hello Admin</h3>
                    
                   
                </div>
                <div class="col-md-8" id="side2">
                    <h3>Create New Products</h3>
                    <form action="createproduct.php" method="post">
                    <div class="inp">
                        <input type="text" placeholder="Name" name="name">
                        <input type="text" placeholder="Description" name="desc"> 
                        <input type="text" placeholder="Price" name="price"> 
                        <input type="text" placeholder="Quantity" name="quantity"> 
                        <input type="text" placeholder="ID" name="id"> 
                        
                        <input type="file" id="img" name="img" accept="image/*">
                        
                        <div id="login"><button type="submit" name="submit">Create</button></div>
        
                    </div>
                    <!-- <a href="newproducts.php">See the products created</a> -->
                  </form>
                    <!-- <p>Forgot Your Password</p> -->
                    
                   
                </div>
            </div>
        </div>

   
        <?php  include('footer.php');?>

<a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

<!-- ALL JS FILES -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="js/jquery.superslides.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/inewsticker.js"></script>
<script src="js/bootsnav.js."></script>
<script src="js/images-loded.min.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/baguetteBox.min.js"></script>
<script src="js/form-validator.min.js"></script>
<script src="js/contact-form-script.js"></script>
<script src="js/custom.js"></script>
</body>
</html>