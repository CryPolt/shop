<?php

namespace DB;

class db {
    private $host;
    private $user;
    private $password;
    private $database;
    private $mysqli;
    public function __construct($host, $user, $password, $database) {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->database = $database;

        $this->mysqli = new \mysqli($this->host, $this->user, $this->password, $this->database);

        if ($this->mysqli->connect_errno) {
            printf("Connect failed: %s\n", $this->mysqli->connect_error);
        }
    }

    public function query($sql) {
        return $this->mysqli->query($sql);
    }

    public function close() {
        $this->mysqli->close();
    }

    public function error() {
        return $this->mysqli->error;
    }

    public function connected()
    {
        return "Connected successfully";
    }
    public function prepare($sql) {
        return $this->mysqli->prepare($sql);
    }
}

$db = new db("172.20.0.2", "root", "root", "shop");


?>
