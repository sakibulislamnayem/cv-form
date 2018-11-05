<?php
include('connect.php');
$employe="CREATE TABLE IF NOT EXISTS employe(employeid INT (20) NOT NULL,employename VARCHAR (20) NOT NULL,phnnumber INT(11) NOT NULL, ADDRESS VARCHAR(10),
PRIMARY KEY (employeid))";
$result=mysqli_query($myconn,$employe);
if($result===TRUE)
{
	$sql="INSERT INTO employe VALUES (1,'zahid',01956951727,'mirpur');";
	$result=mysqli_query($myconn,$sql);

}
else
{
	echo "table not created";
}
?>