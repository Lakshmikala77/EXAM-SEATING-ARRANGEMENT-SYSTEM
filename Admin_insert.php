<!DOCTYPE html>
<html>

<head>
	<title>Admin student details insert</title>
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

        $Name = $_REQUEST['Name'];
        $Branch = $_REQUEST['Branch'];
        $Roll_Number = $_REQUEST['Roll_Number'];
        $Year = $_REQUEST['Year'];
        $Email =$_REQUEST['Email'];
        $Mobile_No =$_REQUEST['Mobile_No'];

		
		// Performing insert query execution
		// here our table name is college
        $sql = "INSERT INTO student_table VALUES 
        ('$Name', '$Branch', '$Roll_Number', '$Year', '$Email','$Mobile_No')";
		
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
