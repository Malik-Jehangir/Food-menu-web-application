<?php 
if ( isset( $_POST['send'] ) ) 
{
echo "<script type='text/javascript'>alert('Order Place successfully!')</script>";

}

if ( isset( $_POST['logout'] ) ) //this logs the user out
{
session_start();

session_unset();

session_destroy();

header("location:login.php");

exit();

}


?>
<html>
   
   <head>
      <title>FODP | Offers</title>
	  <link rel="stylesheet" type="text/css" href="nav.css">
      <style>
	  

  
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
    border-right:1px solid #bbb;
}

li:last-child {
    border-right: none;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #DC143C;
}

.active {
    background-color: #DC143C;
}
</style>
     
      
   </head>
   
   <body style=" background: rgba(255, 255, 255, 0.5) url() no-repeat 0 70%;     margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;">
	
   
 <label><font face="moire" size="10px" style="width: 1000px; height: 40px; right: 60%"><b>FOOD ONLINE DELIVERY PLATFORM<b></font></label><form action="" method="post"><input type = "submit" name="logout" value = "Logout"  style="position:absolute; top:2%; left:90%; font-size: 24px; font-family: moire;" /></form><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
     


 <div align="center" style="position:absolute; top:10%; bottom:20%; width:100%">
             <ul>
  <li><a  href="welcome.php">Home</a></li>
  <li><a class="active" href="offers.php">Offers</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a  href="aboutus.php">About</a></li>
    
