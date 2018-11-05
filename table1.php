<?php
include('connect.php');
$patient="CREATE TABLE IF NOT EXISTS PATIENT(patientid INT (20) NOT NULL,patientname VARCHAR (20) NOT NULL,phnnumber INT(11) NOT NULL, address VARCHAR(20) NOT NULL,
PRIMARY KEY (patientid))";
$result=mysqli_query($myconn,$patient);
if($result===TRUE)
{
	$sql="INSERT INTO PATIENT VALUES (1,'FAISAL',01956951727,'JATRABARI');";
	$result=mysqli_query($myconn,$sql);

}
else
{
	echo "table not created";
}
?>