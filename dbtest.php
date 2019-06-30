<?php
$dbhost = getenv("DB_HOST");
$dbport = getenv("DB_PORT");
$dbuser = getenv("DB_USER");
$dbpwd = getenv("DB_PASSWORD");
$dbname = getenv("DB_NAME");

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
	printf("Connected to the database at ", $dbhost);
	$sql = "SELECT * FROM mytable"; 
	$res = mysqli_query($connection, $sql);
	printf ($res);
}
$connection->close();
?>
