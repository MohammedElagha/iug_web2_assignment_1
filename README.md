IUG  
Web Programming 2 - SICT 2308  
ِِAssginment 1  

120171960
<?php 
	$mark = array("MS" => 75 , "CSE" => 85 , "DS" => 80 , "WB" =>  90 ,  "Q" => 95);
    foreach( $mark as $key => $value ){
		echo $key."=>".$value."\t";
	}	
?>
