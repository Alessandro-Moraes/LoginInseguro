<?php //LER

function ler($login) {
  global $connection;

  $sql = "select * from usuarios where login = '{$login}'";
 
  $stmt = $connection->query($sql);

  $result = [];

    if($stmt) {
    if ($stmt->num_rows) {
      while ($user = $stmt->fetch_object()) {
        $result = $user;
      }
    }
    return $result;
  }
};
