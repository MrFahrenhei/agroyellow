<?php
	include("conexao.class.php");

	$id = $_POST['id'];
	$nome = $_POST['nomeEmpresa'];
	$cnpj = $_POST['cnpj'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$senha = $_POST['senha'];
	
	$sql = "INSERT INTO empresa (id, nomeEmpresa, cnpj, email, telefone, senha) 
			VALUES (?, ?, ?, ?, ?, ?)";
	$stm = Conexao::prepare($sql);

	$stm->bindValue(1, $id);
	$stm->bindValue(2, $nome);
	$stm->bindValue(3, $cnpj);
	$stm->bindValue(4, $email);
	$stm->bindValue(5, $telefone);
	$stm->bindValue(6, $senha);
	
	$stm->execute();

	header('location:index.php?signup=success');
?>