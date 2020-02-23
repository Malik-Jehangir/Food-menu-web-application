
<?php 
if ( isset( $_POST['logout'] ) ) 
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
	 
      <title>FODP | About Us</title>
      
     
      
   </head>
   
   <body style=" background: rgba(255, 255, 255, 0.5) url() no-repeat 0 70%;     margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;">
	
   

   <label><font face="moire" size="10px" style="width: 1000px; height: 40px; right: 60%"><b>FOOD ONLINE DELIVERY PLATFORM<b></font></label><form action="" method="post"><input type = "submit" name="logout" value = "Logout"  style="position:absolute; top:2%; left:90%; font-size: 24px; font-family: moire;" /></form><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
     <div align="center" style="position:absolute; top:10%; bottom:20%; width:100%">
             <ul>
  <li><a  href="welcome.php">Home</a></li>
  <li><a  href="offers.php">Offers</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="aboutus.php" class="active">About</a></li>
    
</ul>
</div> 


 <div align="center" style="position:absolute; top:16%; bottom:20%; width:100%">

<table style="position:absolute; top:15%">
<tr>
<th><img src="images/what.png" height="350px" width="600px"/></th><th><p><h1>Who are we?</h1><p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a purus vitae tortor porta sagittis. Mauris nec semper odio. Aliquam in mattis mi. Nullam ornare velit vel lectus sagittis ultrices. Aenean luctus tincidunt turpis, sit amet faucibus ipsum iaculis ut. Nam porta dui eget quam porta, eget ornare ligula facilisis. In posuere nunc id egestas sollicitudin. Nunc eu nunc nibh. Vivamus ut nisi felis.

Mauris ornare eros odio, fringilla vestibulum lorem vestibulum a. Fusce eu arcu lacus. Maecenas ut justo eget dui vulputate pretium in non sem. Aenean iaculis elit quis magna pellentesque, eget placerat erat venenatis. Nunc mi nisi, posuere non rutrum a, pellentesque quis risus. Pellentesque ullamcorper ipsum elit, a pharetra erat tempor et. Nam gravida, dui at hendrerit lobortis, magna diam rutrum ex, eget mattis nisl augue ac urna. Sed eget sem vestibulum libero dignissim mollis. Vivamus ac magna fermentum, pretium quam eu, aliquam tortor. Nunc lobortis ut tellus sit amet efficitur. Nulla aliquet in massa id mollis. Phasellus dui diam, pulvinar quis eleifend eget, dictum ut lorem. Etiam lacus lacus, interdum eget interdum in, commodo ut lorem. Duis et ipsum suscipit, laoreet arcu eget, consequat lectus. Donec id massa sagittis, malesuada sem vel, consectetur libero.<br /><br /><br /><br /><br /><br /></p></p></th>
</tr>
<tr>
<th><p><h1>Our Team</h1><p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a purus vitae tortor porta sagittis. Mauris nec semper odio. Aliquam in mattis mi. Nullam ornare velit vel lectus sagittis ultrices. Aenean luctus tincidunt turpis, sit amet faucibus ipsum iaculis ut. Nam porta dui eget quam porta, eget ornare ligula facilisis. In posuere nunc id egestas sollicitudin. Nunc eu nunc nibh. Vivamus ut nisi felis.

Mauris ornare eros odio, fringilla vestibulum lorem vestibulum a. Fusce eu arcu lacus. Maecenas ut justo eget dui vulputate pretium in non sem. Aenean iaculis elit quis magna pellentesque, eget placerat erat venenatis. Nunc mi nisi, posuere non rutrum a, pellentesque quis risus. Pellentesque ullamcorper ipsum elit, a pharetra erat tempor et. Nam gravida, dui at hendrerit lobortis, magna diam rutrum ex, eget mattis nisl augue ac urna. Sed eget sem vestibulum libero dignissim mollis. Vivamus ac magna fermentum, pretium quam eu, aliquam tortor. Nunc lobortis ut tellus sit amet efficitur. Nulla aliquet in massa id mollis. Phasellus dui diam, pulvinar quis eleifend eget, dictum ut lorem. Etiam lacus lacus, interdum eget interdum in, commodo ut lorem. Duis et ipsum suscipit, laoreet arcu eget, consequat lectus. Donec id massa sagittis, malesuada sem vel, consectetur libero.<br /><br /><br /><br /><br /><br /></p></p></th><th><img src="images/imp.png" height="300px" width="600px"/></th>

