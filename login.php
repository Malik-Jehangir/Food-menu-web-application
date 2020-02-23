
<?php 
if(isset($_POST['submit'])){
include("connection.php");
   session_start();
   
  session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from customer_signup where CusPass='$password' AND CusUname='$username'");
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: welcome.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid, please re-enter initials again or refresh the page";
}
}
}}
?>
<html>
   
   <head>
      <title>FODP | Login</title>
      
     
      
   </head>
   
   <body style=" background: rgba(255, 255, 255, 0.5) url(/images/arrow.jpg) no-repeat 0 70%;     margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;">
	
   
<CENTER> 
<FORM NAME="marquee1"> 
<INPUT style="background:#A02424; color: white; font-size: 20px; font-family: moire;" NAME="text" SIZE=123
VALUE=" Welcome to the food online delivery platform. Here we have lots of items which you can chose from and subscribe. The webservice is safe and at the moment for the kingdom of Bahrain only         - FODP-           Welcome to the food online delivery platform. Here we have lots of items which you can chose from and subscribe. The webservice is safe and at the moment for the kingdom of Bahrain only       -FODP-     Welcome to the food online delivery platform. Here we have lots of items which you can chose from and subscribe. The webservice is safe and at the moment for the kingdom of Bahrain only."
        
> 
</FORM> 
</CENTER>
<SCRIPT> 

ScrollSpeed = 100
ScrollChars = 1
function ScrollMarquee() {
window.setTimeout('ScrollMarquee()',ScrollSpeed);

var msg = document.marquee1.text.value; 
document.marquee1.text.value =
msg.substring(ScrollChars) +
msg.substring(0,ScrollChars); 
} 
ScrollMarquee()

</SCRIPT>

               <div align="center" style="position:absolute; top:10%; bottom:30%; left:25%; right=20%">
               <form action="" method = "post">
			   <label><font face="moire" size="10px" style="width: 1000px; height: 40px; position:absolute; left:-25%; right:0%"><b>FOOD ONLINE DELIVERY PLATFORM<b></font></label><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                  <label><font face="moire" size="5px">UserName&nbsp;&nbsp;</font></label><input style="width: 500px; height: 40px; font-size: 24px; font-family: moire "  placeholder="Enter username here" type = "text" name = "username"/><br /><br />
                  
				  <label><font face="moire" size="5px">Password&nbsp;&nbsp;&nbsp;</font></label><input style="width: 500px; height: 40px; font-size: 24px; font-family: moire" type = "password" placeholder="Enter password here" name = "password"/><br /><br /><br />
                  <input type = "submit" name="submit" value = " Login "  style="width: 300px; height: 40px; position:absolute; left:30%; right=10%; font-size: 24px; font-family: moire" /><br /><br /><br />
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="signup.php">Don't have an account?</a>&nbsp;&nbsp;&nbsp;&nbsp;
             
			   </form>
               </div>
             
  <div style=" position:absolute;
   bottom:0;
   width:100%;
   height:60px;
   
   background:#A02424;"><a href="terms.php" style="position:absolute; top:10%; bottom:30%; left:45%; right=10%;  color:white">Terms and conditions</a>&nbsp;&nbsp;&nbsp;&nbsp;
 </div>
  
   </body>
</html>