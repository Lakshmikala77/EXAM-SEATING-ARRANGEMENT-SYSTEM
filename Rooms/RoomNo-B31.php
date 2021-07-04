<?php

$server='localhost';
$dbuser='root';
$dbpass='';
$db='examseat';
$conn=mysqli_connect($server,$dbuser,$dbpass,$db);//database connection
error_reporting(0);

$room = $_GET['room'];

$sql1 = mysqli_query($conn,"SELECT COUNT(classroom) AS classroom FROM trisub1 WHERE classroom = '$room' ");
$res = mysqli_fetch_assoc($sql1);
$count = $res['classroom'];

if ($count == 30) {
  # code...
  ?>
    <script type="text/javascript">
        alert("Room is already alloted");
        setTimeout(function(){
        window.location.href = "../B-Block.php";
        },0);
    </script>
                                                        
  <?php
}
else
{

if (isset($_POST['delete'])) {
  # code...
mysqli_query($conn, "DELETE FROM trisub1");
mysqli_query($conn, "DELETE FROM invigallot");
echo "<script>alert('Data deleted');</script>";
}

if (isset($_POST['submit'])) {
  # code...
  $year = $_POST['Year'];
  $dept = $_POST['dept'];
  $subject = $_POST['subject'];
  $enrollnumber = $_POST['enrollnumber'];
  $examdate = $_POST['examdate'];
  $starttime = $_POST['starttime'];
  $endtime = $_POST['endtime'];

  // $shortnum = $enrollnumber[-1];
  // echo "<script>alert('$shortnum');</script>";

$sql = mysqli_query($conn,"SELECT * FROM student_table WHERE Branch = '$dept' AND Year = '$year' AND RollNo >= '$enrollnumber' ");

$sql1 = mysqli_query($conn,"SELECT COUNT(classroom) AS classroom FROM trisub1 WHERE Department = '$dept'");
$res = mysqli_fetch_assoc($sql1);
$count = $res['classroom'];


$i = $count + 1;

while ($result = mysqli_fetch_assoc($sql)) {
  # code...
  $rlnum = $result['RollNo'];
  $email = $result['Email'];

  if ($i <= 30) {
    # code...
    mysqli_query($conn,"INSERT INTO trisub1 values('$year', '$dept', '$rlnum', '$room', '$subject', '$examdate', '$starttime', '$endtime','$email')");
    $i++;
  }
  
}
   

}


?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>testing</title>
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
          <li><a href="../Ablock.php" class="nav-link scrollto"><i class="bx bx-building"></i><span>A Block</span></a></li>
          <li><a href="../B-Block.php" class="nav-link scrollto active"><i class="bx bx-building"></i><span>B Block</span></a></li>
          <li><a href="../mainblock.phps" class="nav-link scrollto"><i class="bx bx-building"></i><span>Main Block</span></a></li>
          <li><a href="../index.html" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Admin</span></a></li>
          <li><a href="../index.html" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
  <main id="main">
  <div class="container">
    <!-- Previous link sticks to the left -->
    <a  href="../B-block.php">Back</a>

    <!-- Next link sticks to the right -->
    <a href="asignfaculty1.php">Next</a>
</div>
    <div>
      <img src="../assets/img/srithead.png" alt="SRINIVASA RAMANUJAN INSTITUTE OF TECHNOLOGY">
      </div>
      <div class="topnav">
  <a href="../B-Block.php">Home</a>
  <!--a href="automaticallyUpdated1.php">Automatic allotment</a>
  <a href="extallotment1.php">External Allotment</a>-->
  <a href="asignfaculty1.php">Allot Invigilators</a>
  <a class="active" href="#individual">individual Room </a>
</div>
<br>


    <div class="form_block">
            <form action="" method="post">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="Dept">Department</label>
                    <select name="dept" class="form-control" id="dept" >
                      <option>Select Dept</option>
                      <option value="CSE">CSE</option>
                      <option value="ECE">ECE</option>
                      <option value="EEE">EEE</option>
                      <option value="CIVIL">CIVIL</option>
                      <option value="MECH">MECH</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="Year">Year</label>
                  <select name="Year" class="form-control" id="Year" >
                    <option >Select Year</option>
                    <option value="I">I Year</option>
                    <option value="II">II Year</option>
                    <option value="III">III Year</option>
                    <option value="IV">IV Year</option>
                  </select>
                </div>
              <div class="form-group">
                <label for="numberstart" class="enroll-control">Start number :</label>
                <input type="text" class="form-control" name="enrollnumber" id="number" placeholder="Enter start number" >
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <select name="subject" class="form-control" id="subject" required>
                      <option>select subject</option>
                      <?php 
                        $subjectset = mysqli_query($conn, "SELECT * from subject_table order by Name asc");
                        while($row =mysqli_fetch_assoc($subjectset))
                        { $sub= $row['Name'];
                      ?> 
                      <option value="<?php echo($sub);?>"><?php echo($sub);?></option>
                    <?php } ?>
                  </select>

              </div>
              <div class="form-group">
                <label for="examdate" class="class-control">Date :</label><br />
                <input class="form-control" placeholder="DD/MM/YYYY" type="date" name="examdate" id="examdate" >
              </div>
              <div class="form-group col-md-6">
                <label for="start-time">start-time:</label>
                <br>
                <input type="time" class="form-control" id="start-time" name="starttime" >
              </div>
              <div class="form-group col-md-6">
                <label for="end-time">end-time:</label>
                <br>
                <input type="time"class="form-control" id="end-time" name="endtime" >
              </div>
              <div class="form-group ">
              <center><input type="submit" name="submit" value="Schedule" class="btn btn-lg btn-primary"></center>
              </div>
        
                
            </form>
        </div>
  </main>
  </body>
</html>
</html>
<?php
}
?>