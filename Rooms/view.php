<?php

$server='localhost';
$dbuser='root';
$dbpass='';
$db='mail';
$conn=mysqli_connect($server,$dbuser,$dbpass,$db);//database connection


if (isset($_POST['submit'])) {

        header('location:mail.php');
      
      }
    

?>


<!DOCTYPE html>
<html>
<head>
<title>Faculty invigilation </title>

<style>
table {
border-collapse: separate;
border: 2px solid black;
width: 70%;
text-align: center;
}
th {
background-color: orangered;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<center><img src="../assets/img/srithead.png" alt="SRINIVASA RAMANUJAN INSTITUTE OF TECHNOLOGY"></center>
<br/>
   <center><table>
                <tr>
                    <th>Name</th>
                    <th>Room No</th>
                </tr>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "examseat");
                    // Check connection
                    if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT name, room FROM invigallot";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["name"]. "</td>
                    <td>" . $row["room"]. "</td></tr>";
                    }
                    echo "</table>";
                    } else { echo "0 results"; }
                    $conn->close();
                    ?>
            </table></center>
<br/>

            <center><button onclick="window.print()" class="btn btn-sm">print page</button></center>

           <br/>
           <!--center><button class="btn btn-lg btn-primary"> <a href="mailer.php">send mails</a></button></center>
           <div class="form-group ">
              <center><input type="submit" name="submit" value="send mails" class="btn btn-lg btn-primary"></center>
              </div-->
</body>
</html>

