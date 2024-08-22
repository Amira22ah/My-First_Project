<?php 

if(isset($_POST['submit-btn'] )){
   
    $username=filter_var($_POST['username'],FILTER_SANITIZE_SPECIAL_CHARS);
    $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $password=$_POST['password'];

  $newuser=[
    "username"=>$username,
    "email"=>$email,
    "password"=>$password
        ];

$errors=[];
if(!isset($_POST['username'])||empty($_POST['username'])){
$errors['username']="Username is required";
}

if(!isset($_POST['email'])||empty($_POST['email']))
{
$errors['email']="Email is required";
}
elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    $errors['email']="Email isn't valid"; 
   
}


if (empty($password)) {
    $errors['password'] = "Password is required";
}

// if(!isset($_POST['password'])||empty($_post['password'])){
//     $errors['password']="Password is required";
//     }

#gett old users
$oldUsers=file_get_contents("users.json");
#convert json old users to array
$oldUsersArray=json_decode($oldUsers,true);
#append new users
array_push($oldUsersArray,$newuser);
#json encode old+new
$allUsersAsJson=json_encode($oldUsersArray);
#save in file
file_put_contents("users.json",$allUsersAsJson);
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
<body>

<?php include("nav.php");?>


        <!-- login -->
        <div class="container login">
            <div class="row">
                <div class="col-md-4" id="side1">
                    <h3>Welcome !!</h3>
                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                    <div id="btn"><a href="login.php">Login</a></div>
                </div>
                <div class="col-md-8" id="side2">
                    <h3>Create Account</h3>
                    <form action="signup.php" method="post">
                    <div class="inp">
                        <input type="text" placeholder="Name" name="username">
                        <?php if(isset($errors['username'])):?>
                            <div class="alert alert-danger">
                                <p><?=$errors['username']?></p>
                            </div>
                            <?php endif ?>

                        <input type="text" placeholder="Email" name="email">
                        <?php if(isset($errors['email'])):?>
                            <div class="alert alert-danger">
                                <p><?=$errors['email']?></p>
                            </div>
                            <?php endif ?>
                        <input type="password" placeholder="Password" name="password">
                        <?php if(isset($errors['password'])):?>
                            <div class="alert alert-danger">
                                <p><?=$errors['password']?></p>
                            </div>
                            <?php endif ?>
                    </div>
                     <div id="login"><button type="submit" name="submit-btn">SIGN UP</button></div>
                     
                  </form>
                    <div class="icons">
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-instagram"></i>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- login -->


<?php include("footer.php");?>
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