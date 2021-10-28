<?php include "control/validation.php"; ?>
<!DOCTYPE html>
<html>
<body>
<h1>Registration Form </h1>
<hr>
<form action="" method="post" >
    <table>
        <tr>
            <td>First Name:</td>
            <td><input type="text" name="fname"><?php echo $valFname; ?></td>
</tr>
<tr>
            <td>Last Name:</td>
            <td><input type="text" name="lname"><?php echo $valLname; ?></td>
</tr>

<tr>
            <td>Age:</td>
            <td><input type="text" name="name"></td>
</tr>
<tr>
    <td> Designation:</td>
    <td>
    <input type="radio" id="Junior Programmer" name="designation" value="Junior Programmer">
    <label for="Junior Programmer">Junior Programmer</label>

    <input type="radio" id="Senior Programmer" name="designation" value="Senior Programmer">
    <label for="Senior Programmer">Senior Programmer</label>
                         
     <input type="radio" id="Project Lead" name="designation" value="Project Lead">
     <label for="Project Lead">Project Lead</label>
     <?php echo  $valRadioDesignation; ?>
</td>
</tr>
<tr>
 <td>Preffered language</td>
 <td>
 <input type="checkbox" id="JAVA" name="JAVA" value="JAVA">
 <label for="JAVA">JAVA</label>
 <input type="checkbox" id="PHP" name="PHP" value="PHP">
 <label for="PHP">PHP</label>
 <input type="checkbox" id="C++" name="C++" value="C++">
 <label for="C++">C++</label>
 <?php echo $valcheckboxPL; ?>

<?php echo $PL1;?>

<?php echo $PL2;?>

<?php echo $PL3;?>

 </td>
 </tr>

 <tr>
 <td><label for="email">E-mail:</label></td>
 <td><input type="email" name="email"><?php echo $valemail; ?></td>
 </tr>

 <tr>
 <td><label for="pwd">Password:</label></td>
 <td><input type="password" name="pwd"><?php echo $valpassword; ?></td>
                
 </tr>

<tr>
<td><label for="file"> Please choose a file</label></td>
 <td><input type="file" name="file"></td>
 </tr>
 <tr>
    
 <td><input type="submit" >
 <input type="reset" ></td>
 </tr>

 </table>
</form>
</body>
</html>










