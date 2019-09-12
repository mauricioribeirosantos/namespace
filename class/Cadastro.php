<?php

	//nome da classe deve ser o mesmo nome do arquivo, e por padrão deve começar com letra maiúscula
	Class Cadastro {

		//atributos da classe Cadastro como private
		private $nome;
		private $email;
		private $senha;


		//getters ans setters
		public function getNome():string {
			return $this->nome;
		}

		public function setNome($nome) {
			$this->nome = $nome;
		}

		public function getEmail():string {
			return $this->email;
		}

		public function setEmail($email) {
			$this->email = $email;
		}

		public function getSenha():string {
			return $this->senha;
		}

		public function setSenha($senha) {
			$this->senha = $senha;
		}


		//aqui criamos uma função para retornar os dados cadastrados nos atributos em formato json
		public function __toString() {
			return json_encode(array(
				"nome"=>$this->getNome(),
				"email"=>$this->getemail(),
				"senha"=>$this->getSenha()
			));
		}

	}