</tr>

<tr>
<th><img src="images/mission.png" height="350px" width="600px"/></th><th><p><h1>Our mission & aim?</h1><p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a purus vitae tortor porta sagittis. Mauris nec semper odio. Aliquam in mattis mi. Nullam ornare velit vel lectus sagittis ultrices. Aenean luctus tincidunt turpis, sit amet faucibus ipsum iaculis ut. Nam porta dui eget quam porta, eget ornare ligula facilisis. In posuere nunc id egestas sollicitudin. Nunc eu nunc nibh. Vivamus ut nisi felis.

Mauris ornare eros odio, fringilla vestibulum lorem vestibulum a. Fusce eu arcu lacus. Maecenas ut justo eget dui vulputate pretium in non sem. Aenean iaculis elit quis magna pellentesque, eget placerat erat venenatis. Nunc mi nisi, posuere non rutrum a, pellentesque quis risus. Pellentesque ullamcorper ipsum elit, a pharetra erat tempor et. Nam gravida, dui at hendrerit lobortis, magna diam rutrum ex, eget mattis nisl augue ac urna. Sed eget sem vestibulum libero dignissim mollis. Vivamus ac magna fermentum, pretium quam eu, aliquam tortor. Nunc lobortis ut tellus sit amet efficitur. Nulla aliquet in massa id mollis. Phasellus dui diam, pulvinar quis eleifend eget, dictum ut lorem. Etiam lacus lacus, interdum eget interdum in, commodo ut lorem. Duis et ipsum suscipit, laoreet arcu eget, consequat lectus. Donec id massa sagittis, malesuada sem vel, consectetur libero.<br /><br /><br /><br /><br /><br /></p></p></th>
</tr>
<tr>

<tr>
<th><p><h1>Message</h1><p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a purus vitae tortor porta sagittis. Mauris nec semper odio. Aliquam in mattis mi. Nullam ornare velit vel lectus sagittis ultrices. Aenean luctus tincidunt turpis, sit amet faucibus ipsum iaculis ut. Nam porta dui eget quam porta, eget ornare ligula facilisis. In posuere nunc id egestas sollicitudin. Nunc eu nunc nibh. Vivamus ut nisi felis.

Mauris ornare eros odio, fringilla vestibulum lorem vestibulum a. Fusce eu arcu lacus. Maecenas ut justo eget dui vulputate pretium in non sem. Aenean iaculis elit quis magna pellentesque, eget placerat erat venenatis. Nunc mi nisi, posuere non rutrum a, pellentesque quis risus. Pellentesque ullamcorper ipsum elit, a pharetra erat tempor et. Nam gravida, dui at hendrerit lobortis, magna diam rutrum ex, eget mattis nisl augue ac urna. Sed eget sem vestibulum libero dignissim mollis. Vivamus ac magna fermentum, pretium quam eu, aliquam tortor. Nunc lobortis ut tellus sit amet efficitur. Nulla aliquet in massa id mollis. Phasellus dui diam, pulvinar quis eleifend eget, dictum ut lorem. Etiam lacus lacus, interdum eget interdum in, commodo ut lorem. Duis et ipsum suscipit, laoreet arcu eget, consequat lectus. Donec id massa sagittis, malesuada sem vel, consectetur libero.<br /><br /><br /><br /><br /><br /></p></p></th><th><img src="images/msg4.jpg" height="360px" width="600px"/></th>

