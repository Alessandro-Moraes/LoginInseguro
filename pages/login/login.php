<?php
session_start();

$_SESSION['logged'] = False;

function login() {
  $login = $_POST['login'] ?? '';
 // $senha = $_POST['senha'] ?? '';

  //if (!empty($login) && !empty($senha)) {

    $user = ler($login);
    // var_dump($user);    

    if (!empty($user->dataCadastro)) {
      $_SESSION['logged'] = True;
      $_SESSION['id'] = $user->id;
      $_SESSION['login'] = $user->login;
      $_SESSION['avatar'] = $user->avatar;

      // var_dump($_SESSION['id']);
      // var_dump($_SESSION['login']);
      // var_dump($_SESSION['avatar']);
      var_dump($user->dataCadastro);

      header('Location: ../../index.php');
      return;
    }
  //}
}

if (isset($_POST['entrar'])) {
  login();
  // var_dump($_SESSION['logged']);
}
