<?php
// 1 - Criar um algoritmo para um elevador, sendo obrigatório ter no mínimo 5 andares, mas deve continuar funcionando só alterar a quantidade de andares.

// 2 - Assim como o exercicio anteriror, porem com dois elevadores sendo que um sempre retorna ao térreo quando ocioso.

$Andares = [1, 2, 3, 4, 5];
$LocalAtualElevador = rand(1, 5);
$LocalDestino;
$LocalSolicitante;
$i = 1;

function SolicitanteSubir($LocalAtualElevador, $LocalSolicitante)
{
    $trigger = 1;
    while ($trigger == 1) {

        if ($LocalAtualElevador == $LocalSolicitante) {
            echo "Elevador esta ao $LocalSolicitante andar! \n";
            echo "Abriu porta \n";
            echo "Fechou porta  \n";
            $trigger = 2;
            return $LocalAtualElevador;
        } else {
            echo "Elevador es no $LocalAtualElevador indo para o $LocalSolicitante Andar\n";
            $LocalAtualElevador++;
        }
    }
}

function SolicitanteDesce($LocalSolicitante, $LocalAtualElevador)
{
    $trigger = 1;
    while ($trigger == 1) {

        if ($LocalSolicitante == $LocalAtualElevador) {
            echo "Elevador esta ao $LocalSolicitante andar! \n";
            echo "Abrir porta \n";
            echo "Fecho porta  \n";
            $LocalAtualElevador = $LocalSolicitante;
            $trigger = 2;
            return $LocalAtualElevador;
        } else {
            echo "Elevador Esta no $LocalAtualElevador indo para o $LocalSolicitante Andar\n";
            $LocalAtualElevador--;
        }
    }
}

function DestinoSubir($LocalDestino, $LocalAtualElevador)
{
    $trigger = 1;
    while ($trigger == 1) {
        if ($LocalDestino == $LocalAtualElevador) {
            echo "Você esta no $LocalDestino \n";
            $trigger = 2;
            return $LocalAtualElevador;
        } else {
            echo "Elevador esta no $LocalAtualElevador indo para o  $LocalDestino Andar\n";
            $LocalAtualElevador--;
        }
    }
}

function DestinoDesce($LocalDestino, $LocalAtualElevador)
{
    $trigger = 1;
    while ($trigger == 1) {
        if ($LocalDestino == $LocalAtualElevador) {
            echo "Você esta no $LocalDestino \n";
            $trigger = 2;
            return $LocalAtualElevador;
        } else {
            echo "Elevador esta no $LocalAtualElevador  indo para o $LocalDestino Andar\n";
            $LocalAtualElevador++;
        }
    }
}

while (true) {
    while (true) {
        $LocalSolicitante = readline("Qual andar você esta? ");
        if ($LocalSolicitante < 6) {
            break;
        } else {
            echo "Elevador só possue apenas 5 andares! \n";
        }
    }


    if ($LocalAtualElevador > $LocalSolicitante) {
        $LocalAtualElevador = SolicitanteDesce($LocalSolicitante, $LocalAtualElevador);
    } else {
        $LocalAtualElevador = SolicitanteSubir($LocalAtualElevador, $LocalSolicitante);
    }

    while (true) {
        $LocalDestino = readline("Qual andar você deseja ir?");
        if ($LocalDestino < 6) {
            break;
        } else {
            echo "Elevador só possue apenas 5 andares! \n";
        }
    }

    if ($LocalDestino > $LocalAtualElevador) {
        $LocalAtualElevador = DestinoDesce($LocalDestino, $LocalAtualElevador);
    } else {
        $LocalAtualElevador = DestinoSubir($LocalDestino, $LocalAtualElevador);
    }
}
