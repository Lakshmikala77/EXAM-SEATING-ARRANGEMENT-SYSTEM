
<?php
session_start();
error_reporting(0);
$room = $_SESSION['room'];

 $server='localhost';
   $dbuser='root';
   $dbpass='';
   $db='examseat';
  $conn=mysqli_connect($server,$dbuser,$dbpass,$db);//database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Allottement</title>
	<link href="https://upload.wikimedia.org/wikipedia/en/4/49/Srinivasa_Ramanujan_Institute_of_Technology_logo.png" rel="icon">
  <link rel="stylesheet" href="bootstrap.css ">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="stylesss.css">
  
  </head>
  
  <body>
  <a href="../B-Block.php" class="btn  btn-sm"><span class="glyphicon glyphicon-chevron-left"></span>back</a>
    <center><img src="../assets/img/srithead.png" alt="SRINIVASA RAMANUJAN INSTITUTE OF TECHNOLOGY"></center>
    <?php
    
  
  $branchq="SELECT distinct department from trisub1 where classroom='$room'";//distinct department selection
  $retvalbranch=mysqli_query($conn,$branchq);
  $yearq="SELECT distinct year from trisub1 where classroom='$room'";//distinct year selection
  $retvalyear=mysqli_query($conn,$yearq);
  ?>
  <center><h2 class="table">Room_NO-<?php echo($room)?></h2></center>
    <div>
      <center><table class="main-table" >
      <tr class='main-row'>
        <td class='main-table-data'><label>BRANCH :<label></td>
        <td class="main-table-data">
        <?php 
               $rowyear=mysqli_fetch_row($retvalyear);
                      // $branch1=$rowbranch[0];
               $year1=$rowyear[0];
               while ( $rowbranch=mysqli_fetch_assoc($retvalbranch)) {
                        # code...
                      $branch1 = $rowbranch['department'];
                      echo $year1." ".$branch1."<br>";
                  }
          ?>
          </td>
          <?php
          $subq1="SELECT distinct subject,examdate,starttime,endtime from trisub1 where classroom='$room'";
          $retvalsub1=mysqli_query($conn,$subq1);
          while($rowall1=mysqli_fetch_assoc($retvalsub1)){?>
            <td class="main-table-data"><label>SUBJECT :</td>
            <td class="main-table-data">
            <?php echo $rowall1['subject'];?><!--subject--></td>
            </tr>
            <tr class="main-row">
            <td class="main-table-data">
            <label>Date :</label></td>
            <td class="main-table-data">
            <?php echo $rowall1['examdate'];?>
            <td class="main-table-data"><label>Time :</label></td>
            <td class="main-table-data">
            <?php echo $rowall1['starttime']." to ".$rowall1['endtime']." "; ?><!--date and time is display here--></td>
          </tr>
          <?php } ?>
        </table></center>
      </div>
      <br/>
      <br/>
  <div>
      <table class="Room-table">
        <!--this table is also appear from database-->
        <?php
        $numq1="SELECT  enrollnumber,department from trisub1 where classroom='$room' ";
        // $numq2="SELECT  enrollnumber,department from trisub where classroom='$room' And department != '$brnh'";
        
        // $numq2="SELECT distinct department from trisub where classroom='B23'";
        $retvalnum1=mysqli_query($conn,$numq1);
        // $retvalnum2=mysqli_query($conn,$numq2);
  
        ?>
  
        <tr class="main-row">
            <th><center>Row 1</center></th>
            <th><center>Row 2</center></th>
            <th><center>Row 3</center></th>
            <th><center>Row 4</center></th>
            <th><center>Row 5</center></th>
        </tr>
          <tr class="main-row"><?php $count=1;$count1=1; ?>
          <?php while(($count1%6)!=0) {$count=1;?>
          <td>
              <table class="Room-table">
            
                <?php
                $temp = -1;
                while(($count%7)!=0) {
                  $temp = $temp + 1;
                 ?>
                <tr class="main-row">
                  <?php $rownum1=mysqli_fetch_assoc($retvalnum1);?>
                  <td height="80" class="main-data "><center><?php $no1=$rownum1['enrollnumber']; echo $no1;  ?></center><hr>
                      <center><?php $no2=$rownum1['department']; echo $no2;  ?></center> </td>
                      <td></td><td><td><td></td><tr><td></td></tr>
                      <tr><td></td></tr>
                      <tr><td></td></tr>
                      <tr><td></td></tr>
  
                      <!--first branch student seat here-->
                <!--second branch student seat here-->
                </tr>
                
                <?php $count=$count+1;} ?>
              </table>
            </td>
            <?php $count1=$count1+1;} ?>
            </tr>
      </table>
    </div>
<center><button onclick="window.print()" class="btn btn-warning">print page</button></center>

</div>
</body>