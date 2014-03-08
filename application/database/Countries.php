<?php

//TableName: tCountries

class Countries {

    private $id;
    private $name;
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
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        return $this->name = $name;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        return $this->status = $status;
    }

    public function toArray() {
        $array = array();
        foreach (get_class_vars(get_class($this)) as $var => $value) {
            $array[$var] = $this->$var;
        }
        return $array;
    }

}

?>