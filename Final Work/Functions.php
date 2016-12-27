<?php
class Connection{
	
	
	public $host='spartandevelomentcom.ipagemysql.com';
	public $usrname= 'spartandb';
	public	$pwrd= 'shadow34';
	public	$database= 'spartandb';
	public $DB;
	
	public function ConnDB()
	{
			$DB = mysql_connect($host, $usrname, $pwrd, $database);

				return $DB;
	}
	
	public function LoadLib()
	{
		
		
	}
}
?>

