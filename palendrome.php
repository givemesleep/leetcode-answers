<?php 

// racecar

function CheckPalindrome($string){
	if($string == strrev($string)){
	  echo "True";	
	  return true;
	}
	else{
	  echo "False";
	  return false;
	}
}

CheckPalindrome("racecar");

?>
