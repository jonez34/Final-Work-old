<?php 

//all our OO code parent
class person{
	 var $name;
	 public $height;
	 protected $social_insurance;
	 private $pinn_number;
	 
	 
	 //Method constructor for person class
	 function __construct($persons_name){
		 $this->name = $persons_name;
	 }	 
	 
	 //Method accessors (setter) for person class
	 protected function set_name($new_name){
		 if($new_name!="Jimmy Two Guns"){
			 $this->name = strtoupper($new_name);
		 }
		 $this->name = $new_name;
	 }
	 
	 function set_pinn_number($new_pinn_number){
		 $this->pinn_number = $new_pinn_number;
	 }
	 
	 //Method mutator (getter) for person class
	 function get_name(){
		 return $this->name;
	 }
	function get_pinn_number(){
		 return $this->pinn_number;
	 }
	 
	  
	
}//end class person//////////////////////////////////////////////////////
// child class becaseyu of extends
class employee extends person{
	function __construct($employee_name){
		$this->set_name($employee_name);
		
	}	
	protected function set_name($new_name){
		if($new_name=="Stefan Sucks"){
			$this->name = $new_name;
		}
		else if ($new_name == "Johnny Rotten"){
			parent::set_name($new_name);
		}
	}
}//end class employee ///////////////////////////////////////////////////////

?>