<?php
include('sc_config.php');
if(isset($_POST['submit']))
{
$ID=$_POST['ID'];
$FIRST_NAME=$_POST['FIRST_NAME'];
$MIDDLE_NAME=$_POST['MIDDLE_NAME'];
$DATE_OF_BIRTH=$_POST['DATE_OF_BIRTH'];
$IDENTIFICATION_MARK=$_POST['IDENTIFICATION_MARK'];
$FATHER_NAME=$_POST['FATHER_NAME'];
$MOTHER_NAME=$_POST['MOTHER_NAME'];
$CASTE=$_POST['CASTE'];
$RELIGION=$_POST['RELIGION'];
$E_MAIL=$_POST['E_MAIL'];
$PH_NUMBER=$_POST['PH_NUMBER'];
$GENDER=$_POST['GENDER'];
$HOME_STATE=$_POST['HOME_STATE'];
$HOME_DISTRICT=$_POST['HOME_DISTRICT'];
$NATIONALITY=$_POST['NATIONALITY'];
$LANGUAGES_KNOWN=$_POST['LANGUAGES_KNOWN'];
$BLOOD_GROUP=$_POST['BLOOD_GROUP'];
$query=mysqli_query($con,"INSERT INTO `employee`(`ID`,`FIRST_NAME`,`MIDDLE_NAME`,`DATE_OF_BIRTH`,`IDENTIFICATION_MARK`,`FATHER_NAME`,`MOTHER_NAME`,`CASTE`,
`RELIGION`,`E_MAIL`,`PH_NUMBER`,`GENDER`,`HOME_STATE`,`HOME_DISTRICT`,`NATIONALITY`,`LANGUAGES_KNOWN`,`BLOOD_GROUP`)
VALUES ('".$ID."','".$FIRST_NAME."','".$MIDDLE_NAME."','".$DATE_OF_BIRTH."','".$IDENTIFICATION_MARK."','".$FATHER_NAME."','".$MOTHER_NAME."','".$CASTE."'
,'".$RELIGION."','".$E_MAIL."','".$PH_NUMBER."','".$GENDER."','".$HOME_STATE."','".$HOME_DISTRICT."','".$NATIONALITY."','".$LANGUAGES_KNOWN."','".$BLOOD_GROUP."')");
if($query)
{
echo '<script>window.location="sc_select.php";</script>';
}
else
{
die("Connection error:".mysqli_connect_error());
}
}
?>
<html>
<head>
<title>teacher Details</title>
<style>
#menu {
    float:left;
    width:600px;
	font-size:18px;
	font-color:orange;
}
 
#content {
    float:left;
    width:600px;
	font-size:18px;
	font-color:orange;
}

</style>
</head>
<body background="2018_Teacher_training_Banner.jpg">
<form method="post" action="">
<font color="red"><center><h1>TEACHERS DETAILS</h1><center></font>
<div id="content">
<form method="post" action="">
<table>
 <tr>
<td style="font-color:orange"><label>ID</label></td>
<td><input type="text" name="ID"></td>
</tr>
 <tr>
<td><label>FIRST_NAME</label></td>
<td><input type="text" name="FIRST_NAME"></td>
</tr>
 <tr>
<td><label>MIDDLE_NAME</label></td>
<td><input type="text" name="MIDDLE_NAME"></td>
</tr>
 <tr>
<td><label>DATE_OF_BIRTH</label></td>
<td><input type="text" name="DATE_OF_BIRTH"></td>
</tr>
 <tr>
<td><label>IDENTIFICATION_MARK</label></td>
<td><input type="text" name="IDENTIFICATION_MARK"></td>
</tr>
 <tr>
<td><label>FATHER_NAME</label></td>
<td><input type="text" name="FATHER_NAME"></td>
</tr>
 <tr>
<td><label>MOTHER_NAME</label></td>
<td><input type="text" name="MOTHER_NAME"></td>
</tr>
 <tr>
<td><label>CASTE</label></td>
<td><input type="text" name="CASTE"></td>
</tr>
 <tr>
<td><label>RELIGION</label></td>
<td><input type="text" name="RELIGION"></td>
 <tr>
<td><label>E_MAIL</label></td>
<td><input type="text" name="E_MAIL"></td>
</tr>
<td><label>PH_NUMBER</label></td>
<td><input type="text" name="PH_NUMBER"></td>
</tr>
 <tr>
<td><label>GENDER</label></td>
<td><input type="text" name="GENDER"></td>

</tr>
 <tr>
<td><label>HOME_STATE</label></td>
<td><input type="text" name="HOME_STATE"></td>
</tr>
 <tr>
<td><label>HOME_DISTRICT</label></td>
<td><input type="text" name="HOME_DISTRICT"></td>
</tr>
 <tr>
<td><label>NATIONALITY</label></td>
<td><input type="text" name="NATIONALITY"></td>
</tr>
 <tr>
<td><label>LANGUAGES_KNOWN</label></td>
<td><input type="text" name="LANGUAGES_KNOWN"></td>
</tr>
 <tr>
<td><label>BLOOD_GROUP</label></td>
<td><input type="text" name="BLOOD_GROUP"></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="submit"></td>
</tr>

</form>
</body>
</html>
