<?php
class CitiesRepository extends Repository {

    protected $tableName = "tCities";
    protected $instance = "Cities";

    public function count() {
        $database = new Database();
        $database->query("SELECT count(0) count FROM $this->tableName");
        $row = $database->single();

        return $row['count'];
    }

    public function getListeByCountryId($countryId) {
        $database = new Database();
        $database->query("SELECT * FROM $this->tableName where countryId = :countryId");
        $database->bind(':countryId', $countryId);
        $list = $database->resultset();

        $listObjects = array();

        foreach ($list as $item) {
            $listObjects[] = new Cities($item);
        }
        return $listObjects;
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
