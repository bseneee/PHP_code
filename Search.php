<html>
	<head>
		<title> Search and Update</title>
		<style>
			body{
				background-size:1070px 480px;
				background-repeat:no-repeat;
			}
			h6{
				text-decoration:underline;
				color:red;
			
			}
			
		</style>
	</head>
	
	<body background="ay.jpg">
		<form action="" method=GET>
			<h1>Та өөрийн нэрээ оруулна уу </h1>
			<h6>!!! Та эхлээд бүртгүүлсэн байх шаардлагатай</h6>
			<input type="text" placeholder="Search Fname" class="input" name="srch">
			<input type="submit" name="submit">
		</form>
		<?php
			/*const error(is_bool($a)){
				echo "mistake in the Name";
			};*/
			if(isset($_GET['submit'])){
				if( $_GET['srch'] == "Болд" ||  $_GET['srch'] =="Дашдорж" ||  $_GET['srch'] =="Уянга" ||  $_GET['srch'] =="Цэцэг" || $_get['srch']=="Болороо"){
				     header('Location: turn.php');
				}else{
						die("<h6>Error:505 don't true the Name</h6>");
				}
			}
			
			// use the server function
		?>
	</body>
</html>