<?php

//TableName: tMessageBox

class MessageBox {

    private $id;
    private $userId;
    private $memberId;
    private $subject;
    private $message;
    private $date;
    private $messageStatus;

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

    public function getSubject() {
        return $this->subject;
    }

    public function setSubject($subject) {
        return $this->subject = $subject;
    }

    public function getMessage() {
        return $this->message;
    }

    public function setMessage($message) {
        return $this->message = $message;
    }

    public function getDate() {
        return $this->date;
    }

    public function setDate($date) {
        return $this->date = $date;
    }

    public function getMessageStatus() {
        return $this->messageStatus;
    }

    public function setMessageStatus($messageStatus) {
        return $this->setMessageStatus = $messageStatus;
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