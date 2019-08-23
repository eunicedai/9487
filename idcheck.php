<?php
	$id = $_GET["id"];

	$Link = mysqli_connect('us-cdbr-iron-east-02.cleardb.net','bf54940f57b6d8','eabd5f32','heroku_c89901fa5cd0d96');

	if(!$Link){
		echo "連接失敗";
	}

	$result = mysqli_query($Link,"SELECT * FROM user");

	$new = '';
	while($row = mysqli_fetch_assoc($result)){
		if($row["U_ID"] == $id){
			$new = "used";
			echo "<script>alert('這個ID已被使用');</script>";
			break;
		}
	}
	if ($new != "used") {
		echo "<script>alert('恭喜 這個ID可以使用');location.href='signup.php'</script>";

	}
	
?>