</ul>
</div> 

               <div align="center" style="position:absolute; top:25%; bottom:30%; left:3%; right=20%">
               <!-- Taking customer order confirmation-->	
	
               <form action = "" method = "post">
			 	<br /><br /><table align="center" bgcolor="#ffff99" style="position:absolute ; display: table-cell; vertical-align: top; left: -40%; top:-15%">
    
	   <tr>
   <th colspan="4"><input align="center" type = "submit" name="send" value = " Send order " style="position:absolute; left: 43%; top:1%; font-size: 24px; font-family: moire"   /><br /><br /><br />
     </th>       
   </tr>
   
	
	<tr>
   <th><img src="images/r1.jpg" style="width:250px;height:150px;"></th>   <th><img src="images/r2.jpg" style="width:250px;height:150px;"></th>    <th><img src="images/r3.jpg" style="width:250px;height:150px;"></th>    <th><img src="images/r4.jpg" style="width:250px;height:150px;"></th>    <th><img src="images/r5.jpg" style="width:250px;height:150px;"></th>
   </tr>
    
    <tr>
   <th><input type="checkbox" name="res[]" value="Bu Ali" />Bu Ali</th>   <th><input type="checkbox" name="res[]" value="Lanterns" />Lanterns</th>    <th><input type="checkbox" name="res[]" value="Healthy calorie" />Healthy calorie</th>    <th><input type="checkbox" name="res[]" value="Bu Ali" />Bu Ali</th>    <th><input type="checkbox" name="res[]" value="Al Hateem" />Al Hateem</th>
   </tr>
    <tr>
   <th><input type="checkbox" name="meal[]" value="Chicken Biryani" />Chicken Biryani</th>   <th><input type="checkbox" name="meal[]" value="Chicken Teriyaki" />Chicken Teriyaki</th>    <th><input type="checkbox" name="meal[]" value="Egg noodles" />Egg noodles</th>    <th><input type="checkbox" name="meal[]" value="Beef Teriyaki" />Beef teriyaki</th>    <th><input type="checkbox" name="meal[]" value="Chicken Mushroom soup" />Chicken Mushroom soup</th>
   </tr>
     
   
      <tr>
   <th><img src="images/r6.jpg" style="width:250px;height:150px;"></th>   <th><img src="images/r7.jpg" style="width:250px;height:150px;"></th>    <th><img src="images/r8.jpg" style="width:250px;height:150px;"></th>    <th><img src="images/r9.jpg" style="width:250px;height:150px;"></th>    <th><img src="images/r10.jpg" style="width:250px;height:150px;"></th>
   </tr>
    <tr>
   <th><input type="checkbox" name="res[]" value="Bu Ali" />Bu Ali</th>   <th><input type="checkbox" name="res[]" value="Lanterns" />Lanterns</th>    <th><input type="checkbox" name="res[]" value="Healthy calorie" />Healthy calorie</th>    <th><input type="checkbox" name="res[]" value="Bu Ali" />Bu Ali</th>    <th><input type="checkbox" name="res[]" value="Al Hateem" />Al Hateem</th>
   </tr>
   <tr>
   <th><input type="checkbox" name="meal[]" value="Chicken Pasta" />Chicken Pasta</th>   <th><input type="checkbox" name="meal[]" value="Chicken Tikka" />Chicken Tikka</th>    <th><input type="checkbox" name="meal[]" value="Daal & rice" />Daal & rice</th>    <th><input type="checkbox" name="meal[]" value="Tabouli" />Tabouli</th>    <th><input type="checkbox" name="meal[]" value="Tomato soup" />Tomato soup</th>
   </tr>
   
    <tr>
   <th><img src="images/r1.jpg" style="width:250px;height:150px;"></th>   <th><img src="images/r2.jpg" style="width:250px;height:150px;"></th>    <th><img src="images/r3.jpg" style="width:250px;height:150px;"></th>    <th><img src="images/r4.jpg" style="width:250px;height:150px;"></th>    <th><img src="images/r5.jpg" style="width:250px;height:150px;"></th>
   </tr>
    
    <tr>
   <th><input type="checkbox" name="res[]" value="Bu Ali" />Bu Ali</th>   <th><input type="checkbox" name="res[]" value="Lanterns" />Lanterns</th>    <th><input type="checkbox" name="res[]" value="Healthy calorie" />Healthy calorie</th>    <th><input type="checkbox" name="res[]" value="Bu Ali" />Bu Ali</th>    <th><input type="checkbox" name="res[]" value="Al Hateem" />Al Hateem</th>
   </tr>
    <tr>
   <th><input type="checkbox" name="meal[]" value="Chicken Biryani" />Chicken Biryani</th>   <th><input type="checkbox" name="meal[]" value="Chicken Teriyaki" />Chicken Teriyaki</th>    <th><input type="checkbox" name="meal[]" value="Egg noodles" />Egg noodles</th>    <th><input type="checkbox" name="meal[]" value="Beef Teriyaki" />Beef teriyaki</th>    <th><input type="checkbox" name="meal[]" value="Chicken Mushroom soup" />Chicken Mushroom soup</th>
   </tr>
   
   <tr>
   <th><img src="images/r6.jpg" style="width:250px;height:150px;"></th>   <th><img src="images/r7.jpg" style="width:250px;height:150px;"></th>    <th><img src="images/r8.jpg" style="width:250px;height:150px;"></th>    <th><img src="images/r9.jpg" style="width:250px;height:150px;"></th>    <th><img src="images/r10.jpg" style="width:250px;height:150px;"></th>
   </tr>
    <tr>
   <th><input type="checkbox" name="res[]" value="Bu Ali" />Bu Ali</th>   <th><input type="checkbox" name="res[]" value="Lanterns" />Lanterns</th>    <th><input type="checkbox" name="res[]" value="Healthy calorie" />Healthy calorie</th>    <th><input type="checkbox" name="res[]" value="Bu Ali" />Bu Ali</th>    <th><input type="checkbox" name="res[]" value="Al Hateem" />Al Hateem</th>
   </tr>
   <tr>
   <th><input type="checkbox" name="meal[]" value="Chicken Pasta" />Chicken Pasta</th>   <th><input type="checkbox" name="meal[]" value="Chicken Tikka" />Chicken Tikka</th>    <th><input type="checkbox" name="meal[]" value="Daal & rice" />Daal & rice</th>    <th><input type="checkbox" name="meal[]" value="Tabouli" />Tabouli</th>    <th><input type="checkbox" name="meal[]" value="Tomato soup" />Tomato soup</th>
   </tr>


   
</table>







               	<br /><br /><table style="position:absolute; top:-33%; float:right">
    <tr>
   <th><label><font face="moire" size="3px">&nbsp;&nbsp;</font></label></th><th><select style="width: 500px; height: 40px; font-size: 24px; font-family: moire; position:absolute; left: 1800%; top:8%">
  <option value="volvo">12:30pm</option>
  <option value="saab">1:00pm</option>
  <option value="opel">1:30pm</option>
  <option value="audi">2:00pm</option>
  <option value="audi">2:30pm</option>
</select></th>
  
  </tr>
</table>
                <br /><br />
                  
			   </form>
               
    <!-- Taking customer order ends --> 
               </div>
             
  <div style=" position:absolute;
   bottom:0;
   width:100%;
   height:60px;
   position:fixed;
   background:#A02424;"><a href="copyright.php" style="position:absolute; top:10%; bottom:30%; left:45%; right=20%;  color:white">Copyrights @ 2017</a>&nbsp;&nbsp;&nbsp;&nbsp;
               </div>
  
   </body>
</html>