<!doctype html>
<html>
<head>
<title>admin login</title>
	<link href="https://upload.wikimedia.org/wikipedia/en/4/49/Srinivasa_Ramanujan_Institute_of_Technology_logo.png" rel="icon">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<!--BootStrapValidator css-->
<link href="assets/css/style.css" rel="stylesheet" />
<link href="index.html" rel="stylesheet"/>
<!-- jQuery and BOOTstrap JS>
<script src="assets/js/bootstrap.js" type="text/javascript" ></script-->
<script src="assets/js/jquery-3.1.1.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<!--BootstrapValidator-->
<script src="assets/js/bootstrapValidator.min.js" type="text/javascript"></script>
</head>
<body>
<?php
  session_start();
   $server='localhost';
   $dbuser='root';
   $dbpass='';
   $db='examseat';
  $conn=mysqli_connect($server,$dbuser,$dbpass,$db);
if(isset($_POST['submit'])){
  $adminname=$_POST['adminname'];
  $password=$_POST['password'];
  $query ="SELECT * FROM admintable WHERE username='$adminname' AND password='$password'";
  $q=mysqli_query($conn,$query);

  if (mysqli_num_rows($q)==1) {
  //  echo "correct";
$_SESSION['adminname'] = $adminname;
$_SESSION['password'] = $password;
header('location:index.html');
  }
  else {
    $msg="adminname and/or password incorrect";
echo "<script type='text/javascript'>alert('$msg');</script> ";
  }
}  ?>
<div class="wrapper">
  <center><img src="assets/img/Admin.png" hspace="20" height="120" width="120"/></center>
    <form class="admin-signin" method="post" action="<?php $_PHP_SELF?>">
      <h5 class="admin-signin-heading"><b>Admin</b></h5>
      <input type="text" class="form-control" name="adminname" placeholder="admin" required="" autofocus="" />
      <br>
      <div >
       <span>
         <h6 class="admin-sign-heading"><b>Password</b>
       </span>
       <span class="forgot-pass">
        <a  href="forgotpassowrd.php" ><b>forgot password ?</b></a></h6>
      </span>
      <input type="password" class="form-control" name="password" placeholder="Password" required="" autofocus=""/>
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberme" name="rememberme"> Remember me
      </input>
        </label>
        <input type="submit" id="btn" name="submit" class="btn btn-lg btn-primary btn-block" value="Login"/>
    </form>
  </div>
  <!--validation of admin-->
  
</body>
</html>-->