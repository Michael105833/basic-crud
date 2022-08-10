<?php

class config{

public $server = "mysql:host=localhost;dbname=practicecrud";
public $user = "root";
public $password = "";
public $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
public $pdo = null;

public function con()
{
    try {
        $this->pdo = new PDO($this->server, $this->user, $this->password, $this->options);
    } catch (PDOExceptions $e) {
        die($e->getMessage());
    }
        return $this->pdo;
}
}
?>
