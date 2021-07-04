<!DOCTYPE html>
<html>

<head>
	<title>Admin subject details insert</title>
	<link href="https://upload.wikimedia.org/wikipedia/en/4/49/Srinivasa_Ramanujan_Institute_of_Technology_logo.png" rel="icon">
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "examseat");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)

        $code = $_REQUEST['code'];
        $Name = $_REQUEST['Name'];
        $Reg = $_REQUEST['Reg'];
        $sem = $_REQUEST['sem'];

		
		// Performing insert query execution
		// here our table name is college
        $sql = "INSERT INTO `subject_table`(`code`,`Name`,`Reg`,'sem')
        VALUES ('$item1','$item2','$item3','$item4')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Records inserted</h3>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center> 
</body>

</html>
