<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Default</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
</head>

<body>
<?php 

Class HappyBirthday
{
	private $name;
	private $birthday;
	
	
	
	public	function SetName($nme)
	{
		$this->name = $nme;
	}
	public function SetBDay($bd)
	{
		$this->birthday = $bd;
	}
	public function GetName()
	{
		return $this->name;
	}
	public function GetBDay()
	{
		return $this->birthday;
	}
	public function CalcAge ($bd)
	{
		$thisyr = date("Y");
		$birthyr = substr ($bd, 0, 4);
		$age = $thisyr - $birthyr;
		
		return (string) $age;
	}
	public function DaysTill($bd)
	{
		$cdate = new DateTime('Now');
		$appt = new DateTime(date( 'd M Y', $bd));
		$months_until_appt = $appt->diff($today)-> m;
		$days_until_appt = $appt->diff($today)-> days;
		
		 return $months_until_appt;
		return $days_until_appt;
	}
	
	
	
}//end HappyBirthday

$hbd = new HappyBirthday();

$hbd->SetName ($_POST['fullname']);
$hbd->SetBDay ($_POST['birthdate']);

echo 'Hello ' .$hbd->GetName() . '!' . ' You are ' . $hbd->CalcAge($hbd->GetBDay()) . ' years old.';
//echo $hbd->GetBDay();
echo '<br />';
echo "There are " . $hbd->DaysTill($hbd->GetBDay()). "Till your birthday";		

?>
</body>

</html>