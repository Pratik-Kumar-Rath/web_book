<?php
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]== "POST")
{
  include '_dbconnect.php'; 
  $username = $_POST["username"];
  $email =$_POST["email"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $exists=false;
  if(($password == $cpassword) && $exists==false)
  {
   $sql= "INSERT INTO `users` ( `username`, `email`, `password`, `date`) VALUES ( '$username', '$email', '$password', current_timestamp())";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
      $showAlert= true;
    }

  }else
  {
    $showError= true;
  }
}

?>


<!DOCTYPE html>
<html>
<head>

<title>SIGN UP</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<style>
body {font-family: Arial, Helvetica, sans-serif;
background-color: white;
 }


.tt{
  background-color: rgba(206, 232, 0, 0.8);
  top: 0;
  left: 0;
  width: 100%;
  position: fixed;
  overflow: hidden;
  padding: 20px;
  z-index: 9;


}

.nav1 {
  float: right;
  color: #CEE800;
  
  overflow: hidden;

}
.nav1 a{
  float: right;
  margin-right: 30px;

  padding: 20px 15px;
  color: white;
  text-decoration: none;
  font-size: 20px;
}
 .nav1 a:hover {
  border-radius: 25px;
  background-color: white;
  color: black;
  overflow: hidden;
}

.all{
margin-top: 50px;
  
}





</style>
</head>
<body>

   <body>
 
</nav>

<?php
if($showAlert){
echo '
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> your account is created.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
<?php
if($showError){
echo '
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Password error </strong> your password is not matching!.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>



<div class="all">
   <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            
            <h4 class="wv-heading--subtitle">
               CREATE AN ACCOUNT
            </h4>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form action="signup.php" method="post" name="login">
                  <div class="form-group">
                     <input type="text" name="username"  class="form-control my-input" id="username" placeholder="Name">
                  </div>
                  <div class="form-group">
                     <input type="text" name="email"  class="form-control my-input" id="email" placeholder="Email">
                  </div>
                  <div class="form-group">
                     <input type="password" name="password" id="password"  class="form-control my-input" placeholder="Create Password">
                  </div>
                  <div class="form-group">
                     <input type="password" name="cpassword" id="cpassword"  class="form-control my-input" placeholder="Confirm Password">
                  </div>
                  <div class="text-center ">
                     <button type="submit" class=" btn btn-block send-button tx-tfm">Create Your  Account</button>
                  </div>
                  <div class="col-md-12 ">
                     <div class="login-or">
                        <hr class="hr-or">
                        <span class="span-or">or</span>
                     </div>
                  </div>
                  <div class="form-group">
                     <a class="btn btn-block g-button" href="#">
                     <i class="fa fa-google"></i> Sign up with Google
                     </a>
                  </div>
                  <p class="small mt-3">By signing up, you are indicating that you have read and agree to the <a href="#" class="ps-hero__content__link" >Terms of Use</a> and <a href="#">Privacy Policy</a>.
                  </p>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
</body>