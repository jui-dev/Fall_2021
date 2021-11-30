function get(id){
    return document.getElementById(id);
  }
  
  function Formvalidation() {
    var firstName = document.getElementById("fname").value;
    var LastName = document.getElementById("lname").value;
    var age = document.getElementById("name").value;

    var email = document.getElementById("email").value;
    var password = document.getElementById("pwd").value;
    var pattern = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = pattern.test(email);
    
    if (firstName.length<5) {
     document.getElementById("errorfirstname").innerHTML="first name can not be les than 5 charecters";
      
    }
    else
    {
        document.getElementById("valfirstname").innerHTML="First Name:".firstName;

    }
    if (LastName.length<5) {
        document.getElementById("errorlastname").innerHTML="last name can not be les than 5 charecters";
         
       }
    
    else
       {
           document.getElementById("vallastname").innerHTML="Last Name:".LastName;
   
       }
       
    if (age="") {
        document.getElementById("errorage").innerHTML="age can not be empty";
         
       }
    else
       {
           document.getElementById("valage").innerHTML="Age:".age;
   
       }
  
    if(!res)
    {
      document.getElementById("erroremail").innerHTML="Email format is not correct";
     
    }
    else
       {
           document.getElementById("valemail").innerHTML="Email:".email;
   
       }
   if (password.length<8) {
     document.getElementById("errorpass").innerHTML="Password must contain at least 8 charecters";
      
    }

  else
       {
           document.getElementById("valpassword").innerHTML="Password:".password;
   
       }
  
  }