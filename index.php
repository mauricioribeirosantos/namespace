<?php
	
	//aqui fazemos um require para buscar o arquivo config.php
	require_once("config.php");

	//do namespace Cliente eu quero usar a classe Cadastro
	use Cliente\Cadastro;

	//este objeto agora chama a classe Cadastro dentro da pasta Cliente
	$cad = new Cadastro();

	//aqui atribuimos valor as variáveis chamando os métodos set da, porém da classe Cadastro que está na //pasta Cliente, que herda valores da classe Cadastro da pasta class
	$cad->setNome("Djalma Sideaux");
	$cad->setEmail("email@email.com.br");
	$cad->setSenha("123456");

	//aqui clamamos o método registrarVenda da classe Cadastro que está na pasta Cliente
	$cad->registrarVenda();

?>