<?php


class usuario
{

    private String $nome;
    private String $cpf;
    private int $idade;
    private float $saldo;
    private bool $status;
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


    public function getSaldo(): float
    {
        return $this->saldo;
    }


    public function setSaldo(float $saldo): self
    {
        $this->saldo = $saldo;

        return $this;
    }


    public function isStatus(): bool
    {
        return $this->status;
    }


    public function setStatus(bool $status): self
    {
        $this->status = $status;

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


public function Cadastrar(String $nome, String $cpf, String $endereco, int $idade, float $saldo = 0,bool $status = true): usuario
    {
        $user = new usuario;
        $user->setNome($nome);
        $user->setCpf($cpf);
        $user->setEndereco($endereco);
        $user->setIdade($idade);
        $user->setSaldo($saldo);
        $user->setStatus($status);

        return $user;
    }

    function Depositar(usuario $user)
    {
        echo "Informe o valor que deseja depositar:";
        $deposito = readline();
        $deposito = $deposito + $user->getSaldo();
        $user->setSaldo($deposito);

        return $deposito;
    }

    function Sacar(usuario $user)
    {
        echo "Informe o valor que deseja sacar:";
        $saque = readline();
        $saque = $saque - $user->getSaldo();
        $user->setSaldo($saque);

        return $saque;
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

    function Update(String $endereco,int $idade):usuario{

        $user = new usuario;
        $user->setEndereco($endereco);
        $user->setIdade($idade);
        
        return $user;
    }

    function FindbyCpf(String $cpf)
    {
    }
}
?>