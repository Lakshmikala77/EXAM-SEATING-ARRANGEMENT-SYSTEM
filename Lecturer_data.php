<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lecturer details</title>
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
  <link href="mainblock.html" rel="stylesheet">
  <link href="Ablock.html" rel="stylesheet">
  <link href="B-Block.html" rel="stylesheet">
  <style>
    .Block{
       border: 3px solid orangered;
       border-collapse: collapse;
       font-size: 25px;
       text-align: center;
       height: 150px;
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
          <li><a href="Ablock.html" class="nav-link scrollto"><i class="bx bx-building"></i><span>A Block</span></a></li>
          <li><a href="B-Block.html" class="nav-link scrollto"><i class="bx bx-building"></i><span>B Block</span></a></li>
          <li><a href="mainblock.html" class="nav-link scrollto"><i class="bx bx-building"></i><span>Main Block</span></a></li>
         <!-- <li><a href="#seminarhallmainblock" class="nav-link scrollto"><i class="bx bx-building"></i><span>Seminar Hall-1</span></a></li>
          <li><a href="#seminarhallbblock" class="nav-link scrollto"><i class="bx bx-building"></i><span>Seminar Hall-2</span></a></li>
	  <li><a href="#drawinghall" class="nav-link scrollto"><i class="bx bx-building"></i><span>Drawing Hall</span></a></li>-->
          <li><a href="index.html" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>ExamSchedule</span></a></li>
          <li><a href="index.html" class="nav-link scrollto active"><i class="bx bx-server"></i> <span>Admin</span></a></li>
          <li><a href="index.html" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header>
  <main id="main">
  <img src="assets/img/srithead.png" alt="SRINIVASA RAMANUJAN INSTITUTE OF TECHNOLOGY">
  <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h3>Insert Lecturer Data from CSV file</h3><br />
          <form method="post" enctype="multipart/form-data">
          <div>  
            <label>Select CSV File:</label>
            <input type="file" name="file" />
            <br />
            <br/>
            <input type="reset" class ="btn btn-info"/>
          <input type="submit" name="submit" value="Upload" class="btn btn-info" />
          </div>
          </form>
      </div>
  </div>
  </section>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
        
    <h3>INDIVIDUAL Lecturer DETAILS</h3>
    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="Lecturer.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group col-md-6">
                <label for="id">Id Number</label>
                <input type="text" name="id" class="form-control" id="id" placeholder="Enter rollno" required>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Lecturer Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="eg:S Johnson" required>
            </div>
            <br>
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="ex:174g1a0500@srit.ac.in" required>
            </div>
            <div class="form-group col-md-6">
                <label for="Mobile_No">Mobile No</label>
                <input type="tel" id="mobile" name="mobile" class="form-control" placeholder="eg:0000000000" pattern="[7-9]{1}[0-9]{9}">
            </div>
          </div>
          <br>
          <div class="text-center"><button type="submit" class="btn btn-info">submit</button></div>
        </form>
      </div>

    </div>

  </div>
  </section>
  </main>
</body>
</html>
<?php  
$connect = mysqli_connect("localhost", "root", "", "examseat");
if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
                $item1 = mysqli_real_escape_string($connect, $data[0]);  
                $item2 = mysqli_real_escape_string($connect, $data[1]);
                $item3 = mysqli_real_escape_string($connect, $data[2]);
                $item4 = mysqli_real_escape_string($connect, $data[3]);
                $query = "INSERT INTO `faculty`(`id`, `name`, `email`, `mobile`)
                         VALUES ('$item1','$item2','$item3','$item4')";
                mysqli_query($connect, $query);
   }
   fclose($handle);
   echo "<script>alert('Import done');</script>";
  }
 }
}
?>  