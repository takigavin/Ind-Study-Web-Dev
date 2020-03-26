<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: ##FF0000;}
</style>
</head>

<body>
<h1>Cybersecurity/Networking Lab</h1>
<h2>Account Request/Modification Form</h2>
<h3>Term: Fall 2019</h3>
<p><span class="error">* required field</span></p>

Please choose one:
<form action="process.php" method="post">

<input type="radio" name="option" value="create">Create a new account. *<br>
<input type="radio" name="option" value="renew">Renew my account without resetting the password.<br>
<input type="radio" name="option" value="renewpw">Renew my account, also reset the password.
<span class="error"><?php echo $optionErr;?></span>
<br>
<br>

Account is requested for:<br>
<input type="radio" name="major" value="CS">CS Major
<input type="radio" name="major" value="CSECNET">Cybersecurity/Network Technologies Major *<br>
<input type="radio" name="major" value="SP">For a specific course offered by School of Computer Sciences:<br>
<span class="error"> <?php echo $majorErr;?></span>

Course Number/Name: <input type="text" name="numname">
<span class="error"> <?php echo $numnameErr;?></span>
<br>

Instructor: <input type="text" name="instructor"><br>
<span class="error"> <?php echo $instructorErr;?></span>

<br>
<br>

<h3>Student Information:</h3>
Please fill out all information clearly or your account registration may be delayed.<br>
Full Name: <input type="text" name="fullname">
<span class="error">* <?php echo $fullnameErr;?></span>
<br>

Ecom ID: <input type="text" name="ecomID">
<span class="error">* <?php echo $ecomIDERR;?></span>
<br>

Your WIU email address for communications: <input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br>

Your cybersecurity/network lab use is subject to the lab/school of computer sciences policies,<br>
Western Illinois University regulations and all applicable local, state, and federal laws.<br>


<br>
<br>

Your signature: <input type="text" name="signature">
<span class="error">* <?php echo $signatureErr;?></span>

<br>
<br>

Date: <input type="text" name="date">
<span class="error">* <?php echo $dateErr;?></span>

<br>
<br>

If you have any questions or need more information, you may contact:<br>
Charan Reddy Dendi(cr-dendi@wiu.edu) or Binto George(B-George@wiu.edu)<br>

<input type="submit" value="Submit">
</form>

</body>
</html>
