<?php
$Fname="";
$valFname="";
$Lname="";
$valLname="";
$PL1=$PL2=$PL3="";
$valcheckboxPL="";
$Designation="";
$valRadioDesignation="";
$email="";
$valemail="";
$password="";
$valpassword="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{
$Fname=$_REQUEST["fname"];
$Lname=$_REQUEST["lname"];
$email=$_REQUEST["email"];
$password=$_REQUEST["pwd"];

if(!ctype_alpha($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<5))
{
    $valFname= "First name required";

}
else
{
    $valFname="your first name is".$Fname;
}

if(!ctype_alpha($_REQUEST["lname"]) || (strlen($_REQUEST["lname"])<5))
{
    $valLname= "Last name required";

}
else
{
    $valLname="your last name is".$Lname;
}
if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $valemail="you must enter email";
}
else{
    $valemail= "your email is ".$email;


}

if(empty($password)||strlen($password)<8)
{
    $valpassword="password is required";
}
else{

$valpassword=$password;

}

if(isset($_REQUEST["designation"]))
{
    $valRadioDesignation= $_REQUEST["designation"];
}
else{
    $valRadioDesignation= "please select a designation";
}

if(!isset($_REQUEST["JAVA"])&&!isset($_REQUEST["PHP"])&&!isset($_REQUEST["C++"]))
{
    $valcheckboxPL = "please select at least one checkbox ";
    
}
else{
   if(isset($_REQUEST["JAVA"]))
   {
    $PL1= $_REQUEST["JAVA"];
   }
   if(isset($_REQUEST["PHP"]))
   { 
    $PL2= $_REQUEST["PHP"];
   }
   if(isset($_REQUEST["C++"]))
   {
    $PL3=$_REQUEST["C++"];
   }

}






}













?>