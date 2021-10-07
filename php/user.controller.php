<?php
	include("conexao.class.php");

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$U_email = $_POST['U_email'];
	$U_telefone = $_POST['U_telefone'];
	$senha = md5($_POST['senha']);
	
	$sql = "INSERT INTO user (id, nome, cpf, U_email, U_telefone, senha) 
			VALUES (?, ?, ?, ?, ?, ?)";
	$stm = Conexao::prepare($sql);

	$stm->bindValue(1, $id);
	$stm->bindValue(2, $nome);
	$stm->bindValue(3, $cpf);
	$stm->bindValue(4, $U_email);
	$stm->bindValue(5, $U_telefone);
	$stm->bindValue(6, $senha);
	
	$stm->execute();

	header('location:../index.php?signup=success');
?>