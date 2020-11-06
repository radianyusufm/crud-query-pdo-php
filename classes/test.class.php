<?php

class Test extends Dbh{

  public function getUsers() {
    $sql = "SELECT * FROM user";
    $stmt =$this->connect()->query($sql);
    while ($row = $stmt->fetch()) {
      echo $row['nama'] . '<br>';
    }
  }

  public function getUsersStmt($nama, $umur) {
    $sql = "SELECT * FROM user WHERE nama = ? AND umur = ?";
    $stmt =$this->connect()->prepare($sql);
    $stmt->execute([$nama, $umur]);
    $names = $stmt->fetchAll();

    foreach ($names as $name) {
      echo $name['nama'] . '<br>';
    }
  }

  public function setUsersStmt($nama, $umur, $alamat) {
    $sql = "INSERT INTO user(nama, umur, alamat) VALUES (?,?,?)";
    $stmt =$this->connect()->prepare($sql);
    $stmt->execute([$nama, $umur, $alamat]);

  }

  public function updateUsersStmt($id, $nama, $umur, $alamat) {
    $sql = "UPDATE user SET nama = ? , umur = ? , alamat = ? WHERE id = ?";
    $stmt =$this->connect()->prepare($sql);
    //urutan exceute harus sesuai dengan query sql
    $stmt->execute([$nama, $umur, $alamat, $id]);

  }


  public function deleteUsersStmt($id) {
    $sql = "DELETE FROM user WHERE id = ?";
    $stmt =$this->connect()->prepare($sql);
    $stmt->execute([$id]);

  }
}

 ?>
