<html>
<head>
<title>Dieler</title>
<style type="text/css">
a:hover{color:#000; text-decoration:none; text-shadow:0 0 3px #ff0000}
a:link{color:#000; text-decoration:none}
.masuk{width:260px; box-shadow:0px 0px 2px 2px #c0c0c0; text-align:justify; padding:10px;
 margin-right:705px; margin-left:5px; position:fixed;
}
.all{width:990px; background:#f0f0f0; height:30px; padding:5px; border:3px double #000}
</style>
</head>
<body>
<div class="all">
<FORM action="profdiler.php" METHOD="POST" NAME="input">
<div style="margin-left:430px;margin-top:5px">
User : <input type="text" name="User"></div>
<div style="margin-left:640px;margin-top:-22px">
Password : <input type="password" name="password"></div>
<div style="margin-left:860px;margin-top:-23px;">
<input type="submit" name="Login" value="Login">
<input type="reset" name="reset" value="Reset">
</FORM></div><br><br>
<?php
if (isset($_POST['Login'])) {
$user = $_POST['User'];
$pass = $_POST['password'];{
if ($user == "" && $pass == "")
echo "<script language='JavaScript'>// <![CDATA[
alert('[Anda Belum Login!!]')// ]]></script></div>";
}
}?>
</body>
</html>