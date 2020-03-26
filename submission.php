<!DOCTYPE HTML>
<html>
<body>
Submission completed.<br>
<?php
	session_start(); 
	$option = $_SESSION["option"];
	$major = $_SESSION["major"];
	$numname = $_SESSION["numname"];
	$instructor = $_SESSION["instructor"];
	$fullname = $_SESSION["fullname"];
	$ecomID = $_SESSION["ecomID"];
	$email = $_SESSION["email"];
	$signature = $_SESSION["signature"];
	$date = $_SESSION["date"];

	echo $email;
	echo "<br>";
	if( mail($email, "Submission Form", "Submission Accepted.")) {
		echo "Message accepted";
	}
	else
	{
		echo "Error: Message not accepted";
	}

	//Database connection
	$db = new mysqli("localhost", "web", "testpass", "myDB");
	if($db->connect_error)
		die("Connection Problem");
	//$ecomDB = $db->query("SELECT ecomID FROM app_info");
	/*while($ecomDB->fetch_array()){
	echo "<br>" . $ecomDB['ecomID'] . " " . $ecomDB['fullname'] . "<br>\n";
	}
	if(strcmp($ecomID, $ecomID) == 0){
		$db->query("UPDATE app_info
		SET option = '$option', major = '$major', numname = '$numname', instructor = '$instructor',
		    fullname = '$fullname', ecomID = '$ecomID', email = '$email', signature = '$signature',
		    date = '$date'
		WHERE ecomID = "gdh102" ");
	}
	else{ */
		$db->query("INSERT INTO app_info(option, major, numname, instructor, fullname, ecomID, email, 
		signature, date)
		VALUES ('$option', '$major', '$numname', '$instructor', '$fullname', '$ecomID', '$email', 
		'$signature', '$date')");
	//}
?>
</body>
</html>
