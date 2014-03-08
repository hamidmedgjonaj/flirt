<?php

//TableName: tUserGifts

class UserGifts {

    private $id;
    private $userId;
    private $memberId;
    private $giftId;
    private $message;
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

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        return $this->userId = $userId;
    }

    public function getMemberId() {
        return $this->memberId;
    }

    public function setMemberId($memberId) {
        return $this->memberId = $memberId;
    }

    public function getGiftID() {
        return $this->giftId;
    }

    public function setGiftId($giftId) {
        return $this->giftId = $giftId;
    }

    public function getMessage() {
        return $this->message;
    }

    public function setMessage($message) {
        return $this->message = $message;
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