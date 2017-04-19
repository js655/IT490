<?php
include("account.php");

echo "Starting DBH";

//($dbh = mysql_connect ($hostname, $username, $password))
//	        or die ("Unable to connect to MySQL database");
//($dbh->select_db($project))

echo "Connected";

//mysql_select_db($project);

	$make = $_GET["Make"];
	$model = $_GET["Model"];
	$year = $_GET["Year"];
	$trim = $_GET["Trim"];
	
	$button = $_GET["button.get"];
	
	$car = "$make $model $year $trim";
//    $dbh = mysql_connect("sql2.njit.edu", "mjs232", "ZtCtJq5D");
	
//	$customer = $mysqli->query("USE customers");
//	$update = $mysqli->query("UPDATE customers SET vehicle=$car");
//	$result = $mysqli->query("SELECT FROM vehicles WHERE user=$user");

//	echo json_encode($result);

//$ch = curl_init('192.168.20.15');
//$result = curl_exec($ch);

echo "Done";

?>
