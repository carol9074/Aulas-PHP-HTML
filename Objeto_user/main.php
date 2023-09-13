<?php 

include "usuario.php";

$Cadastro = new usuario();
$Cliente = array();
$i = 0;

$op = 0;
while ($op != 7){

    echo " 1-CADASTRAR\n 2-DEPOSITAR\n 3-SACAR\n 4-ATIVAR OU DESATIVA CONTA\n 5-ATUALIZAR CONTA\n 6-DELETAR CONTA\n 7-SAIR\n";
    $op = readline();

    switch($op){
        case 1:{

            echo "Bem-vindo ao casdastro do cliente!\n";
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
             
        $Cliente[$i] = $Cadastro->Cadastrar($nome,$cpf,$endereco,$idade,$saldo);
        $i++;
        var_dump($Cliente);
               
        break;
        }

        case 2:{
          $Cliente[$i] = $Cadastro->Depositar($user);
        
            break;
        }

        case 3:{

            $Cliente[$i]->Sacar($user);

            break;
        }

        case 4:{

            $Cliente[$i]->ativaConta($user);

            break;
        }
    }

}










?>