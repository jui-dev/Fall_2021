<?php
session_start();
include("../control/updatecheck.php");
?>

<!DOCTYPE html>
<html>
<body>

<h2>Update Employee</h2>

<form action="" method="post">
  
  Search By ID:
  <br>
  <input type="text" name="empid"  >
  <br>
  <br>
  
<input type="submit" name="search"  value="Search">
<br>
<br>

</form>

<form action="" method="post">
  
  Name:
  <br>
  <input type="text" name="ename" value="<?php echo $ename;?>">
  <br>
  Department:
  <br>
  <input type="text" name="dpt"  value="<?php echo $dpt;?>">
  <br>
  Joining Date:
  <br>
  <input type="text" name="jdate" value="<?php echo $jdate;?>">
  <br>
  Salary:
  <br>
  <input type="text" name="slr" value="<?php echo $slr; ?>">

<br>


  <input type="submit" name="update"  value="Update">

</form>



</body>
</html>