</tr>




<tr>
<th><img src="images/achievements.jpg" height="350px" width="600px"/></th><th><p><h1>Achievements</h1><p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a purus vitae tortor porta sagittis. Mauris nec semper odio. Aliquam in mattis mi. Nullam ornare velit vel lectus sagittis ultrices. Aenean luctus tincidunt turpis, sit amet faucibus ipsum iaculis ut. Nam porta dui eget quam porta, eget ornare ligula facilisis. In posuere nunc id egestas sollicitudin. Nunc eu nunc nibh. Vivamus ut nisi felis.

Mauris ornare eros odio, fringilla vestibulum lorem vestibulum a. Fusce eu arcu lacus. Maecenas ut justo eget dui vulputate pretium in non sem. Aenean iaculis elit quis magna pellentesque, eget placerat erat venenatis. Nunc mi nisi, posuere non rutrum a, pellentesque quis risus. Pellentesque ullamcorper ipsum elit, a pharetra erat tempor et. Nam gravida, dui at hendrerit lobortis, magna diam rutrum ex, eget mattis nisl augue ac urna. Sed eget sem vestibulum libero dignissim mollis. Vivamus ac magna fermentum, pretium quam eu, aliquam tortor. Nunc lobortis ut tellus sit amet efficitur. Nulla aliquet in massa id mollis. Phasellus dui diam, pulvinar quis eleifend eget, dictum ut lorem. Etiam lacus lacus, interdum eget interdum in, commodo ut lorem. Duis et ipsum suscipit, laoreet arcu eget, consequat lectus. Donec id massa sagittis, malesuada sem vel, consectetur libero.<br /><br /><br /><br /><br /><br /></p></p></th>
</tr>
<tr>

<tr>
<th><p><h1>Services</h1><p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a purus vitae tortor porta sagittis. Mauris nec semper odio. Aliquam in mattis mi. Nullam ornare velit vel lectus sagittis ultrices. Aenean luctus tincidunt turpis, sit amet faucibus ipsum iaculis ut. Nam porta dui eget quam porta, eget ornare ligula facilisis. In posuere nunc id egestas sollicitudin. Nunc eu nunc nibh. Vivamus ut nisi felis.

Mauris ornare eros odio, fringilla vestibulum lorem vestibulum a. Fusce eu arcu lacus. Maecenas ut justo eget dui vulputate pretium in non sem. Aenean iaculis elit quis magna pellentesque, eget placerat erat venenatis. Nunc mi nisi, posuere non rutrum a, pellentesque quis risus. Pellentesque ullamcorper ipsum elit, a pharetra erat tempor et. Nam gravida, dui at hendrerit lobortis, magna diam rutrum ex, eget mattis nisl augue ac urna. Sed eget sem vestibulum libero dignissim mollis. Vivamus ac magna fermentum, pretium quam eu, aliquam tortor. Nunc lobortis ut tellus sit amet efficitur. Nulla aliquet in massa id mollis. Phasellus dui diam, pulvinar quis eleifend eget, dictum ut lorem. Etiam lacus lacus, interdum eget interdum in, commodo ut lorem. Duis et ipsum suscipit, laoreet arcu eget, consequat lectus. Donec id massa sagittis, malesuada sem vel, consectetur libero. <br /><br /><br /><br /><br /><br /></p></p></th><th><img src="images/arrow12.jpg" height="360px" width="600px"/></th>

</tr>




</table>

 
 
</div>
	 
	 
	          
             
  <div style=" position:absolute;
   bottom:0;
   width:100%;
   height:60px;
      position:fixed;
   background:#A02424;">
               <a  align="center" href="copyright.php" style="position:absolute; top:10%; bottom:30%; left:43%; right=20%; color:white">Copyrights @ 2017</a></div>
  
   </body>
</html>