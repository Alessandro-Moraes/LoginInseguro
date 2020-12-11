<?php //LER

function ler() {
  global $connection;

  $sql = 'select * from usuarios';

  $stmt = $connection->query($sql);
  
  $result = [];
  
  if ($stmt) {
    if ($stmt->num_rows) {
      while ($user = $stmt->fetch_object()) {
        $result = $user;
      }
    }
  }
  return $result;
};
