<?php

include "usuario.php";

class cliente extends usuario
{

    private float $saldo;
    private int $status;


    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function setSaldo(float $saldo): self
    {
        $this->saldo = $saldo;

        return $this;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }
}
   
function Sacar(float $saque): cliente
{
    $c = new cliente();
    $saque = $saque - $c->getSaldo();
    $c->setSaldo($saque);

    return $c;
}

function Depositar(float $deposito): cliente{
 
    $c = new cliente();
    $deposito = $deposito + $c->getSaldo();
    $c->setSaldo($deposito);

    return $c;
}

 function cadastrarCliente(String $nome, String $cpf, String $endereco, int $idade,float $saldo = 0,bool $status = true): cliente
    {
        $c = new cliente;
        $c ->setNome($nome);
        $c->setCpf($cpf);
        $c->setEndereco($endereco);
        $c->setIdade($idade);
        $c->setSaldo($saldo);
        $c->setStatus($status);
      
        return $c;
    }




?>