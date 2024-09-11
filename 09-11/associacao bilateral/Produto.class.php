<?php
class Produto
{
    public function __construct(
        private string $nome = "",
        private string $descricao = "",
        private float $preco = 0,
        private int $estoque = 0,
        private array $fornecedor = array()
    ) {}


}
