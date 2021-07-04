<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Faculty mails</title>
	<link href="https://upload.wikimedia.org/wikipedia/en/4/49/Srinivasa_Ramanujan_Institute_of_Technology_logo.png" rel="icon">
	<link href="Ablock.php" rel="stylesheet">
</head>

<body>
	
<?php

$server='localhost';
$dbuser='root';
$dbpass='';
$db='examseat';
$conn=mysqli_connect($server,$dbuser,$dbpass,$db);//database connection

$sql = mysqli_query($conn,"SELECT * FROM invigallot");

#$res = mysqli_fetch_assoc($sql);


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
$count=0;
#if(mysqli_num_rows($res) > 0) {
while ($row = mysqli_fetch_assoc($sql)) {
    $id = $row['id'];
    $name = $row['name']; 
	$email = $row['email'];
    $room =  $row['room'];
    $examtype  = $row['examtype'];
	$examdate = $row['date'];
	$stime = $row['starttime'];
	$etime = $row['endtime'];
$mail = new PHPMailer(true);
try{
	$mail->SMTPDebug = 0;	//if kept zero it doesnt shopw the errors if we kept 2 								
	$mail->isSMTP();											
	$mail->Host	 = 'smtp.gmail.com';					
	$mail->SMTPAuth = true;							
	$mail->Username = 'examseatingsrit@gmail.com';				
	$mail->Password = 'srit@123';						
	$mail->SMTPSecure = 'tls';							
	$mail->Port	 = 587;	
	
	$mail->setFrom('examseatingsrit@gmail.com', 'Exam seating Arrangement');

    $mail->addAddress($email);
	
	//$mail->isHTML(true);								
	$mail->Subject = 'FACULTY INVIGILATION ALLOTTMENT.';

	
    $mail->Body ='<h3 style="color:red; font-size:125%;">Room allotted for invigilation</h3><br>
	<table border="1">
    <tr>
      <th style="color:red; font-size:125%;">ID NO</th>
      <th style="color:red; font-size:125%;">Name</th>
      <th style="color:red; font-size:125%;">Room NO</th>
      <th style="color:red; font-size:125%;">Exam Type</th>
      <th style="color:red; font-size:125%;">Exam Date</th>
	  <th style="color:red; font-size:125%;">strat time</th>
	  <th style="color:red; font-size:125%;">end time</th>
    </tr>
    <tr>
      <td style="color:blue; font-size:125%;">'.$id.'</td>
      <td style="color:blue; font-size:125%;">'.$name.'</td>
      <td style="color:blue; font-size:125%;">'.$room.'</td>
      <td style="color:blue; font-size:125%;">'.$examtype.'</td>
      <td style="color:blue; font-size:125%;">'.$examdate.'</td>
	  <td style="color:blue; font-size:125%;">'.$stime.'</td>
	  <td style="color:blue; font-size:125%;">'.$etime.'</td>
    </tr>
	</table>';
	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
	//$mail->addAttachment("view.php");  
	$mail->send();
	$count++;
}catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
if($count >=1){

	echo "Mail has been sent successfully!";
}
else{
	echo "faculty is not alloted";
}

#}
?>
</body>
</html>