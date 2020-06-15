<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro Ferramenta</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="CSS/cadastrar.css">
</head>
<body>
	<form method="POST">
		<h1>Dados do Cliente</h1>
		<label for="nome">Nome Completo</label>
		<input type="text" name="nome" id="nome" maxlength="40">
		<label for="cpf">CPF</label>
		<input type="text" name="cpf" autocomplete="off" id="cpf" maxlength="11">
                 <label for="email">Email</label>
		<input type="email" name="email" autocomplete="off" id="email" maxlength="25">
                <label for="telefone">Telefone</label>
		<input type="text" name="telefone" autocomplete="off" id="telefone" maxlength="15">
             

    
        <form method="POST">
		<h1>Dados Ferramentas</h1>
		<label for="nome">Ferramenta</label>
		<input type="text" name="ferramenta" id="nome" maxlength="40">
		<label for="modelo">Modelo</label>
		<input type="text" name="modelo" autocomplete="off" id="modelo" maxlength="15">
                <label for="marca">Marca</label>
		<input type="text" name="marca" autocomplete="off" id="marca" maxlength="25">
                <label for="voltagem">Voltagem</label>
		<input type="text" name="voltagem" autocomplete="off" id="voltagem" maxlength="40">
                <label for="acessorio">Acessórios</label>
		<input type="text" name="acessorio" autocomplete="off" id="acessorio" maxlength="40">
                <input type="submit" value="cadastrar">
             
	</form>
        </div>
    </div>
    </body>
    
</html>

<?PHP
// 1 - VERIFICAR SE ELA APERTOU O BOTAO CADASTRAR - ok
// 2 - GUARDAR DADOS DENTRO DE VARIAVEIS e verificar se esta vazia - ok
// 3 - ENVIAR DADOS COLHIDOS PARA A CLASSE , FUNCAO CADASTRAR
// 4 - VERIFICAR O RETORNO FALSE OU TRUE

if(isset($_POST['nome']))
{

	$nome = ($_POST['nome']);
	$cpf = ($_POST['cpf']);
	$email = ($_POST['email']);
	$telefone = ($_POST['telefone']);
        $ferramenta = ($_POST['ferramenta']);
	$modelo = ($_POST['modelo']);
        $marca = ($_POST['marca']);
	$voltagem = ($_POST['voltagem']);
	$acessorio = ($_POST['acessorio']);

	if(!empty($nome) && !empty($cpf) && !empty($email) && !empty($telefone) && !empty($ferramenta) && !empty($modelo) &&
                !empty($marca) && !empty($voltagem) && !empty($acessorio)
                ) 
	{
		if(0==0)
		{
			require_once 'CLASSES/usuarios.php';
			$us = new Usuario("sql10348498","sql10.freesqldatabase.com","sql10348498","Mc53GbUggR");
			if($us->cadastrar2($nome, $cpf, $email, $telefone, $ferramenta, $modelo,$marca, $voltagem,$acessorio))
                       
			{ ?>
                                <script>alert('Cadastro realizado com sucesso!!');window.location='cadastroServico.php';</script>
                                
<?php		}
			{ ?>
	
<?php		}
		}
		 ?>			
<?php		
	}else
	{ ?>
		<p class="mensagem">Preencha todos os campos!</p>
<?php }
}
?>
