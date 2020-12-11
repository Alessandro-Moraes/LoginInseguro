<?php
include('./pages/connection/connection.php');
include('./pages/login/login.php');
include('./pages/login/logout.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
	<link rel="stylesheet" href="./styles/style.css">
	<link rel="stylesheet" href="./styles/index.css">
	<title>P2 Login Inseguro</title>
</head>

<body>
	<div class="container-fluid">
		<article class="row justify-content-around mt-3">
			<div class="card">
				<!-- BOTAO DARK THEME -->
				<form action="" method="POST">
					<div class="switch__container">
						<input id="switch-shadow" name="theme" class="switch switch--shadow" type="checkbox" />
						<label for="switch-shadow"></label>
						<label class="switch-label">Light/Dark</label>
					</div>

					<h3>P2 - Login Inseguro</h3>

					<?php if (!isset($_SESSION['id'])) { ?>
						<div>
							<img class="imgLogin" src=<?php echo "./images/avatar.jpg"; ?> alt="Imagem de avatar do usuário">
							<span class="login"><?php echo "Anônimo" ?></span>
						</div>
						<a href="./pages/login/index.php" class="btnLogout">Login <i class="far fa-user-circle"></i></a>
					<?php } else { ?>
						<div>
							<img class="imgLogin" src=<?php echo "./pages/cadastro/img/{$_SESSION['avatar']}"; ?> alt="Imagem de avatar do usuário">
							<span class="login"><?php echo $_SESSION['login'] ?></span>
						</div>
						<button type="submit" name="btnLogout" class="btnLogout">Logout <i class="far fa-user-circle"></i></button>
					<?php } ?>

				</form>

				<img src="./images/zendikar.jpg" alt="Imagem de uma cidade Egípcia">

				<hr class="">

		</article>
	</div>
	<script src="./scripts/script.js"></script>
</body>

</html>
