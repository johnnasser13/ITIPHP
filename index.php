<?php
ob_start();
session_start();
if(isset($_SESSION['login'])){
    header("LOCATION:home.php");
}else{
if(isset($_POST['submit'])){
    if(empty($_POST['First']) || empty($_POST['lname']) || empty($_POST['c_email']) || empty($_POST['c_pass'])){
        $error = "يرجى ملئ جميع البيانات الفارغة";
    }else{
        include "config.php";
        $username = mysqli_real_escape_string($connect,htmlentities($_POST['First']));
        $email = mysqli_real_escape_string($connect,htmlentities($_POST['c_email']));
        $password = mysqli_real_escape_string($connect,htmlentities($_POST['c_pass']));
        $lname = mysqli_real_escape_string($connect,htmlentities($_POST['lname']));
        
        $check_email = mysqli_query($connect,"SELECT * FROM `users` WHERE `email` = '$email'");
        $num_email = mysqli_num_rows($check_email);
        if($num_email != 0){
            $error = "عفواً هذا البريد الإلكتروني مسجل لدينا بالفعل";
        }else{
            $password_length = strlen($password);
            if($password_length < 8){
                $error = "عفواً كلمة السر يجب أن تكون مكونة من 8 حروف على الأقل";
            }else{
                $register = mysqli_query($connect,"INSERT INTO `users`( `email`, `first`, `last`, `password`) VALUES ('$email','$username','$lname','$password')");
                $success = "تم التسجيل بنجاح";
                header('location:login.php');
            }

    }
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Pharma &mdash; Colorlib Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>
<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black text-center">Sign Up</h2>
          </div>
          <div class="col-md-8 mx-auto">
          <?php
                if (isset($error)) {
                ?>
                    <div class="bg-danger col-6 text-center text-white p-1 mb-2 mt-2 mx-auto rounded"><?php echo $error; ?></div>
                <?php
                } elseif (isset($success)) {
                ?>

                    <div class="bg-success col-6 text-center text-white p-1 mb-2 mt-2 mx-auto rounded"><?php echo $success; ?></div>

                <?php
                }
                ?>
            <form  method="POST">
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" name="username" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="First">
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="lname">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" name="email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="c_email" name="c_pass" placeholder="">
                  </div>
                </div>
    
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Create New Account">
                  </div>
                 
                  
                  	 
                  

                </div>
              </div>
            </form>
            <a href="login.php" >
            	Already have an account?
            </a>
          </div>
          
        </div>
      </div>
    </div>
    <?php
}
    ?>