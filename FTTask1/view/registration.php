<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/mycss.css">
</head>

<body>
<h1 class="box title1">ABC Management System</h1>
<h5 class="box title2">We Create Future</h5>
<h1>Registration Form</h1>

<hr>
<form action="" method="post" >
    <table>
        <tr>
            <td><label for="fname"> First Name </label></td>
            <td><input type="text" name="fname"></td>
</tr>
<tr>
            <td><label for="lname"> Last Name </label></td>
            <td><input type="text" name="lname"></td>
</tr>

<tr>
            <td><label for="name"> Age </label></td>
            <td><input type="text" name="name"></td>
</tr>
<tr>
    <td><label for="designation"> Designation </label></td>
    <td>
    <input type="radio" id="Junior Programmer" name="designation" value="Junior Programmer">
    <label for="Junior Programmer">Junior Programmer</label>

    <input type="radio" id="Senior Programmer" name="designation" value="Senior Programmer">
    <label for="Senior Programmer">Senior Programmer</label>
                         
     <input type="radio" id="Project Lead" name="designation" value="Project Lead">
     <label for="Project Lead">Project Lead</label>
     
</td>
</tr>
<tr>
 <td><label for="checkbox"> Preffered language </label></td>
 <td>
 <input type="checkbox" id="JAVA" name="JAVA" value="JAVA">
 <label for="JAVA">JAVA</label>
 <input type="checkbox" id="PHP" name="PHP" value="PHP">
 <label for="PHP">PHP</label>
 <input type="checkbox" id="C++" name="C++" value="C++">
 <label for="C++">C++</label>

</td>
 </tr>

 <tr>
 <td><label for="email">E-mail</label></td>
 <td><input type="email" name="email"></td>
 </tr>

 <tr>
 <td><label for="pwd">Password</label></td>
 <td><input type="password" name="pwd"></td>
                
 </tr>

<tr>
<td><label for="file"> Please choose a file</label></td>
 <td><input type="file" name="file"></td>
 </tr>
 <tr>
    
 <td><input type="submit" class="button submit" value="Submit">
 <input type="reset" class="button reset" value="Reset" ></td>
 </tr>

 </table>
</form>
</body>
</html>