<?php

$random_chars="";
$characters = array("B","C","D","F","G","H","J","K","L","M","N",
"P","Q","R","S","T","V","W","X","Y","Z","1","2","3","4","5","6","7","8","9");
 
// set the array
$keys = array();
 
// set length
$length = 7;
 
// loop to generate random keys and assign to an array
while(count($keys) < $length) {
	$x = mt_rand(0, count($characters)-1);
	if(!in_array($x, $keys)) {
       $keys[] = $x;
    }
}
 
// extract each key from array
foreach($keys as $key){
   $random_chars .= $characters[$key];
}	

echo "prof_".$random_chars;

?>