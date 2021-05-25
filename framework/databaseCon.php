<?php
    class Database {
        var $database;
        var $host = 'localhost';
        var $username = 'root';
        var $password = '';
        var $query;
        var $table;
        var $selection;

        public function __construct($array) {
            $host = $array['host'];
            $database = $array['database'];
            $username = $array['username'];
            $password = $array['password'];
            $this->queryCon = new PDO("mysql:host=$host;dbname=$database", $username, $password);
        }

        // Retrieve data from a column by giving the function the table name and column name
        public function retrieve_column($table, $selection) {
            $query = $this->queryCon->prepare("SELECT $selection from $table");
            $query->execute();
            $queryOutput = $query->fetchAll(PDO::FETCH_ASSOC);
            // Creating a new array to put all the fetched data into.
            $output = array();
            for($i = 0; $i < sizeof($queryOutput); $i++) {
                array_push($output, $queryOutput[$i][$selection]);
            }
            return $output;
        }

        // Retrieve data from a row by giving the function the column name and value
        public function retrieve_row($table, $where, $value) {
            $query = $this->queryCon->prepare("SELECT * from $table WHERE $where='$value'");
            $query->execute();
            $queryOutput = $query->fetchAll(PDO::FETCH_ASSOC);
            // Creating a new array to put all the fetched data into.
            $output = array();
            for($i = 0; $i < sizeof($queryOutput); $i++) {
                $output = $queryOutput[$i];
            }
            return $output;
        }

        // Retrieve all data from a table by giving the function the table name
        public function retrieve_all($table) {
            $query = $this->queryCon->prepare("SELECT * from $table");
            $query->execute();
            $queryOutput = $query->fetchAll(PDO::FETCH_ASSOC);
            // Creating a new array to put all the fetched data into.
            $output = array();
            for($i = 0; $i < sizeof($queryOutput); $i++) {
                array_push($output, $queryOutput[$i]);
            }
            return $output;
        }
        
        // Insert data row in a table
        public function insert_row($table, $data) {
            $procData = implode(", ",$data);
            $procKeys = implode(", ",array_keys($data));
            $query = $this->queryCon->prepare("INSERT INTO $table ($procKeys) VALUES ($procData)");
            $query->execute();
        }

        public function edit_value($table, $keyWhere, $valueWhere, $key, $value) {
            $query = $this->queryCon->prepare("UPDATE $table SET $key='$value' WHERE $keyWhere='$valueWhere'");
            $query->execute();
        }
    }
?>