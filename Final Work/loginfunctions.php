<?php



Class login
{
	
	public $username;
	public $password;
	
	public $conn;
	public $query;
	public $sql;
	
	public function dbconn()
	{
		$conn = mysql_connect("spartandevelomentcom.ipagemysql.com", "spartandb", "shadow34", "spartandb");
		return $conn;		
	}
	
	public function dbquery()
	{
			$sql="SELECT * FROM users WHERE username='". $this->getusername()."' and password='".$this->getpassword()."'";
			$query = mysql_query($this->dbconn(), $sql);
			return $query;
	}
	
	public function dbcheck()
	{
		$count = mysql_num_rows($this->dbquery());
		return $count;
	}
	
	public function buildpassword()
	{
		$digit = rand (1,4);
		$digit2 = rand (5,9);
		$s = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
		$t = substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 3)), 0, 3);
		$q = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 4)), 0, 4);
		$z = substr(str_shuffle(str_repeat("~!@#$%^&*()_+-={}|[]\:;<>?,./", 1)), 0, 1);

		$password=$digit.$s.$z.$q.$digit2.$t;
		return $password;
	}
	
	// Sets for variables
	public function setusername($user)
	{
		$this->username = $user;	
	}
	
	public function setpassword($pass)
	{
		$this->password = $pass;
	}
	
	//Gets for variables
	public function getusername()
	{
		return $this->username;
	}
	public function getpassword()
	{
		return $this->password;
	}
	
	 
	
}//End class login
//takes posted info and checks for sql injection	
//$myusername=mysqli_real_escape_string($_POST['myusername']); 
//$mypassword=mysqli_real_escape_string($_POST['mypassword']); 

//set class and connects post to virables
//$logincheck = new login;
//$logincheck-> setusername ($myusername); 
//$logincheck-> setpassword ($mypassword);

//calls functions and checks info from post against DB and returns a number of rows 
//if($logincheck->dbcheck()==1){
//session_start();
//$_SESSION['myusername'] = $myusername;
//header("location:login_success.php");
//}
//else {
// points back to the login on failure
//echo ('Wrong Username or Password, please <a href="logintest.php">try again</a>');
//}
//echo $logincheck->getusername();
//echo $logincheck->getpassword();


	
	
	
	
	
	
	
	
	
	
	


?>