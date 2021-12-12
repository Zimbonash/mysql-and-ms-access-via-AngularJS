<?php
//control panel Admin tool
//configure  odbc
//covidbycountry is my dbname
$con = odbc_connect ("covidbycountry", "", "");
if($con){
    echo "Access DB Successful Connection";
    echo "Access DB Failed Connection";
}
$sql = "select * from info";
$result =odbc_exec($con, $sql);
while($row = odbc_fetch_array($result)){
    echo "Name: " . $row["name"];
}
?>