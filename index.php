<?php
/**
 *  Created by:      Brandon Mitchell
 *  Date:            3/18/15
 *  Last Mod Time:   11:50 PM
 *  Filename:        index.php
 */

	//phpinfo();

	echo $_SERVER["USER"] . "<br/>";
	$x = "Version 2";


	function testFunction($n) {
		return ($n * $n * $n);
	}

	$a = array(1,2,3,4,5,6,7);
	$b = array_map("testFunction",$a);
	print_r($b);
	echo $x;

	$x.= " Test";
	echo $x;
	//