<?php

class Repository {

    public function insert($object) {
        if ($object instanceof $this->instance) {
            $database = new Database();

            $database->query($this->generateInsertQuery($object));
            $database = $this->bindValues($database, $object);

            try {
                $database->execute();
                return true;
            } catch (PDOException $ex) {
                print $ex;
                return false;
            }
        }

        return false;
    }

    public function update($object) {
        if ($object instanceof $this->instance) {
            $database = new Database();

            $database->query($this->generateUpdateQuery($object));
            $database = $this->bindValues($database, $object, true);

            try {
                $database->execute();
                return true;
            } catch (PDOException $ex) {
                print $ex;
                return false;
            }
        }
        return false;
    }

    public function delete($object) {
        if ($object instanceof $this->instance) {
            $database = new Database();
            $database->query("DELETE FROM $this->tableName WHERE id = :id");
            $database->bind(":id", $object->getId());

            try {
                $database->execute();
                return true;
            } catch (PDOException $ex) {
                print $ex;
                return false;
            }
        }
        return false;
    }

    public function generateUpdateQuery($object) {
        $objectData = $object->toArray();
        $statement = "UPDATE $this->tableName SET ";

        foreach ($objectData as $data => $val) {
            if ($val != NULL) {
                $statement .= " $data = :$data,";
            }
        }
        $statement = rtrim($statement, ",");

        return $statement . " WHERE id = :id";
    }

    public function generateInsertQuery($object) {
        $objectData = $object->toArray();
        $statement = "INSERT INTO $this->tableName (";

        foreach ($objectData as $data => $val) {
            $statement .= "$data,";
        }
        $statement = rtrim($statement, ",");
        $statement .= ") VALUES (";

        foreach ($objectData as $data => $val) {
            $statement .= ":$data,";
        }
        $statement = rtrim($statement, ",");

        return $statement . ")";
    }

    public function bindValues($database, $object, $notNull = false) {
        $objectData = $object->toArray();
        foreach ($objectData as $data => $val) {
            if ($notNull) {
                if ($val != NULL) {
                    $database->bind(":$data", $val);
                }
            } else {
                $database->bind(":$data", $val);
            }
        }

        return $database;
    }

    public function initialise($id) {
        $object = NULL;

        $database = new Database();
        $database->query("SELECT * FROM $this->tableName WHERE id = :id");
        $database->bind(":id", $id);

        $row = $database->single();

        if ($database->rowCount() == 1) {
            $object = new $this->instance($row);
        }

        return $object;
    }

}
