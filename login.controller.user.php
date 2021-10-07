<?php
	include("conexao.class.php");

	$id = $_POST['id'];
	$nome = $_POST['nomeUser'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$senha = $_POST['senha'];
	
	$sql = "INSERT INTO user (id, nomeUser, cpf, email, telefone, senha) 
			VALUES (?, ?, ?, ?, ?, ?)";
	$stm = Conexao::prepare($sql);

	$stm->bindValue(1, $id);
	$stm->bindValue(2, $nome);
	$stm->bindValue(3, $cpf);
	$stm->bindValue(4, $email);
	$stm->bindValue(5, $telefone);
	$stm->bindValue(6, $senha);
	
	$stm->execute();

	header('location:index.php?signup=success');
?>