
<?php
session_start();

$server='localhost';
$dbuser='root';
$dbpass='';
$db='examseat';
$conn=mysqli_connect($server,$dbuser,$dbpass,$db);//database connection


if (isset($_POST['submit'])) {
  # code...
  $room = $_POST['room'];
  $_SESSION['room'] = $room;
  header('location:Rooms/midexample2.php');
}

if (isset($_POST['delete'])) {
  # code...
mysqli_query($conn, "DELETE FROM trisub2");
echo "<script>alert('Data deleted');</script>";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>examseating-arrangement - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="https://upload.wikimedia.org/wikipedia/en/4/49/Srinivasa_Ramanujan_Institute_of_Technology_logo.png" rel="icon">
  <link href="../Model/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="mainblock.php" rel="stylesheet">
  <link href="Ablock.php" rel="stylesheet">
  <link href="B-Block.php" rel="stylesheet">
  <style>
    .Block{
       border: 3px solid skyblue;
       border-collapse: collapse;
       font-size: 25px;
       text-align: center;
       height: 150px;
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
  <!-- =======================================================
  * Template Name: iPortfolio - v3.1.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/Srinivasa_Ramanujan_Institute_of_Technology_logo.png" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">SRIT</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://twitter.com/sritatp" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.facebook.com/sritatp" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="https://www.instagram.com/sritatp/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <!--a href="#" class="google-plus"><i class="bx bxl-skype"--></i></a>
          <a href="https://www.linkedin.com/school/sritatp/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="index.html" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="index.html" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="index.html" class="nav-link scrollto "><i class="bx bx-building"></i> <span>Building</span></a></li>
          <li><a href="Ablock.php" class="nav-link scrollto "><i class="bx bx-building"></i><span>A Block</span></a></li>
          <li><a href="B-Block.php" class="nav-link scrollto"><i class="bx bx-building"></i><span>B Block</span></a></li>
          <li><a href="mainblock.php" class="nav-link scrollto active"><i class="bx bx-building"></i><span>Main Block</span></a></li>
          <li><a href="index.html" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Admin</span></a></li>
          <li><a href="index.html" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>   
  </header><!-- End Header -->
  <main id="main">
    <!--a href="index.html" class="btn  btn-sm"><span class="glyphicon glyphicon-chevron-left"></span>back</a>-->
    <div class="container">
    <!-- Previous link sticks to the left -->
    <a  href="index.html">back</a>

    <!-- Next link sticks to the right -->
    <a href="../RoomNo-301.php">next</a>
</div>
    <div>
      <img src="assets/img/srithead.png" alt="SRINIVASA RAMANUJAN INSTITUTE OF TECHNOLOGY">
      </div>
      <div class="topnav">
  <a class="active" href="mainblock.php">Home</a>
  <a href="Rooms/automaticallyUpdated2.php">Automatic allotement</a>
  <a href="Rooms/extallotment2.php">External Allotment</a>
  <a href="Rooms/asignfaculty2.php">Allot Invigilators</a>
  <a  href="Rooms/RoomNo-301.php">individual Room </a>
</div>
<br/>
      <div>

          <form action="" method="post">
            <input type="submit" name="delete" value="Delete old record" class="btn btn-lg btn-primary">
          </form>
        </div>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
            <table class="Block" style="width: 100%">
                <tr>
                    <td class="Block"><a href="Rooms/RoomNo-301.php?room=301">Room No:301</a></td>
                    <td class="Block"><a href="Rooms/RoomNo-301.php?room=302">Room No:302</></td>
                    <td class="Block"><a href="Rooms/RoomNo-301.php?room=303">Room No:303</></td>
                    <td class="Block"><a href="Rooms/RoomNo-301.php?room=304">Room No:304</></td>
                    <td class="Block" rowspan="4"> MAIN BLOCK</td>
                    <td class="Block" colspan="2"><a href="Rooms/RoomNo-301.php?room=computer lab">computer lab</a></td>
                    <td class="Block" colspan="2"><a href="Rooms/RoomNo-301.php?room=English lab">English lab</a></td>
                </tr>
                <tr>
                    <td class="Block"><a href="Rooms/RoomNo-301.php?room=201">Room No:201</a></td>
                    <td class="Block"><a href="Rooms/RoomNo-301.php?room=202">Room No:202</a></td>
                    <td class="Block"><a href="Rooms/RoomNo-301.php?room=203">Room No:203</a></td>
                    <td class="Block"><a href="Rooms/RoomNo-301.php?room=204">Room No:204</a></td>
                    <td class="Block"><a href="Rooms/RoomNo-301.php?room=205">Room No:205</a></td>
                    <td class="Block"><a href="Rooms/RoomNo-301.php?room=206">Room No:206</a></td>
                    <td class="Block"><a href="Rooms/RoomNo-301.php?room=207">Room No:207</a></td>
                    <td class="Block"><a href="Rooms/RoomNo-301.php?room=208">Room No:208</a></td>
                </tr>
                <tr>
                    <td class="Block" colspan="4"><a href="Rooms/RoomNo-301.php?room=library">Library</a></td>
                    <td class="Block" colspan="4"><a href="Rooms/RoomNo-301.php?room=computerLab">Computer Lab</a></td>
                </tr>
                <tr>
                    <td class="Block" colspan="4"><a href="Rooms/RoomNo-301.php?room=Adminstration office">Adminstration office</a></td>
                    <td class="Block" colspan="2"><a href="Rooms/RoomNo-301.php?room=seminar hall-1">seminar hall-1</a></td>
                    <td class="Block"><a href="Rooms/RoomNo-301.php?room=007">Room No:007</a></td>
                    <td class="Block"><a href="Rooms/RoomNo-301.php?room=008">Room No:007</a></td>

                </tr>
            </table>

        
        </div>
        </div>
        </section>
           <div align="center">
          <p>Mid Exam Allotment</p>
      <form action="" method="post">
          <select name="room">
            
              <?php
                   

                $branchq=mysqli_query($conn, "SELECT distinct classroom from trisub2");
                while($row =mysqli_fetch_assoc($branchq)) {
                  # code...
                  $classroom = $row['classroom'];
                   ?> 
                   <option value="<?php echo($classroom);?>"><?php echo($classroom);?></option>

            <?php
                }?>
          </select>
          <input type="submit" name="submit" value="view room" class="btn btn-lg btn-primary">
        </form>
              </div>
        <br>

        </main>

        
    
</body>
</html>