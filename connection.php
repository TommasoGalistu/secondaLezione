<?php

$user = "root";
$pass = "ZY0R6hICLb$!O7Yl0b2w";

try {
  $connector = new PDO('mysql:host=localhost;dbname=stylelist', $user, $pass);
} catch (PDOException $e) {
  var_dump($e);
}

// // query di selezione | proiezione
// $sth = $dbh->query('select id, name from user');

// while ($res = $sth->fetch(PDO::FETCH_ASSOC)) {
//   var_dump($res);
//   printf("</br></br>");
// }

// while ($res = $sth->fetch(PDO::FETCH_NUM)) {
//   var_dump($res[0]);
// }

// while ($res = $sth->fetch(PDO::FETCH_OBJ)) {
//   var_dump($res->id);
// }

// CRUD 
// create read update delete 
