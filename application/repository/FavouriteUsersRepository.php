<?php
class FavouriteUsersRepository extends Repository{
    protected $tableName = "tFavouriteUsers";
    protected $instance = "FavouriteUsers";
    
    public function count() {
        $database = new Database();
        $database->query("SELECT count(0) count FROM $this->tableName");
        $row = $database->single();
        
        return $row['count'];
    }
    
    public function getListeByUserId($userId){
        $database = new Database();
        $database->query("SELECT * FROM $this->tableName where userId = :userId");
        $database->bind(':userId', $userId);
        $list = $database->resultset();

        $listObjects = array();

        foreach ($list as $item) {
            $listObjects[] = new FavoriteUsers($item);
        }
        return $listObjects;
    }
}