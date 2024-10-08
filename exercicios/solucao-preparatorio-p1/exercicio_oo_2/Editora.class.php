<?php
	class Editora extends Pessoa
	{
		public function __construct(private string $cnpj = "", string $nome = "", string $data = "", string $titulo = "", $editora = null)
		{
			parent:: __construct($nome);
			
			$this->publicacoes[] = new publicacoes($data, $titulo, $editora);
		}
		
		public function getCnpj()
		{
			return $this->cnpj;
		}
		public function setCnpj($cnpj)
		{
			$this->cnpj = $cnpj;
		}
		public function getPublicacoes()
		{
			return $this->publicacoes;
		}
		
		public function setPublicacoes(string $data = "", string $titulo = "", $editora = null)
		{
			$this->publicacoes[] = new publicacoes($data, $titulo, $editora);
		}
	}
?>