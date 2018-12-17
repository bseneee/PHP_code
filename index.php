<!DOCTYPE html>
<html>
  <head>
   <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="css/index.css">
  </head>
  <body>
	<h4></h4>
	<!--<img src="t.jpg"><img src="i.jpg"></br><	img src="ay.jpg"></br><img src="white.jpg"></br><img src="download.jpg"></br><img src="com.jpg">-->
	<h1>
		<form action="index.php" method=GET>
			<!--<input type="text" placeholder="search ner,ovog, sisi" name="sr"></br>-->
			<input type="text" placeholder="search name" name="B" class="input"></br>
			<input type="submit" name="search" ></br></br><!--<h4>Lesson Name</h4></br>-->
			<input type="text" name="Less" placeholder="enter the lesson's name"><!--</br><h4>SiSi Id</h4></br>--></br>
			<input type="text" placeholder="Sisi ID" name="l"` class="input"></br>
			<input type="submit" name="up">
	
		</form>
	</h1>
    <?php
        $file = fopen("student.txt", "r");
        $table = json_decode(fread($file, filesize("student.txt")), true);
		//print_r($table);
        //$table = array();
        fclose($file);
        
        function write(&$table){
          $file = fopen("student.txt", "w+");
          fwrite($file, json_encode($table));
          fclose($file);
        }

        function insert(&$table, $ovog, $ner, $sisi, $mergejil, $hicheel){
          $student = array(
              "ovog" => $ovog,
              "ner" => $ner,
              "sisi" => strtoupper($sisi),
              "mergejil" => $mergejil,
              "hicheel" => $hicheel
          );
          $table[strtoupper($sisi)] = $student;
          write($table);
        }

        function display($table){
          uasort($table, function($a, $b) {
            if ($a['ovog'] == $b['ovog'])
              return 0;
            return ($a['ovog'] < $b['ovog']) ? -1 : 1;
          });
          echo "<table border='1'>";
          echo "<tr style='font-weight: bold'><td>Овог</td><td>Нэр</td><td>SiSi код</td><td>Мэргэжил</td><td>Сонгосон хичээлүүд</td></tr>";
          foreach ($table as $index => $student){
            echo "<tr>";
            foreach ($student as $key => $value){
              echo "<td>";
              if (is_array($value)){
                foreach($value as $classIndex => $class){
                  foreach($class as $classKey => $classValue){
                    echo "$classKey = $classValue, ";
                  }
                  echo "<br>";
                }
              } else {
                echo "$value"; 
              }
              echo "</td>";
            }
            echo "</tr>";
          }
          echo "</table>";
        }
		
        function searchByName($table, $keyword){
		//$a=$_GET['sr'];
          $found = array();
		  foreach ($table as $index => $student){
            if ($keyword != '' && substr_count(strtolower($student['ovog']), strtolower($keyword)) != 0){
              $found[] = $student;
            }
          }
		 display($found);
          //return $found;
        }

        function replaceClasses(&$table, $sisi, $classes){
          foreach ($table as $index => $student){
            if ($student['sisi'] == strtoupper($sisi)) {
              $table[$index]['hicheel'] = array_merge($table[$index]['hicheel'], $classes);
            }
          }
        }
	/*
        insert($table, "Бат", "Болд", "18B1SEAS1234", "IT", array(
          array("ner"=>"Алгоритмын үндэс", "index"=>"ICSI101", "bagts"=>"3"),
          array("ner"=>"Математик 1Б", "index"=>"MATH102", "bagts"=>"3")
          ));
        insert($table, "Навч", "Цэцэг", "18B1SEAS1111", "Computer's intelligience", array(
          array("ner"=>"Алгоритмын үндэс", "index"=>"ICSI101", "bagts"=>"3")
          ));
        insert($table, "Анхбаяр", "Уянга", "18B1SEAS1037", "Programmer", array(
          array("ner"=>"Алгоритмын үндэс", "index"=>"ICSI101", "bagts"=>"3")
          ));
        */
		//echo"<p>This is table</p>";
        display($table);

        $search = '';
		echo "<p>Search result</p>";
		if(isset($_GET['search'])){
			$Lname=$_GET['B'];
			$found = searchByName($table, $Lname);
		}
        const CLASSES = array(
          array("ner"=>"Веб программчлал", "index"=>"ICSI301", "bagts"=>"3"),
          array("ner"=>"Алгоритмын үндэс", "index"=>"ICSI101", "bagts"=>"3"),
		  array("ner"=>"Обеакт програмчлал", "index"=>"ICSI100", "bagts"=>"3")
        );
		
		// if enter lesson's name when one to one
		
		
		if(isset($_GET['up'])){
			$sisiId=$_GET['l'];
			replaceClasses($table, $sisiId, CLASSES);
		}
		echo"<br><p>Update result</p>";
		if(isset($_GET['l'])){
			display($table);
		}
    ?>
  </body>
</html>