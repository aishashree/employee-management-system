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
$query=mysqli_query($con,"UPDATE `hospital`(`ID`,`FIRST_NAME`,`MIDDLE_NAME`,`DATE_OF_BIRTH`,`IDENTIFICATION_MARK`,`FATHER_NAME`,`MOTHER_NAME`,`CASTE`,
`RELIGION`,`E_MAIL`,`PH_NUMBER`,`GENDER`,`HOME_STATE`,`HOME_DISTRICT`,`NATIONALITY`,`LANGUAGES_KNOWN`,`BLOOD_GROUP`)
VALUES ('".$ID."','".$FIRST_NAME."','".$MIDDLE_NAME."','".$DATE_OF_BIRTH."','".$IDENTIFICATION_MARK."','".$FATHER_NAME."','".$MOTHER_NAME."','".$CASTE."'
,'".$RELIGION."','".$E_MAIL."','".$PH_NUMBER."','".$GENDER."','".$HOME_STATE."','".$HOME_DISTRICT."','".$NATIONALITY."','".$LANGUAGES_KNOWN."','".$BLOOD_GROUP."')");
if($query)
{
echo '<script>window.location="school.php";</script>';
}

$query=mysqli_query($con,"select * from employee where ID='$ID'");
while ($row=mysqli_fetch_array($query));
}
?>
<html>
<head>
<title>Teacher Details</title>
</head>
<form method="post" action="">
<table>
 <tr>
<td><label>ID</label></td>
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
</font>
<tr>
<td><input type="submit" name="submit" value="submit"></td>
</tr>
</table>
</form>
</body>
</html>