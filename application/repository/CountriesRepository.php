<?php
class CountriesRepository extends Repository {

    protected $tableName = "tCountries";
    protected $instance = "Countries";

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

    public function getList() {
        $database = new Database();
        $database->query("SELECT * FROM $this->tableName");
        $list = $database->resultset();

        $listObjects = array();

        foreach ($list as $item) {
            $listObjects[] = new Countries($item);
        }
        return $listObjects;
    }

    public function getListWithLimit($offset = NULL, $limit = NULL) {
        $database = new Database();
        $database->query("SELECT * FROM $this->tableName LIMIT :offset, :limit");
        $database->bind(":limit", $limit);
        $database->bind(":offset", $offset);
        $list = $database->resultset();
        $listObjects = array();

        foreach ($list as $item) {
            $listObjects[] = new Countries($item);
        }
        return $listObjects;
    }

}
