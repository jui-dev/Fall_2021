<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost:3307";
 $dbuser = "root";
 $dbpass = "";
 $db = "mydb1";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 

 function SearchEmp($conn,$table,$empid)
 {
$result = $conn->query("SELECT * FROM $table WHERE ID=$empid");
 return $result;
 }

function UpdateEmp($conn,$table,$ename,$dpt,$jdate,$slr,$empid)
 {
     $sql = "UPDATE $table SET Name='$ename', Department='$dpt', JoiningDate='$jdate',Salary='$slr' WHERE ID='$empid'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }


function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>