<?php include('header.timecard'); ?>



<table style='font-size: 15px' border='1' cellspacing='10'>
<form name="form" method="POST" action="timecardload.php" id="timecard"> 
  <tr>
  <td><p>UserID: &nbsp &nbsp <input type="text" name="userid" /></p>  </td>
  </tr>
  <tr>
  <td><p>Punch: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <select name="punch" form="timecard">
  <option  value="I">IN</option>
  <option  value="O">Out</option>  
</select></p></td>
  </tr>
  <tr>
  <td><p>Username:  &nbsp	<input type="text" name="username" /></p>  </td>
  </tr>
 <tr>
 <td><p>First Name: 	<input type="text" name="firstname" /></p> </td>
 </tr>
 <tr>
 <td><p>Last Name:		<input type="text" name="lastname" /></p> </td>
 </tr>
   <tr>
   <input type="hidden" name="stamp" value="<?php echo date("Y-m-d H:i:s"); ?>">   
  
  <td><input type="submit"  value="submit"> </td>
  </tr>
</form> 

<?php include('footer.timecard'); ?>