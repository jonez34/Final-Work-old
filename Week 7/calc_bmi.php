<?php 
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> BMI CALCULATOR WEEK 7</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head><body>';


//Data posted from form
$height= $_POST['height'];
$weight= $_POST['weight'];
include('bmi_lib.php');
$bmi = new Bmi($height, $weight);
//$bmi->set_ht($height);
//$bmi->set_wt($weight);


echo "Your bmi is : ". $bmi->calcBmi($height, $weight);














echo'</body>
</hmtl>';

?>