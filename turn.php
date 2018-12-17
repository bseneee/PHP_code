<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="index.css">
	</head>
	<body>
<?php
	/*
	$Sdens =array(
		array(
			"Fnam"=>"Бат",
			"Lname"=>"Болд",
			"sisi"=>"18b1seas1234",
			"Occupation"=>"Програм хангамж",
			"Lesson"=> array(
				array(
					"Lesson_Name"=>"График дизайн",
					"Lesson_index"=>"ICS101",
					"Lesson_cerdit"=>3,
				),
				array(
					"Lesson_Name"=>"Хиймэл оюун",
					"Lesson_index"=>"ICS103",
					"Lesson_cerdit"=>3,
				)
			)
		),
		array(
			"Fnam"=>"Навчаа",
			"Lname"=>"Цэцэг",
			"sisi"=>"16b1seas1134",
			"Occupation"=>"Хэрэглээний математик",
			"Lesson"=> array(
					array(
						"Lesson_Name"=>"Алгоритмын үндэс ",
						"Lesson_index"=>"ICS101",
						"Lesson_cerdit"=>3,
						),
					array(
						"Lesson_Name"=>"Хэрэглээний математик ",
						"Lesson_index"=>"ICS100",
						"Lesson_cerdit"=>2,
						)
			)
		),
		array(
			"Fnam"=>"Ганцэцэг",
			"Lname"=>"Дашдорж",
			"sisi"=>"16b1seas1289",
			"Occupation"=>"Цөмийн физик",
			"Lesson"=> array(
					array(
						"Lesson_Name"=>"Цөм ба Ертөнц",
						"Lesson_index"=>"ICS101",
						"Lesson_cerdit"=>3,
						),
					array(
						"Lesson_Name"=>"Магадлалын онол",
						"Lesson_index"=>"ICS100",
						"Lesson_cerdit"=>2,
						)
			)
		),
		array(
			"Fnam"=>"Анхбаяр",
			"Lname"=>"Уянга",
			"sisi"=>"18b1seas1111",
			"Occupation"=>"Мэдээллийн технологи",
			"Lesson"=> array(
				array(
					"Lesson_Name"=>"Веб програмчлал",
					"Lesson_index"=>"ICS101",
					"Lesson_cerdit"=>3,
				),
				array(
					"Lesson_Name"=>"Обеакт програмчлал",
					"Lesson_index"=>"ICS103",
					"Lesson_cerdit"=>3,
				)
			)
		),
		array(
			"Fnam"=>"Ганболд",
			"Lname"=>"Бoлороо",
			"sisi"=>"18b1seas1211",
			"Occupation"=>"Компьютерийн ухаан",
			"Lesson"=> array(
				array(
					"Lesson_Name"=>"Англи хэл101",
					"Lesson_index"=>"ICS101",
					"Lesson_cerdit"=>3,
				),
				array(
					"Lesson_Name"=>"Үйлдлийн системийн онол",
					"Lesson_index"=>"ICS103",
					"Lesson_cerdit"=>3,
				)
			)
		)
	);
	echo "<table border='1'>";
	echo "<tr style='font-weight:bold '>
	<td>FirstName</td><td>LastName</td><td>Sisi Id</td><td>Occupation</td><td>Select lessons</td>";
	foreach($Sdens as $index=>$key){
			echo "<tr>";
				foreach($key as $Lname =>$value){
					echo"<td>";
					if(is_array($value)){
						foreach($value as $Vindex=>$l){
							foreach($l as $Ln=>$end){
									echo "$end || "; 
							}
							echo "</br>";
						}
						$n="Add Lesson";
						echo"<a href='#'>".strtolower($n)."</a>";
					}else{
						echo $value;
					}
					echo"</td>";
				}
			echo "</tr>";
	}
	
	echo "</tr>
	</table>";*/
	
	//echo json_encode($Sdens);
?>
<?php
	// search Student's information
	
	function input(&$Sdens){
		// substr_count
		
		
	}
	/*function insert(){
	
	}
	function search(){
		
		
	}
	// will must be display() function
	function update(){
		
		
	}*/
?>
	</body>
</html>