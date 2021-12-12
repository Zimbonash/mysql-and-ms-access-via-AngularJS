<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//db access credentials 
// my DB is covidbycountry

$host="localhost";
$port=;
$socket="";
$user="";
$password="";
$dbname="";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

$result = $con->query("SELECT * FROM Country");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"Code":"'  . $rs["Code"] . '",';
  $outp .= '"Name":"'   . $rs["Name"]        . '",';
  $outp .= '"Continent":"'. $rs["Continent"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$con->close();

echo($outp);




?>

