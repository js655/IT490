<?php
include("account.php");
include("login.php");
include("Rform.html");

($dbh = mysql_connect ($hostname, $username, $password))
	        or die ("Unable to connect to MySQL database");
print "Connected to MySQL<br><br>";
mysql_select_db($project);

<?php
	$make = $_GET["Make"]
	$model = $_GET["Model"]
	$year = $_GET["Year"]
	$trim = $_GET["Trim"]
	
	$button = $_GET["button.get"]
	
	$car = "$make $model $year $trim";
    $mysqli = new mysqli("sql2.njit.edu", "mjs232", "ZtCtJq5D", "mjs232");
	//add vehicle
	if $button = 
	
	$customer = $mysqli->query("USE customers");
	$update = $mysqli->query("UPDATE customers SET vehicle="$car"");
	$result = $mysqli->query("SELECT FROM vehicles WHERE user="$user"");
?>

//$ch = curl_init("192.168.20.15");
//$fp = fopen("");

?>