	<!DOCTYPE html>
	<html>
	<head>
	<title></title>
	</head>
 	<body>

 	<!--Redefine $stdGrads  as an associative array, the Indices are the names of your registered courses last semester and the values are your grades.
 	 These cript  print the contents in tabular format with the GPA in the table foot-->
	<table border=\"1\">
	<?php 
	$stdGrads = array ('Data Structure'=>78.8,'Mathematical Computation'=>80.5,'Software Engineering'=>81.2,'Web Programming 1'=>90.8);
	$total = 0 ; 
	for (reset($stdGrads); $k=key($stdGrads) ; next($stdGrads)) { 
		$total += $stdGrads[$k];
	}
	for (reset($stdGrads); $k=key($stdGrads) ; next($stdGrads)) {
		
		echo "<tr><th>$k</th><td>$stdGrads[$k]</td></tr>";
	}
	echo "<tr><th colspan=\"2\">$total</th></tr>";
	?>
	</table>

	<br>

	<!----Define an array of faculties of IUG each with its dean name and the highest and lowest averages of its students.
	 A report to be generated as web page to display the information-->
	<table border="1">
		<tr>
			<th></th>
			<th>Dean Name</th>
			<th>Highest AVG</th>
			<th>Lowest AVG</th>
		</tr>
	<?php
	$facultiesname=array('IT','ENG','MED','SCI');
	$iugfaculties =array(
		"it"=>
		array("deanname"=>"rebhi","highestavg"=>95,"lowestavg"=>70),
		"eng"=>
		array('deanname'=>'unkown','highestavg'=>85,'lowestavg'=>75),
		"med"=>
		array('deanname'=>'unkown','highestavg'=>90,'lowestavg'=>60),
		"sci"=>
		array('deanname'=>'unkown','highestavg'=>89,'lowestavg'=>84),
	);?>

	<?php 
	$no = 0 ; 
	for (reset($iugfaculties); $k1=key($iugfaculties) ; next($iugfaculties)) {?><tr>
		<th><?php 

		echo $facultiesname[$no];
		$no++;
		?></th><?php
		for (reset($iugfaculties[$k1]); $k2=key($iugfaculties[$k1]) ; next($iugfaculties[$k1])) { 
			echo "<th>".$iugfaculties[$k1][$k2]."</th>";
		}?></tr><?php
		
	}
	?>
	</table>


	<!----associative array for Arab countries presidents-->
	<?php
	$arabpresidents=array(
		"palestine"=>"Mahmoud Abbas",
		"egypt"=>"Abdel Fattah Al-Sisi",
		"lebanon"=>"Michael Awn",
		"syria"=>"Bashar  Al-Assad",
		"iraq"=>"Barham Salih",
	);
	?>


	<br>




	</body>
	</html>