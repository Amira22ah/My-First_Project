<?php 
   $userExist=false;
   $login=false;
if(isset($_POST['submitbtn'] )){
   
   
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    #check if user exists
    #get old users
    $oldUsers=file_get_contents("admin.json");
    $oldUsersArray=json_decode($oldUsers,true);
 
    foreach($oldUsersArray as $oldUser){
       if ($oldUser['username']==$username){
        $userExist=true;
        $userName=$oldUser['username'];
       
       if ($oldUser['password']==$password){
        $login=true;
       }
       else{
        echo"Wrong password";
       }
       
    }
}}

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
<body>

<?php include('nav.php');?>


        <!-- login -->
        <div class="container login">
            <div class="row">
                <div class="col-md-4" id="side1">
                    <h3>Hello Admin</h3>
                    
                </div>
                <div class="col-md-8" id="side2">
                    <h3>Login Account</h3>
                    <form action="login3.php" method="post">
                    <div class="inp">
                        <input type="text" placeholder="User Name" name="username">
                        <input type="password" placeholder="Password" name="password"> 
                     
                        <div id="login"><button type="submit" name="submitbtn">LOG IN </button></div>
                    </div>
                  </form>
                    <!-- <p>Forgot Your Password</p> -->
                    <div class="icons">
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                    <?php if(!$userExist and isset($_POST['submitbtn'])):?>
        <h1>User doesn't exist</h1>
    <?php endif ?>
    <?php if($userExist and $login==true and isset($_POST['submitbtn'])):?>
    
        <h1>Welcome <?=$_POST['username']?></h1>
         <button><a href="createproduct.php">Create Product</a></button>
    <?php endif ?>
                </div>
            </div>
        </div>
        <!-- login -->
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