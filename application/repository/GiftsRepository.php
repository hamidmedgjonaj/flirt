<?php
class GiftsRepository extends Repository{
    protected $tableName = "tGifts";
    protected $instance = "Gifts";
    
    public function count() {
        $database = new Database();
        $database->query("SELECT count(0) count FROM $this->tableName");
        $row = $database->single();
        
        return $row['count'];
    }
    
    public function getByName($name) {
        $database = new Database();
        $database->query("SELECT * FROM $this->tableName WHERE name = :name");
        $database->bind(':name', $name);

        try {
            $result = $database->single();
            if ($database->rowCount()) {
                return new User($result);
            }

            return NULL;
        } catch (PDOException $ex) {
            print $ex;
            return NULL;
        }
    }
}