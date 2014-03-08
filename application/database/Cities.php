<?php 

//TableName: tCities

class Cities {
	private $id;
	private $countryId;
	private $name;
	private $zipCode;
	private $status;
	
	public function __construct($var = NULL) {
		if (is_int($var)) {
			$this->id = $var;
		} else if (is_array($var)) {
			$this->initialiseFromAray($var);
		}
	}
	private function initialiseFromAray($array) {
		foreach ($array as $var => $value) {
			$this->$var = $value;
		}
	}		public function toArray() {
		$array = array();
		foreach (get_class_vars(get_class($this)) as $var => $value) {
			$array[$var] = $this->$var;
		}
		return $array;
	}
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}
	
	public function getCountryId(){
		return $this->countryId;
	}
	
	public function setCountryId($countryId){
		return $this->setCountryId = $countryId;
	}
	
	public function getMemberId(){
		return $this->memberId;
	}
	
	public function setMemberId($memberId){
		return $this->memberId = $memberId;
	}
	
	public function getName(){
		return $this->name;	
	}
	
	public function setName($name){
		return $this->name = $name;
	}
	
	public function getZipCode(){
		return $this->zipCode;	
	}
	
	public function setZipCode($zipCode){
		return $this->zipCode = $zipCode;
	}
	
	public function getStatus(){
		return $this->status;	
	}
	
	public function setStatus($status){
		return $this->status = $status;
	}
}

?>