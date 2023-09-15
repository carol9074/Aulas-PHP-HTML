<?php

include "usuario.php";
include "cliente.php";
include "funcionario.php";

$Cadastro = new usuario();
$Cliente = array();
$funcionario = array();
$i = 0;
$op = 0;
$op1 = 0;

while ($op != 7) {

    echo " 1-CADASTRAR\n 2-DEPOSITAR\n 3-SACAR\n 4-ATIVAR OU DESATIVA CONTA\n 5-ATUALIZAR CONTA\n 6-DELETAR CONTA\n 7-SAIR\n";
    $op = readline();

    switch ($op) {
        case 1: {

                while ($op1 != 2) {

                    echo " 1-CADASTRO CLIENTE\n 2-CADASTRO FUNCIONÁRIO\n";
                    $op1 = readline();

                    if ($op1 == 1) {

                        echo "Informe seu nome completo:";
                        $nome = readline();

                        echo "Informe seu CPF:";
                        $cpf = readline();

                        echo "Informe sua idade:";
                        $idade = readline();

                        echo "Informe seu endereço:";
                        $endereco = readline();

                        echo "Informe seu saldo inicial:";
                        $saldo = readline();

                        $Cliente[$i] = $Cadastro->cadastrarCliente();
                        $i++;
                        var_dump($Cliente);

                        $op1 = 1;
                    } else {

                        echo "Informe seu nome completo:";
                        $nome = readline();

                        echo "Informe seu CPF:";
                        $cpf = readline();

                        echo "Informe sua idade:";
                        $idade = readline();

                        echo "Informe seu endereço:";
                        $endereco = readline();

                        echo "Informe seu salário:";
                        $salalario = readline();

                        $funcionario[$i] = $Cadastro->Cadastrar($nome, $cpf, $endereco, $idade);
                        $i++;
                        var_dump($funcionario);

                        $op1 = 2;
                    }
                }


                break;
            }

        case 2: {

            echo "Informe o valor que deseja depositar:";
            $deposito;

            $Cliente[$i] = Depositar($deposito);

                break;
            }

        case 3: {

                $Cliente[$i]->Sacar($user);

                break;
            }

        case 4: {

                $Cliente[$i]->ativaConta($user);

                break;
            }
    }
}
