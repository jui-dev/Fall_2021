<?php
include("../model/mydb.php");

$ename=$dpt=$jdate=$slr="";
if (isset($_POST['search']))
 {

$empid=$_POST['empid'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->SearchEmp($conobj,"employee",$empid);

if ($userQuery->num_rows > 0)
 {
    
    while($row = $userQuery->fetch_assoc())
     {

    $ename=$row["Name"];
    $dpt=$row["Department"];
    $jdate=$row["JoiningDate"];
    $slr=$row["Salary"];

    }
  } 
  else {
    echo "0 results";
  }

  if (isset($_POST['update']))
  {
    $connection = new db();
    $conobj=$connection->OpenCon();
    
    $userQuery=$connection->UpdateEmp($conn,"employee",$_POST['ename'],$_POST['dpt'],$_POST['jdate'],$_POST['slr'],$_SESSION['empid']);
    
    if ($userQuery==TRUE)
     {
         echo "update complete";
        

    
        }
      } 
      else {
        echo "update is not completed";
      }


  
  $connection->CloseCon($conobj);
    }





?>
