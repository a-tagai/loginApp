<?php

namespace App;

class Controller{

	private $_values;
	private $_errors;

	public function __construct(){
		$this->_values = new \stdClass();
		$this->_errors = new \stdClass();

	}

	//Accessor for $_values
	protected function setValues($key, $value) {
		$this->_values->$key = $value;
	}
	public function getValues() {
		return $this->_values;
	}
	//

	//Accessor for $_errors
	protected function setErrors($key, $value){
		$this->_errors->$key = $value;
	}
	public function getErrors($key){
		return isset($this->_errors->$key) ?  $this->_errors->$key : '';
	}
	//

	public function hasErrors() {
		return !empty(get_object_vars($this->_errors));
	}

	protected function isLoggedIn(){
		return isset($_SESSION['member']) && !empty($_SESSION['member']);
	}
}