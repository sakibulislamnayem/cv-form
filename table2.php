<?php
include('connect.php');
$doctor="CREATE TABLE IF NOT EXISTS doctor(doctorid INT (20) NOT NULL,doctorname VARCHAR (20) NOT NULL,phnnumber INT(11) NOT NULL, ADDRESS VARCHAR(10),
PRIMARY KEY (doctorid))";
$result=mysqli_query($myconn,$doctor);
if($result===TRUE)
{
	$sql="INSERT INTO doctor VALUES (1,'rokon',01956951727,'mirpur');";
	$result=mysqli_query($myconn,$sql);

}
else
{
	echo "table not created";
}
?>