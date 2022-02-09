<?php
  class Conexion {
    public $conexion;
    public $dbName;
    public $host;
    public $user;
    public $password;


    public function __construct(string $host, string $user, string $password,string $dbName) {
        try {
            $this->conexion = new mysqli($host,$user,$password,$dbName);
        } catch (\Exception $e) {
            echo "Error: ".$e->getMessage();
        }
    }
  }
