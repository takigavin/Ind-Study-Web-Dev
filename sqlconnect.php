<html>
<body>

<?php
$c = new mysqli("localhost", "web", "testpass", "myDB");
if($c->connect_error)
	die("Connetion Problem");
echo "everything is good";


$r = $c->query("SELECT * FROM mytable;");
while ($row = $r->fetch_array()){
		echo "<br>" . $row['no'] . " " . $row['name'] . "<br>\n";
}
	echo "Query finished.";


?>
</body>
</html>
