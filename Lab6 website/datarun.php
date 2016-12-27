<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Car </title>

<!-- insert php OO library here-->
<?php include("class_car.php"); ?>
</head>

<body>
<?php 



$model= new car ();
$model->set_model($_POST['model']);
$make= new car ();
$make->set_make($_POST['make']);
$engine= new car ();
$engine-> set_engine($_POST['engine']);
$vehicle= new car ();
$vehicle-> set_vehicle($_POST['vehicle']);

echo "You have configured a " .$model->get_model()." " .$make->get_make()." " . $vehicle->get_vehicle(). " which will get " .$engine->get_engine(). "."; 

?>
</body>
</html>