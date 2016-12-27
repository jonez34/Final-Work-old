<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Car </title>

<!-- insert php OO library here-->
<?php include("class_car.php"); ?>
</head>

<body>
<p>Please Configure a Vehicle</p>
<table style='font-size: 15px' border='1' cellspacing='10'>
<form name="form" method="POST" action="datarun.php" id="car"> 
<tr>
 <td>
<select name="model" form="car">
  <option  value="Ford">Ford</option>
  <option  value="Chevy">Chevy</option>  
  <option  value="Buick">Buick</option>
  <option  value="Chrysler">Chrysler</option> 
  <option  value="GMC">GMC</option>
  <option  value="Pontiac">Pontiac</option> 
 </select>
 </td>
  </tr>
  <tr>
 <td>
<select name="make" form="car">
  <option  value="F-150">F-150</option>
  <option  value="Blazer">Blazer</option>  
  <option  value="Century">Century</option>
  <option  value="Aspen">Aspen</option> 
  <option  value="Sierra">Sierra</option>
  <option  value="GrandPrix">GrandPrix</option> 
 </select>
 </td>
  </tr>
  <tr>
 <td>
<select name="engine" form="car">
  <option  value="30mpg">4 Cylinder</option>
  <option  value="25mpg">6 Cylinder</option>  
  <option  value="18mpg">8 Cylinder</option>
 </select>
 </td>
  </tr>
  <tr>
 <td>
<select name="vehicle" form="car">
  <option  value="car">Car</option>
  <option  value="bus">Bus</option>  
  <option  value="Truck">Truck</option>
  <option  value="Van">Van</option> 
  <option  value="Suv">Suv</option>
</select>
</td>
  </tr>
  <tr>
<td><input type="submit"  value="submit"> </td>
  </tr>  
</body>
</html>