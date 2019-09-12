<?php

	namespace Cliente;

	//trabalhando com herança de classe
	//aqui usamos \ para indicar a raiz do arquivo, para que seja retornada a busca a partir da raiz
	//ou seja, volte na raiz e busque a classe Cadastro que existe lá, para usarmos ela de herança aqui
	class Cadastro extends \Cadastro{
		public function registrarVenda() {
			echo "Foi registrada uma venda para o cliente " . $this->getNome();
		}
	}