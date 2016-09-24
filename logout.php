<html>
<head>
<title></title>

</head>
<body>



<div class="main" id="main" > 
  <div class="banner" id="banner" align="center" >KULUVA HOSPITAL ARUA</BR><P>P.O.BOX 5768 ARUA</P>
	   <P>WE ARE CALLED TO SERVE</P>
	   </div>
   <div class="nav" id="nav">
   
   </div>
  <div class="left-side" id="left_side"></div>//I have added a comment
 <div class="rightside" id="right_side">
<?php
include'script/db.php';

//if(isset($_GET['Logout'])){
session_destroy();
unset($_SESSION['U_user']);
header("location:index.php");
//}
?>
</div>
<div class="footer" id="footer">Content for  class "footer" id "footer" Goes Here</div>
</div>
</body>
</html>