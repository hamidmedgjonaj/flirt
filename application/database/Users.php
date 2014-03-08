<?php

//TableName: tUsers

class Users {

    private $id;
    private $username;
    private $email;
    private $password;
    private $pHash;
    private $firstname;
    private $lastname;
    private $dob;
    private $cityId;
    private $sex;
    private $seeking;
    private $height;
    private $eyeColor;
    private $hairColor;
    private $bodyType;
    private $smoke;
    private $flirtText;
    private $flirtStatus;
    private $coins;
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
        return $this->id = $id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        return $this->username = $username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        return $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        return $this->password = $password;
    }

    public function getPHash() {
        return $this->pHash;
    }

    public function setPHash($pHash) {
        return $this->pHash = $pHash;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function setFirstname($firstname) {
        return $this->firstname = $firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function setLastname($lastname) {
        return $this->lastname = $lastname;
    }

    public function getDob() {
        return $this->dob;
    }

    public function setDob($dob) {
        return $this->dob = $dob;
    }

    public function getCityId() {
        return $this->cityId;
    }

    public function setCityId($cityId) {
        return $this->cityId = $cityId;
    }

    public function getSex() {
        return $this->sex;
    }

    public function setSex($sex) {
        return $this->sex = $sex;
    }

    public function getSeeking() {
        return $this->seeking;
    }

    public function setSeeking($seeking) {
        return $this->seeking = $seeking;
    }

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        return $this->height = $height;
    }

    public function getEyeColor() {
        return $this->eyeColor;
    }

    public function setEyeColor($eyeColor) {
        return $this->eyeColor = $eyeColor;
    }

    public function getHairColor() {
        return $this->hairColor;
    }

    public function setHairColor($hairColor) {
        return $this->hairColor = $hairColor;
    }

    public function getBodyType() {
        return $this->bodyType;
    }

    public function setBodyType($bodyType) {
        return $this->bodyType = $bodyType;
    }

    public function getSmoke() {
        return $this->smoke;
    }

    public function setSmoke($smoke) {
        return $this->smoke = $smoke;
    }

    public function getFlirtText() {
        return $this->flirtText;
    }

    public function setFlirtText($flirtText) {
        return $this->flirtText = $flirtText;
    }

    public function getFlirtStatus() {
        return $this->flirtStatus;
    }

    public function setFlirtStatus($flirtStatus) {
        return $this->flirtStatus = $flirtStatus;
    }

    public function getCoins() {
        return $this->coins;
    }

    public function setCoins($coins) {
        return $this->coins = $coins;
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