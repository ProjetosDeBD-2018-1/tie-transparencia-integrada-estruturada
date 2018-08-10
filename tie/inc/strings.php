<?php

function br_string_to_float($string){
	if(strstr($string, ",")) { 
    $string = str_replace(".", "", $string); // replace dots (thousand seps) with blancs 
    $string = str_replace(",", ".", $string); // replace ',' with '.' 
  } 
  
  if(preg_match("#([0-9\.]+)#", $string, $match)) { // search for number that may contain '.' 
    return floatval($match[0]); 
  } else { 
    return floatval($string); // take some last chances with floatval 
  }
	
}

?>