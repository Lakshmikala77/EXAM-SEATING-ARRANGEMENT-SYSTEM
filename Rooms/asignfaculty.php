<?php

$server='localhost';
$dbuser='root';
$dbpass='';
$db='examseat';
$conn=mysqli_connect($server,$dbuser,$dbpass,$db);//database connection
error_reporting(0);
if (isset($_POST['schedule'])) {
  # code...
  $name = $_POST['name'];
  $room = $_POST['room'];
  $type = $_POST['examtype'];

  mysqli_query($conn,"INSERT  into invigallot select * from faculty where name ='$name'");
   
   mysqli_query($conn, "UPDATE invigallot SET examtype ='$type',room = '$room'WHERE name ='$name'");

  $branch =mysqli_query($conn, "SELECT Distinct examdate , starttime, endtime FROM trisub Where classroom = '$room'");
  $res1=mysqli_fetch_assoc($branch);
  $date =$res1['examdate'];
  $stime = $res1['starttime'];
  $etime = $res1['endtime']; 
  
  mysqli_query($conn, "UPDATE invigallot SET date = '$date', starttime ='$stime' , endtime='$etime' WHERE name ='$name'");

 # mysqli_query($conn, "INSERT INTO invigilation ('id','name','room','email') VALUES('$id','$name','$room','$email')");
  echo "<script>alert('Faculty Alloted');</script>";
  
  
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Assign faculty</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="https://upload.wikimedia.org/wikipedia/en/4/49/Srinivasa_Ramanujan_Institute_of_Technology_logo.png" rel="icon">
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!--template for navigation-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../mainblock.php" rel="stylesheet">
  <link href="../Ablock.php" rel="stylesheet">
  <link href="../B-Block.php" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v3.1.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
</head>
<style>
  .form_block{
    margin: 0px 250px 100px 375px;
    max-width: 450px;
    padding: 15px 35px 45px;
    color: black;
    background-color: #fff;
    border: 2px solid skyblue;
    border-radius: 30px;
  }
  .form-group{
    padding-bottom: 10px; 
   
  }
  .container {
  align-items: center;
  display: flex;
  justify-content: space-between;
}
.topnav {
overflow: hidden;
background-color: #333;
}

.topnav a {
float: left;
color: #f2f2f2;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 17px;
}

.topnav a:hover {
background-color: #ddd;
color: black;
}

.topnav a.active {
background-color: orangered;
color: white;
}
</style>
<body>
 
  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="../assets/img/Srinivasa_Ramanujan_Institute_of_Technology_logo.png" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">SRIT</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/sritatp" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/sritatp" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/sritatp/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <!--a href="#" class="google-plus"><i class="bx bxl-skype"--></i></a>
          <a href="https://www.linkedin.com/school/sritatp/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          <link rel="stylesheet" href="/">
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="../index.html" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="../index.html" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="../index.html" class="nav-link scrollto"><i class="bx bx-building"></i> <span>Building</span></a></li>
          <li><a href="../Ablock.php" class="nav-link scrollto active"><i class="bx bx-building"></i><span>A Block</span></a></li>
          <li><a href="../B-Block.php" class="nav-link scrollto"><i class="bx bx-building"></i><span>B Block</span></a></li>
          <li><a href="../mainblock.php" class="nav-link scrollto"><i class="bx bx-building"></i><span>Main Block</span></a></li>
          <li><a href="../index.html" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Admin</span></a></li>
          <li><a href="../index.html" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
  <main id="main">
  <div class="container">
    <!-- Previous link sticks to the left -->
    <a  href="../A-block.php">Back</a>

    <!-- Next link sticks to the right -->
    <a href="../RoomNo-A31.php">Next</a>
</div>
    <div>
      <img src="../assets/img/srithead.png" alt="SRINIVASA RAMANUJAN INSTITUTE OF TECHNOLOGY">
      </div>
      <div class="topnav">
  <a href="../Ablock.php">Home</a>
  <a  href="automaticallyUpdated.php">Automatic allotement</a>
  <a href="extallotment.php">External Allotment</a>
  <a class="active" href="asignfaculty2.php">Allot Invigilators</a>
</div>
  <br>
  <div class="form_block">
            <form action="" method="post">
              <div class="row">
                <div class="form-group">
                  <label for="name">Faculty Name</label>
                    <select name="name" class="form-control" id="name" >
              <option></option>
               <?php
                $sql=mysqli_query($conn, "SELECT * from faculty WHERE email NOT IN(select email from invigallot)");
                while($row =mysqli_fetch_assoc($sql)) {
                  # code...
                  $name = $row['name'];
                  $mail = $row['email'];
                  $id = $row['id'];
                   ?> 
                   <option value="<?php echo($name);?>"><?php echo($name);?></option>
            <?php
            } 
            ?>
            </select>
            </div>
                
                <div class="form-group col-md-6">
                  <label for="room">Room No</label>
                  <select name="room" class="form-control" id="room" required>
                  <option></option>
               <?php
                $sql1=mysqli_query($conn, "SELECT distinct classroom from trisub WHERE classroom NOT IN(select room from invigallot)");
                while($row1 =mysqli_fetch_assoc($sql1)) {
                  # code...
                  $room = $row1['classroom'];
                   ?> 
                   <option value="<?php echo($room);?>">
                    <?php echo($room);?>
                  </option>

            <?php } ?>
            </select>
                </div>
                <div class="form-group ">
                  <label for="examtype">Type of Exam</label>
                  <select name="examtype" class="form-control" id="examtype" required>
                    <option ></option>
                    <option value="MID-I">MID-I</option>
                    <option value="MID-II">MID-II</option>
                    <option value="EXTERNAL">EXTERANAL</option>

                  </select>
                </div>

      <div align="center">
        <input type="submit" name="schedule" value="Schedule"class="btn btn-lg btn-primary">
      </div>
    </form>
  </div>
  </main>
  </body>
</html>
</html>
