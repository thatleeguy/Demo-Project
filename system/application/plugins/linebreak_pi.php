<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');


function linebreak($str, $after=100)
{
	$new_str = '';
	$count = 0;
	
	for ($i=0; $i<strlen($str); $i++)
	{
		if ($count == $after) {
			$new_str .= '<br />';
			$count = 0;
		}
		
		$new_str .= $str[$i];
		$count++;
	}
	return $new_str;
}

?>