<?php


class usuario
{

    private String $nome;
    private String $cpf;
    private int $idade;
    private String $endereco;

    public function getNome(): String
    {
        return $this->nome;
    }

    public function setNome(String $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCpf(): String
    {
        return $this->cpf;
    }

    public function setCpf(String $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    public function getEndereco(): String
    {
        return $this->endereco;
    }

    public function setEndereco(String $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }



    function ativaConta(bool $status)
    {

        if ($status == 1) {
            $status = true;
        } else {
            $status = false;
        }

        return $status;
    }

    function Update(String $endereco,int $idade,String $cargoFun,float $salario):usuario{

        $user = new usuario;
        $user->setEndereco($endereco);
        $user->setIdade($idade);
       

        return $user;
    }

    
}
?>