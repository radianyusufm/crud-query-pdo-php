<?php


      include 'includes/include.php';

  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $testObj = new Test();

    //show all
    $testObj->getUsers();

    echo "<br>";

    //get sttment
    $testObj->getUsersStmt('Mahendra', 25);

    //add data
    //$testObj->setUsersStmt('Dian', 25 , 'Jawa TImur');


    //update
    //$testObj->updateUsersStmt(4, 'Muhammad Dian', 24 , 'Jawa Timur');

    //delete
    $testObj->deleteUsersStmt(4);
     ?>
  </body>
</html>
