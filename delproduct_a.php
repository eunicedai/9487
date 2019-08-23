<?php
	session_start();
	if(!isset($_SESSION["ID"]))
	header("Location:signin.php");

	$UID = $_SESSION["ID"];
	$Link = mysqli_connect('us-cdbr-iron-east-02.cleardb.net','bf54940f57b6d8','eabd5f32','heroku_c89901fa5cd0d96');

	if(!$Link){
		echo "連接失敗";
	}else{
		$p_code=$_GET["p_code"];
		$sql ="DELETE FROM product WHERE P_Code='$p_code'";
		$result=mysqli_query($Link, $sql);
		echo "<script>alert('刪除成功');location.href='admin.php';</script>";
	}
