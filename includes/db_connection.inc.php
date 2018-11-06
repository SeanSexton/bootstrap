<?php

class Dbh {

  private $servername;
  private $username;
  private $password;
  private $dbhname;
  private $charset;

  public function connect(){
    $this->servername = '127.0.0.1';
    $this->username = 'root';
    $this->password = 'Silverm00n';
    $this->dbhname = 'portfolio';
    $this->charset = 'utf8mb4';

    try {
      $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbhname.";charset=".$this->charset;
      $pdo = new PDO ($dsn, $this->username, $this->password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
    } catch (PDOException $e){
      echo "Connection Failed: ".$e->getMessage();
    }
  }


  }

