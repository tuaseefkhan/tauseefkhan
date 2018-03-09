

<?php
if(isset($_POST["submit"]))
{
  $host_name="localhost";
  $db_username="root";
  $db_password="";
    $db_name="manform";
  
   $F_name=$_POST["Name"];
   $L_name=$_POST["LastName"];
   $Email=$_POST["Email"];
   $password=$_POST["enterpassword"];
   $c_password=$_POST["Confirm-password"];
    $date_of_birth=$_POST["dateofbirth"];
    $Gender=$_POST["gender"];
    
    if($password!=$c_password){
      echo "Password is not match ";
    }
   else{
  
  
  $conn =mysqli_connect( $host_name,$db_username,$db_password,$db_name);
  
  if(mysqli_connect_error()){
    
    die("Database connection failed.");
    
  }
  
  
  $query=  "INSERT INTO signuptable2(First_Name, Last_Name, Email, New_password, DOB, gender)
  VALUES('$F_name','$L_name','$Email','$password',
        '$date_of_birth','$Gender')";
        
        
        $result = mysqli_query($conn,$query);
    if(!$result)
    {
      die( "<br>Query execution failed: " 
            . mysqli_error($conn));
    }
    else {
      echo "Data successfuly saved";
      
    }
    
      mysqli_close($conn);
   }//end of else 
}


?>



?>






<!DOCTYPE html>
<html><head><title></title>
<link href="asd.css" rel="stylesheet" type="text/css">
<link href="index.css"  rel="stylesheet" type="text/css">

<script>
	function Validate(form)
	{
		
		if(form.F&Lname.value=="")
		{
			document.getElementById("F&Lname_error").innerHTML="Please Enter your Product ID";
			return false;
		}
		if(form.login_password.value=="")
		{
			document.getElementById("password_error").innerHTML="Please Enter Product Name";
			return false;
		}
return true;
		}
	</script>

</head>






<body>


<!--container start-->
<div id="container">
  <div id="container_body">
    <div>
      <h2 class="form_title"> Please  Signup </h2>
      <p class="head_para">gmail account</p>
    </div>
    <!--Form  start-->
    <div id="form_name">
      <div class="firstnameorlastname">
       <form name="form" method="POST" onsubmit="return Validate(this)">
       <div id="errorBox"></div>
        <input type="text" name="Name"  placeholder="First Name"  class="input_name" id="F&Lname" required >
        <input type="text" name="LastName"  placeholder="Last Name" class="input_name" required >
		<span class="text-danger" id="F&Lname_error"></span>
         
      </div>
      <div id="email_form">
        <input type="text" name="Email"   placeholder="Your Email" class="input_email" id="Email" required >
		<span class="text-danger" id="Email_error"></span>
		
      </div>
      <div id="Re_email_form">
        <input type="password" name="enterpassword"   placeholder="New password" class="input_Re_email" id="Newpassword" required >
		<span class="text-danger" id="New_password`_error"></span>
      </div>
      <div id="password_form">
        <input type="password" name="Confirm-password"   placeholder=" Confirm-password" class="input_Re_email" id="Cpassword" required >
		<span class="text-danger" id="Confirm-password_error"></span>
      </div>
   <br>
      <label>DoB</label>
      <div id="password_form">
	  <input type="date" name="dateofbirth" placeholder="Date of Birth" class="input_Re_email" id="DateOfBirth">
	  <span class="text-danger" id="DOB_error"></span>
	  </div>
      <!--birthday details ends-->
	  <br>
	  <label>Gender</label>
      <div id="radio_button">
        <input type="radio" name="gender" value="Female"  id="birthday"/ >
        <label >Female</label>
       
        <input type="radio" name="gender" value="Male" id="birthday"/>
        <label >Male</label>
		 <span class="text-danger" id="gender_error"></span>
      </div>
       <div>
	    <input  type="submit" name="submit" value="Sign up" id="sign_user"> 
      </div>
     </form>
    </div>
    
  </div>
</div>

</body>
-</html>