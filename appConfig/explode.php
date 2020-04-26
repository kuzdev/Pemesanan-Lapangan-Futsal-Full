<?php
function seo_explode($count) {
   	$emptyExplode = array (' ');
	$arrExplode = array ('-','/','\\',',','.','#',':',';','\'',
						'"','[',']','{','}',')','(','|','`','~',
						'!','@','%','$','^','&','*','=','?','+');
    $count = str_replace($arrExplode, '', $count);    
    $count = strtolower(str_replace($emptyExplode, '-', $count));
    return $count;
}
?>
