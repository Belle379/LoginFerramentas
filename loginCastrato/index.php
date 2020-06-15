<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSS/entrar.css">
</head>
<body>
	
	<form method="POST">
		<h1>Acesse a sua conta</h1>
		<img src="IMAGENS/envelope.png">
		<input type="email" name="email" autocomplete="off" maxlength="40">
		<img src="IMAGENS/cadeado.png">
		<input type="password" name="senha">
		<input type="submit" value="ENTRAR">
		<a href="cadastrar.php">Registre-se agora!</a>
	</form>
</body>
</html>

<?php

if(isset($_POST['email']))
{
  $email = addslashes($_POST['email']);
  $senha = addslashes($_POST['senha']);
  if(!empty($email) && !empty($senha))
  {
    require_once 'CLASSES/usuarios.php';
    $us = new Usuario("sql10348498","sql10.freesqldatabase.com","sql10348498","Mc53GbUggR");

    if($us->entrar($email, $senha))
    {
      echo "<script>location.href='cadastroServico.php'</script>";
    }else
    {
      echo "<script>alert('Email e/ou senha estão incorretos!');</script>";
    }
  }else
  {
    echo "<script>alert('Preencha todos os campos!');</script>";
  }
}

?>
