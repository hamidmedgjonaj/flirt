<?php

class UsersRepository extends Repository {

    protected $tableName = "tUsers";
    protected $instance = "Users";

    public function checkCredentials($username, $password) {
        $database = new Database();
        $database->query("SELECT * FROM $this->tableName WHERE username = :username AND password = :password");
        $database->bind(':username', $username);
        $database->bind(':password', md5($password));

        try {
            echo "1";
            $result = $database->single();
            var_dump($result);
            if ($database->rowCount()) {
                return new $this->instance($result);
            }
            return NULL;
        } catch (PDOException $ex) {
            print $ex;
            return NULL;
        }
    }

    public function getByEmail($email) {
        $database = new Database();
        $database->query("SELECT * FROM $this->tableName WHERE email = :email");
        $database->bind(':email', $email);

        try {
            $result = $database->single();
            if ($database->rowCount()) {
                return new $this->instance($result);
            }

            return NULL;
        } catch (PDOException $ex) {
            print $ex;
            return NULL;
        }
    }

    public function getByUsername($username) {
        $database = new Database();
        $database->query("SELECT * FROM $this->tableName WHERE username = :username");
        $database->bind(':username', $username);

        try {
            $result = $database->single();
            if ($database->rowCount()) {
                return new $this->instance($result);
            }

            return NULL;
        } catch (PDOException $ex) {
            print $ex;
            return NULL;
        }
    }

    public function getByEmailAndHash($email, $pHash) {
        $database = new Database();
        $database->query("SELECT * FROM $this->tableName WHERE email = :email && pHash = :pHash");
        $database->bind(':email', $email);
        $database->bind(':pHash', $pHash);

        try {
            $result = $database->single();
            if ($database->rowCount()) {
                return new $this->instance($result);
            }

            return NULL;
        } catch (PDOException $ex) {
            print $ex;
            return NULL;
        }
    }
    
    public function setHash($pHash, $user){
        $database = new Database();
        $database->query("UPDATE $this->tableName SET pHash = :pHash WHERE id = :id");
        $database->bind(':pHash', $pHash);
        $database->bind(':id', $user->getId());

        try {
            $result = $database->execute();
            if ($database->rowCount()) {
                return true;
            }

            return false;
        } catch (PDOException $ex) {
            print $ex;
            return false;
        }
    }

}

?>