<?php
	require_once "connect.php";
    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($polaczenie->connect_errno==0)
	{
		echo "work";
		//$test = $_POST['test'];
		//echo $test;
	}
	else
	{
		echo mysqli_connect_errno();
	}
?>  