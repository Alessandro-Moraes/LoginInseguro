<?php  // CONEXÃO

  $connection = new mysqli('dbteste.cly0kznzqwwq.us-east-1.rds.amazonaws.com', 'admin', 'Secreta5', 'login');
  if ($connection->connect_error) {
    exit("Erro: {$connection->connect_error}");
  }

