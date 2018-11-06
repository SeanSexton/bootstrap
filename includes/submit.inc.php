<?php
/**
 * Created by PhpStorm.
 * User: seansexton
 * Date: 07/10/2018
 * Time: 19:56
 */

class submit extends Dbh{

  public function setSubmitForm() {
    $conn = $this->connect()->query(
      "INSERT INTO about_me (content, active, deleted)
              VALUES ('".$_POST["content"]."','".$_POST['active']."','".$_POST['deleted']."')");

    if ($conn) {
      echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
    }
    else{
      echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
    }

  }

  public function getSubmitForm() {

    $active = 'Y';
    $deleted = 'N';

    $conn = $this->connect()->prepare("SELECT * FROM about_me WHERE active=? AND deleted=?");

    $conn->execute([$active, $deleted]);

    if($conn->rowCount()) {
      while($row = $conn->fetch()) {
        return $row['content'];
      }
    }

  }

}