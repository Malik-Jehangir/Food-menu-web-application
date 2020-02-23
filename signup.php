
<?php 



if(isset($_POST['submit'])){
	session_start();
include('connection.php');

$uname=$_POST['uname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$telephone=$_POST['telephone'];
$password=$_POST['password'];

mysql_query("INSERT INTO customer_signup(CusUname,CusEmail,CusMob,CusTel,CusPass)VALUES('$uname', '$email', '$mobile', '$telephone', '$password')");
header("location: login.php?remarks=success");
mysql_close($con);
}

?>
<html>
   
   <head>
      <title>FODP | Sign up</title>
      
     
      
   </head>
   
   <body style=" background: rgba(255, 255, 255, 0.5) url(/images/arrow1.jpg) no-repeat 0 70%;   background-size: cover;   margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;">
	


   

               <div align="center" style="position:absolute; top:10%; bottom:30%; left:25%; right=20%">
               <form action = "" method = "post">
			   <label><font face="moire" size="10px" style="width: 1000px; height: 40px; position:absolute; left:-25%; right:0%"><b>FOOD ONLINE DELIVERY PLATFORM<b></font></label><br /><br /><br /><br />
               	<br /><br /><table align="center" style="width:100%">
  <tr >
    <th> <label><font face="moire" size="5px">First name&nbsp;&nbsp;</font></label></th><th> <input style="width: 500px; height: 40px; font-size: 24px; font-family: moire; " placeholder="Enter first name here...." type = "text" name = "fname"/></th>
  </tr>
  <tr>
   <th> <label><font face="moire" size="5px">UserName&nbsp;&nbsp;</font></label></th><th><input style="width: 500px; height: 40px; font-size: 24px; font-family: moire; " placeholder="Enter username here...." type = "text" name = "uname"/></th>
    
  </tr>
  <tr>
    <th> <label><font face="moire" size="5px">Email&nbsp;&nbsp;</font></label></th><th> <input style="width: 500px; height: 40px; font-size: 24px; font-family: moire; " placeholder="Enter email here...." type = "text" name = "email"/></th>
   
  </tr>
   <tr>
   <th> <label><font face="moire" size="5px">Mobile&nbsp;&nbsp;</font></label></th><th> <input style="width: 500px; height: 40px; font-size: 24px; font-family: moire; " placeholder="Enter mobile here...." type = "text" name = "mobile"/></th>
   
  </tr>
   <tr>
   <th><label><font face="moire" size="5px">Telephone&nbsp;&nbsp;</font></label></th><th><input style="width: 500px; height: 40px; font-size: 24px; font-family: moire; " placeholder="Enter telephone here...." type = "text" name = "telephone"/></th>
  
  </tr>
   <tr>
    <th> <label><font face="moire" size="5px">Password&nbsp;&nbsp;&nbsp;</font></label></th><th> <input style="width: 500px; height: 40px; font-size: 24px; font-family: moire; -webkit-text-security: disc; " type = "password...." placeholder="Enter password here" name = "password"/></th>
  </tr>
   <tr>
   <th> <label><font face="moire" size="5px">Retype Password&nbsp;&nbsp;&nbsp;</font></label></th><th> <input style="width: 500px; height: 40px; font-size: 24px; font-family: moire; -webkit-text-security: disc; " type = "password...." placeholder="Retype password here" name = "repassword"/></th>
    
  </tr>
</table>
                <br /><br />
                  <input type = "submit" value = " Sign up " name="submit" style="width: 300px; height: 40px; position:absolute; left:30%; right=10%; font-size: 24px; font-family: moire;" /><br /><br /><br />
              
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