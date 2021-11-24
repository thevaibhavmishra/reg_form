<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => student
		$conn = mysqli_connect("localhost", "root", "", "student");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$name = $_REQUEST['name'];
		$fname = $_REQUEST['fname'];
		$branch = $_REQUEST['branch'];
		$email = $_REQUEST['email'];
		
		$sql = "INSERT INTO info VALUES ('$name',
			'$fname','$branch','$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored Successfully</h3>";

			echo nl2br("\n$name\n $fname\n "
				. "$branch\n $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
