<?php
class Bmi{

		var $ht;
		var$wt;
		protected $bmi;
		
		function __construct($ht, $wt){
			$this->ht = $ht;
			$this->wt = $wt;
		}
		//accessors (setters)
		protected function set_ht($new_ht){
		$this->height = $new_ht;		
			}
		//mutators (getters)
		function get_ht(){
		return $this->ht;
			}
		
		//accessors (setters)
		protected function set_wt($new_wt){
		$this->weight = $new_wt;		
			}
		//mutators (getters)
		function get_wt(){
		return $this->wt;
			}
			
			//accessors (setters)
		protected function set_bmi($new_bmi){
		$this->bmi = $new_bmi;		
			}
		//mutators (getters)
		function get_bmi(){
		return $this->bmi;
			}
			
			public function calcBmi($ht, $wt){
				$bmi = ($wt / ($ht*$ht)) * 703;
				return $bmi;
				
			}
}
		//end class Bmi