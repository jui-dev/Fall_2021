
<!DOCTYPE html>
<html>
    <head>
        <script src="..\js\jsvalidation.js"></script>
</head>

<body>
<h1>Registration Form </h1>
<hr>
<form action="" onsubmit="return Formvalidation()" method="post" >
    <table>
        <tr>
            <td>First Name:</td>
            <td><input type="text" id="fname" name="fname"></td>
            <td><p id="errorfirstname"></p></td>
</tr>
<tr>
            <td>Last Name:</td>
            <td><input type="text" id="lname" name="lname"></td>
            <td><p id="errorlastname"></p></td>
</tr>

<tr>
            <td>Age:</td>
            <td><input type="text" id="name" name="name"></td>
            
            <td><p id="errorage"></p></td>

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
 

 </td>
 </tr>

 <tr>
 <td><label for="email">E-mail:</label></td>
 <td><input type="email" id="email" name="email"></td>
 <td><p id="erroremail"></p></td>
 </tr>

 <tr>
 <td><label for="pwd">Password:</label></td>
 <td><input type="password" id="pwd" name="pwd"></td>
 <td><p id="errorpass"></p></td>
                
 </tr>

<tr>
<td><label for="file"> Please choose a file</label></td>
 <td><input type="file" id="file" name="file"></td>
 </tr>
 <tr>
    
 <td><input type="submit" >
 <input type="reset" ></td>
 </tr>

 </table>
 <p id="valfirstname"></p>
 <p id="vallastname"></p>
<p id="valage"></p>
<p id="valemail"></p>
<p id="valpassword"></p>
 </form>
 
</body>
</html>