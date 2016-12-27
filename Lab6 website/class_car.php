<?php

class car{
	// variables = properties
	var $make;
	var $model;
	var $engine;
	var $vehicle;
	
	//functions = methods
	function set_make($new_make){
		$this->make = $new_make;		
	}
	function get_make(){
		return $this->make;
	}
	function set_model($new_model){
		$this->model = $new_model;		
	}
	function get_model(){
		return $this->model;
	}
	function set_engine($new_engine){
		$this->engine = $new_engine;		
	}
	function get_engine(){
		return $this->engine;
	}
	function set_vehicle($new_vehicle){
		$this->vehicle = $new_vehicle;		
	}
	function get_vehicle(){
		return $this->vehicle;
	}
}

?>