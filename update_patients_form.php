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

		<h2>To edit patient information, please enter the information below:</h2>


<br>
		<h3>First Name:</h3>

		<form method="POST" action="update_patients.php">
		<input type="text" value="<?php echo $row[patient_first_name];?>"/>


<br>

		<h3>Last Name:</h3>

		<input type="text" value="<?php echo $row[patient_last_name];?>"/>


<br>

		<h3>Address:</h3>

		<input type="text" value="<?php echo $row[patient_address];?>"/>

<br>

		<h3>City:</h3>

		<input type="text" value="<?php echo $row[patient_city];?>"/>

<br>

		<h3>State:</h3>

		<input type="text" value="<?php echo $row[patient_state];?>">
<br>

		<h3>Zip:</h3>

		<input type="text" value="<?php echo $row[patient_zip];?>"/>

<br>

		<h3>Primary Phone</h3>
		<p>(XXX)-XXX-XXXX:</p>

		<input type="text" value="<?php echo $row[patient_primary_phone];?>"/>

<br>

		<h3>Physician ID:</h3>

		<input type="number" value="<?php echo $row[physician_id];?>"/>
		<input type="submit"/>
		</form>


<a href="homepage.html">Go back to the homepage</a>
	</body>

	</html>
