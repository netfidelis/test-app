<?php
	/**
	 *  Created by:      Brandon Mitchell
	 *  Date:            3/18/15
	 *  Last Mod Time:   11:50 PM
	 *  Filename:        index.php
	 */

	//phpinfo();

	//echo $_SERVER["USER"] . "<br/>";
	$x = "Version 2";


	include "functions.php";

	$a = array(1,2,3,4,5,6,7);
	$b = array_map("testFunction",$a);
	print_r($b);
	//echo $x;

	$x.= " Test";
	//echo $x;
	//


	if(isset($_POST["submit"])):

		$aaa = $_POST["hi"];

		echo $bbb = $aaa . "bad";


	endif;

	echo phpinfo();
?>



<form action="" method="post">

	<input type="text" name="hi"/>
	<input type="submit" value="sub" name="submit">

</form>