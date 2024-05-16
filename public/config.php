<?php

namespace DB;
define('config', __DIR__);
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
    public function can_upload($file){
        if($file['name'] == '')
            return 'Вы не выбрали файл.';

        if($file['size'] == 0)
            return 'Файл слишком большой.';

        $getMime = explode('.', $file['name']);
        $mime = strtolower(end($getMime));
        $types = array('jpg', 'png', 'gif', 'bmp', 'jpeg');

        if(!in_array($mime, $types))
            return 'Недопустимый тип файла.';

        return true;
    }

    public function make_upload($file){
        $currentDate = date('Y-m-d');

        $uploadDirectory = 'img/' . $currentDate . '/';

        if (!file_exists($uploadDirectory)) {
            mkdir($uploadDirectory, 0777, true);
        }
        $name = mt_rand(0, 10000) . $file['name'];

        $destinationPath = $uploadDirectory . $name;
        move_uploaded_file($file['tmp_name'], $destinationPath);

        return $destinationPath;
    }

}

$db = new db("db", "root", "root", "shop");



