<html>
<body>

<?php
$option = $major = $numname = $instructor = $fullname = $ecomID = $email = $signature = $date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(empty($_POST["option"])){
		$optionErr = "Must select an account action.";
	}
	else{
		$option = test_input($_POST["option"]);
	}

	if(empty($_POST["major"])){
		$majorErr = "Must select major or specify a specific course.";
	}
	else{
		$major = test_input($_POST["major"]);
	}

	if(strcmp($major, "SP") == 0){
		if(empty($_POST["numname"])){
			$numnameErr = "Must include Course name/number.";
		}
		else{
			$numname = test_input($_POST["numname"]);
		}
		if(empty($_POST["instructor"])){
			$instructorErr = "Must include instructor name.";
		}
		else{
			$instructor = test_input($_POST["instructor"]);
		}
	}

	if(empty($_POST["fullname"])){
		$fullnameErr = "Name is required.";
	}
	else{
		$fullname = test_input($_POST["fullname"]);
	}

	if(empty($_POST["ecomID"])){
		$ecomIDErr = "EcomID is required.";
	}
	else{
		$ecomID = test_input($_POST["ecomID"]);
	}

	if(empty($_POST["email"])){
		$emailErr = "Email is required.";
	}
	else{
		$email = test_input($_POST["email"]);
	}

	if(empty($_POST["signature"])){
		$signatureErr = "Signature is required.";
	}
	else{
		$signature = test_input($_POST["signature"]);
	}

	if(empty($_POST["date"])){
		$dateErr = "Date is required.";
	}
	else{
		$date = test_input($_POST["date"]);
	}

}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

session_start();
$_SESSION["option"] = $option;
$_SESSION["major"] = $major;
$_SESSION["numname"] = $numname;
$_SESSION["instructor"] = $instructor;
$_SESSION["fullname"] = $fullname;
$_SESSION["ecomID"] = $ecomID;
$_SESSION["email"] = $email;
$_SESSION["signature"] = $signature;
$_SESSION["date"] = $date;


if(strcmp($option, "create") == 0){
	echo "Create a new account for...";
}
else if(strcmp($option, "renew") == 0){
	echo "Renew account for...";
}
else if(strcmp($option, "renewpw") == 0){
	echo "Renew account and password for...";
}

?><br>

<?php
if (!preg_match("/^[a-zA-Z ]*$/",$fullname)){
	echo "Full name: Only letters and white space allowed.";
}
else{
echo "Full name: $fullname";
} ?><br>

<?php
if (!preg_match("/^[a-zA-Z0-9]*$/", $ecomID)){
	echo "Ecom ID: Only letters and numbers allowed.";
}
else{
	echo "Ecom ID: $ecomID"; 
} ?><br>

<?php
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo "Email: Not a valid email.";
}
else{
	echo "Email: $email"; 
} ?><br>

<?php 
	if(strcmp($major, "CS") == 0){
		echo "Major: Computer Science";
	}
	else if(strcmp($major, "CSECNET") == 0){
		echo "Major: Cybersecurity/Network Technologies";
	}
	else if(strcmp($major, "SP") == 0){
		if(!preg_match("/^[a-zA-Z0-9]*$/", $numname)){
			echo "Invalid course number/name.\n<br>";
		}
		else{
			echo "Specific Course: $numname \n<br>";
		}

		if(!preg_match("/^[a-zA-Z. ]*$/", $instructor)){
			echo "Only letters, periods, and white space are allowed.";
		}
		else{
			echo "Instructor: $instructor";
		}
	}
?><br>

Signature:
<?php
if(!preg_match("/^[a-zA-Z. ]*$/", $signature)){
	echo "Only letters, periods, and white space are allowed.";
}
else{
	echo $signature;
}
?><br>

Date:
<?php 
if(!preg_match("/^[0-9\/\-. ]*$/", $date)){
	echo "Only numbers, hyphens, periods, forward slashes, and white space are allowed.";
}
else{
	echo $date; 
}
?><br>

<form action="submission.php" method="post">
<h2> Is the information you inserted correct? </h2>
<input type="submit" value="Submit">
</form>
</body>
</html>
