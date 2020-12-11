<?php //CADASTRO

function cadastro($connection) {

  $login = isset($_POST['login']) ? $_POST['login'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $senha = isset($_POST['senha']) ? $_POST['senha'] : '';
  $avatar = $_FILES['avatar'];

  $nameImage = md5($avatar['name'] . rand(0, 9999));
  $tipo = substr($avatar['name'], -4);
  $nomeCompleto = "{$nameImage}{$tipo}";
  $imagem = $avatar['tmp_name'];
  move_uploaded_file($imagem, "./img/{$nomeCompleto}");

  $sql = "insert into usuarios (login, email, senha, avatar)
                        values ('{$login}','{$email}','{$senha}','{$nomeCompleto}')";

  $connection->query($sql);
}

if (isset($_POST['salvar'])) {
  cadastro($connection);
  header('Location: ../login/index.php');
}
