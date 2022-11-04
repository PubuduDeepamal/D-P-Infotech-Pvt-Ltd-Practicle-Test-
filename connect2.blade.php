<?php
	$EmployeeCode = $_POST['EmployeeCode'];
    $EmployeenameInitials = $_POST['EmployeenameInitials'];
	$EmployeenameFirstName = $_POST['EmployeenameFirstName'];
	$EmployeenameSurname = $_POST['EmployeenameSurname'];
	$EmployeeAddress1 = $_POST['EmployeeAddress1'];
	$EmployeeAddress2 = $_POST['EmployeeAddress2'];
	$DOF = $_POST['DOF'];
	$Status = $_POST['Status'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','employee');
	if($conn->connect_error){
		
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into employee details(EmployeeCode, EmployeenameInitials, EmployeenameFirstName, EmployeenameSurname, EmployeeAddress1, EmployeeAddress2, DOF, Status) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssss", $EmployeeCode, $EmployeenameInitials, $EmployeenameFirstName, $EmployeenameSurname, $EmployeeAddress1, $EmployeeAddress2, $DOF, $Status);
		 $stmt->execute();
		
		echo '<script type="text/javascript">

		 	window.onload = function () { alert("Data Save");window.location.href = "EmployeeDetails.html";  }

	 	</script>';

		$stmt->close();
		$conn->close();
	}
?>