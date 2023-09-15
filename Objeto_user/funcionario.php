<?php 

include "usuario.php";

class funcionario extends usuario{

    private String $salario;
    private String $cargo;
    private int $acesso;

    public function getSalario(): String
    {
        return $this->salario;
    }

    public function setSalario(String $salario): self
    {
        $this->salario = $salario;

        return $this;
    }

    public function getCargo(): String
    {
        return $this->cargo;
    }
    
    public function setCargo(String $cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }

    public function getAcesso(): int
    {
        return $this->acesso;
    }

    public function setAcesso(int $acesso): self
    {
        $this->acesso = $acesso;

        return $this;
    }
}

function AcessoFun(int $acesso):funcionario{

$f = new funcionario();




return $f;
}


function cadastrarFuncionario(String $nome, String $cpf, String $endereco, float $salario = 0,String $cargo): funcionario
{
    $f = new funcionario;
    $f ->setNome($nome);
    $f->setCpf($cpf);
    $f->setSalario($salario)
    $f->setEndereco($endereco);
    $f->setCargo($cargo);
  
 

  
    return $f;
}









?>