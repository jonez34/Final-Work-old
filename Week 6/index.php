<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OOP in PHP</title>

<!-- insert php OO library here-->
<?php include("class_lib.php"); ?>
</head>

<body>
<?php
		$stefan = new person("Stefan Smith");
		//$jimmy = new person();
		$bob = new person("Bob Barker");
		
		//$stefan->set_name("Stefan Smith");
		//$jimmy->set_name("Jim Dandy");
		
		
		//echo "Stefan's full name is ".$stefan->get_name();
		//echo "Jimmy's full name is ".$jimmy->get_name();
		//echo "Bob's full name is ".$bob->get_name();
		$stefan->set_pinn_number("6");
		
		echo "The correct way to access the private pin is through use of a getter. Pin: " .$stefan->get_pinn_number(). "<br />"; 
		//echo "Stefan's private Pin number is ".$stefan->pinn_number;
		
		$james = new employee("Johnny Rotten");
		echo "James' full name is ".$james->get_name();
		
?>
</body>
</html>