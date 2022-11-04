<?php
	$FirstName = $_POST['FirstName'];
    $Surname = $_POST['Surname'];
	$Relationship = $_POST['Relationship'];

	// Database connection
	$conn = new mysqli('localhost:3308','root','','employee');
	
	if($conn->connect_error){
		
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into employee family details(FirstName, Surname, Relationship) values(?, ?, ?)");
		$stmt->bind_param("sss", $FirstName, $Surname, $Relationship);
		$stmt->execute();
		
		echo '<script type="text/javascript">

            window.onload = function () { alert("Data insert successfully...");window.location.href = "EmployeeFamilyDetails.html"; }

		</script>';
		$stmt->close();
		$conn->close();
	}
?>