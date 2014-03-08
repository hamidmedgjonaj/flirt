<?php
class UserImagesRepository extends Repository{
    
    protected $tableName = "tUserImages";
    protected $instance = "UserImages";
    
    public function count() {
        $database = new Database();
        $database->query("SELECT count(0) count FROM $this->tableName");
        $row = $database->single();
        
        return $row['count'];
    }
    
    public function getByUserId($userId){
        $database = new Database();
        $database->query("SELECT * FROM $this->tableName WHERE userId = :userId");
        $database->bind(':userId', $userId);

        try {
            $result = $database->single();
            if ($database->rowCount()) {
                return new UserImages($result);
            }

            return NULL;
        } catch (PDOException $ex) {
            print $ex;
            return NULL;
        }
    }
    
}