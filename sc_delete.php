<?php
include('sc_config.php');
if(isset($_GET['ID']))
{
	$id=$_GET['ID'];
	$query=mysqli_query($con,"update employee set status=0 where ID='$ID'");
	if($query)
	{
		 header("location:sc_select.php");
	}
	else

	{
		die(mysqli_connect_error());
	}
}
else
{
	$query=mysqli_query($con,"update employee set status=1 where ID='$ID'");
	if($query)
	{
		 header("location:school.php");
	}
	else

	{
		die(mysqli_connect_error());
	}
	
}

?>