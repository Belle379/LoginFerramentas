<!DOCTYPE html>
<html lang="pt-br">

 <head>
   <meta charset= "utf-8">
    <title>TAW LOGIN</title> 
    <link rel="stylesheet"  href="css/designtaw.css">
 </head>
  
  <body>
   <div id="corpo-form">
    <h1> Login </h1>
     <form method= "POST" action="pro.php">
	<input type="text"     class="form-control" placeholder="Funcionario" required>
	<input type="password" class="form-control" placeholder="Senha" required>
	<input type="submit"   value="Entrar"       class="btn float-right login_btn">
	<a href=""><strong>Cadastrar Funcionario</strong></a>
     </form>
   </div>
 </body> 


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
</html>
