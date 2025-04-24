<?php

namespace models;

use PDO;

class BaseModel
{
    protected $db;
    protected $table_name;
    public $columns;
    public $uiMessage;

    public function __construct()
    {
        $this->db = $this->getDb();
    }

    public function setColumns($attr)
    {
        $this->columns = $attr;
    }

    public function getColumns()
    {
        $sql = 'SHOW COLUMNS FROM ' . $this->table_name;
        $result = $this->db->query($sql);

        $columns = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $columns[] = $row['Field'];
        }

        return $columns;
    }

    protected function getDb()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pone";

        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
    }

    public function findOne($id)
    {
        $output = null;

        $sql = 'SELECT * FROM ' . $this->table_name . ' WHERE id=:id';
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $output = $stmt->fetch(PDO::FETCH_ASSOC);

        return $output;
    }

    public function getById($id)
    {
        return $this->findOne($id);
    }

    public function findAll()
    {
        $output = [];

        $sql = 'SELECT * FROM ' . $this->table_name;
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $output = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $output;
    }

    public function create($data)
    {
        $keys = array_keys($data);

        $sql = 'INSERT INTO ' . $this->table_name . ' (';
        $sql .= implode(', ', $keys);
        $sql .= ') VALUES (';
        $sql .= ':' . implode(', :', $keys);
        $sql .= ')';

        $stmt = $this->db->prepare($sql);
        $stmt->execute($data);
    }

    public function update($id, $data)
    {
        $updates = [];
        foreach ($data as $key => $value) {
            $updates[] = $key . "='" . $this->db->quote($value) . "'";
        }

        $sql = 'UPDATE ' . $this->table_name . ' SET ';
        $sql .= implode(', ', $updates);
        $sql .= ' WHERE id=:id';

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM {$this->table_name} WHERE id = :id";

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
}
