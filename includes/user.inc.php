<?php

class User extends Dbh{


  public function getAllUsers() {
   $stmt = $this->connect()->query("SELECT * FROM users");
    while($row = $stmt->fetch()) {
      echo $uid = $row['uid'];

    }
  }

  public function getUsersWithCountCheck() {
    $id = 1;
    $uid = 'Sean';

    $stmt = $this->connect()->prepare("SELECT * FROM users WHERE id=:id AND uid=:uid");

    $stmt->execute([$id, $uid]);

    if ($stmt->rowCount()) {
      while ($row = $stmt->fetch()) {
        return $row['uid'];
      }
    }
  }
}