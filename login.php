<?php
ob_start();
session_start();
include "config.php";
if(!isset($_SESSION['login'])){
    if(isset($_POST['submit'])){
    $user_name=htmlentities($_POST['c_email']);
    $password=htmlentities($_POST['c_pass']);
    if(empty($user_name)|| empty($password)){
    $error="من فضلك ادخل بياناتك";
    }
    else{
    $select_user=mysqli_query($connect,"SELECT * FROM users WHERE email = '$user_name'");
    $num_user=mysqli_num_rows($select_user);
    if($num_user="0"){
     $error="عفواً هذا الحساب غير موجود";

    }else{
    $query_user=mysqli_fetch_array($select_user);
    $real_password=$query_user['password'];
    if($real_password!=$password){
    $error="عفواً كلمة المرور غير صحيحة";
    }else{
    $_SESSION['login']=true;
    $_SESSION['id']=htmlentities($query_user['id']);
    header("LOCATION:homepage.php");
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
            <h2 class="h3 mb-5 text-black text-center">Sign In</h2>
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
                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="login">
                  </div>
                </div>
              </div>
            </form>
            <a href="index.php" >
             Sign Up Now
            </a>
          </div>
          
        </div>
      </div>
    </div>
<?php
}
else{
header("LOCATION:login.php");

}
?>