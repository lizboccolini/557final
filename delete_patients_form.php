<html>
	<head>
		<link rel="stylesheet" type="text/css" href="projectstyles.css">
	<title>
		Edit Patients
	</title>
	<style>
	a {
		color:lightblue;
	}
	</style>
	</head>
	<body>

		<!--<form method="POST" action=".php">
			Search my table for:
			<input type="text" name="search"/>
			<input type="submit">
		</form>-->
		<?php
		foreach($_GET as $key=>$value) ${$key}=$value;
		$sql = "SELECT * FROM Patients WHERE id=$id";
		$result=mysql_query($sql);
		$row = mysql_fetch_assoc($result);
		foreach($row as $key=>$value) ${$key}=$value;
		?>

		<h2>To remove a patient record, please verify the patient's ID number and click submit:</h2>


<br>
		<h3>Patient ID:</h3>

		<form method="POST" action="delete_patients.php">
		<input type="text" value="<?php echo patient_id;?>"/>
		<input type="submit"/>
		</form>


<a href="homepage.html">Go back to the homepage</a>
	</body>

	</html>
