<?php

// require_once("modelos/Pedido.php");
require_once("modelos/Prato.php");
require_once("modelos/Bebida.php");
require_once("modelos/Sobremesa.php");

// function listarMenu(array $menu) {

//     echo "ITENS CADASTRADOS À SEGUIR: \n";

//     $i = 1;

//     foreach($menu as $m => $menu) {

//         echo $i . "- " . $m;
//         $i++;

//     }

//     if (count($menu) > 0) {

//         foreach ($menu as  $p)

//             printf($m);

//     } else

//         echo "Nenhum prato.\n";

// }

// $menu = array();

$m = array();

function listarMenu($menu) {

    // print_r($menu);

    if (count($menu) > 0) {
        foreach ($menu as $m)
            print($m);
    } else
        echo "Nenhum prato.\n";

}

/*function listarPedeido($pedidos)
{
   ;
}*/

$estrogonofe = new Prato;
$estrogonofe->setCalorias(145);
$estrogonofe->setCodItem(1);
$estrogonofe->setNomeItem("Strogonoff de Frango");
$estrogonofe->setValorItem(31.99);

array_push($m, $estrogonofe);

$risoto = new Prato;
$risoto->setCalorias(350);
$risoto->setCodItem(2);
$risoto->setNomeItem("Risoto de Camarão");
$risoto->setValorItem(45.50);//

array_push($m, $risoto);

$macarrao = new Prato;
$macarrao->setCalorias(228);
$macarrao->setCodItem(3);
$macarrao->setNomeItem("Macarrão ao Molho de Queijos");
$macarrao->setValorItem(37.90);

array_push($m, $macarrao);

$bifeBatata = new Prato;
$bifeBatata->setCalorias(145);
$bifeBatata->setCodItem(4);
$bifeBatata->setNomeItem("Bife com Batatas");
$bifeBatata->setValorItem(25.99);

array_push($m, $bifeBatata);


//--><--//

$pudim = new Sobremesa;
$pudim->setValorItem(15.90);
$pudim->setLactoseFree(false);
$pudim->setGlutenFree(true);
$pudim->setCodItem(5);
$pudim->setNomeItem("Pudim de Leite");

array_push($m, $pudim);

$saladaFruta = new Sobremesa;
$saladaFruta->setValorItem(10.90);
$saladaFruta->setLactoseFree(true);
$saladaFruta->setGlutenFree(true);
$saladaFruta->setCodItem(6);
$saladaFruta->setNomeItem("Salada de Frutas");

array_push($m, $saladaFruta);

$bolo = new Sobremesa;
$bolo->setValorItem(12.90);
$bolo->setLactoseFree(true);
$bolo->setGlutenFree(true);
$bolo->setCodItem(7);
$bolo->setNomeItem("Bolo de Chocolate");

array_push($m, $bolo);

$torta = new Sobremesa;
$torta->setValorItem(15.90);
$torta->setLactoseFree(true);
$torta->setGlutenFree(false);
$torta->setCodItem(8);
$torta->setNomeItem("Torta de Pistache");

array_push($m, $torta);

//--><--//

$coca = new Bebida;
$coca->setAlcoolico(false);
$coca->setCodItem(9);
$coca->setNomeItem("Coca-Cola");
$coca->setValorItem(5.50);

array_push($m, $coca);

$cocaZero = new Bebida;
$cocaZero->setAlcoolico(false);
$cocaZero->setCodItem(10);
$cocaZero->setNomeItem("Coca-Cola Sem Açúcar");
$cocaZero->setValorItem(5.50);

array_push($m, $cocaZero);

$cha = new Bebida;
$cha->setAlcoolico(false);
$cha->setCodItem(11);
$cha->setNomeItem("Chá Gelado Sabor de Limão");
$cha->setValorItem(6.35);

array_push($m, $cha);

$cerveja = new Bebida;
$cerveja->setAlcoolico(true);
$cerveja->setCodItem(12);
$cerveja->setNomeItem("Cerveja Heineken");
$cerveja->setValorItem(9.90);

array_push($m, $cerveja);

$opcao = 0;

//Menu//

//print_r($m);
//exit;

do {

    echo ("\n------------------ MENU -------------------\n");
    echo ("\n-----------------------------------------------\n");
    echo ("\n---------- 1 - Adicionar - Item ------------\n");
    echo ("\n---------- 2 - Listar - Itens ------------\n");
    echo ("\n---------- 3 - Remover - Item ------------\n");
    echo ("\n---------- 0 - Fechar - Menu ------------\n");
    echo ("\n-------------------------------------------\n");

    $opcao = readline("\nInforme uma opção: \n");

    switch ($opcao) {

        case 1:

            //adicionar
            listarMenu($m);

            $tipoItem = readline("\nInforme o novo tipo de item que você deseja cadastrar no menu: \n");

            if($tipoItem == "Prato") {

                 echo "\nDigite as informações necessárias para cadastrar um novo Prato: \n";

                 $novoPrato = new Prato();
                 $novoPrato->setCalorias(readline("Informe a quantidade de energia calórica que esse prato possui: \n"));
                 $novoPrato->setCodItem(readline("Informe o código de item desse novo prato: \n"));
                 $novoPrato->setNomeItem(readline("Informe o nome desse novo prato: \n"));
                 $novoPrato->setValorItem(readline("Informe o preço desse novo prato: \n"));

                 array_push($m, $novoPrato);

             } elseif($tipoItem == "Sobremesa") {

                 echo "\nDigite as informações necessárias para cadastrar uma nova Sobremesa: \n";

                 $novaSobremesa = new Sobremesa();
                 $novaSobremesa->setCodItem(readline("Informe o código de item dessa nova sobremesa: \n"));
                 $novaSobremesa->setGlutenFree(readline("Informe se essa nova sobremesa contém glúten: \n"));
                 $novaSobremesa->setLactoseFree(readline("Informe se essa nova sobremesa contém lactose: \n"));
                 $novaSobremesa->setNomeItem(readline("Informe o nome dessa nova sobremesa: \n"));
                 $novaSobremesa->setValorItem(readline("Informe o preço dessa nova sobremesa: \n"));

                 array_push($m, $novaSobremesa);

             } else {

                 echo "\nDigite as informações necessárias para cadastrar uma nova Bebida: \n";

                 $novaBebida = new Bebida();
                 $novaBebida->setAlcoolico(readline("Informe se essa nova bebida contém algum teor alcoólico ou não: \n"));
                 $novaBebida->setCodItem(readline("Informe o código de item dessa nova bebida: \n"));
                 $novaBebida->setNomeItem(readline("Informe o nome dessa nova bebida: \n"));
                 $novaBebida->setValorItem(readline("Informe o preço dessa nova bebida: \n"));

                 array_push($menu, $novaBebida);

             }

            break;

        case 2:

            //print_r($m);
//exit;

            listarMenu($m);

            break;

        case 3:

            listarMenu($m);

            $idx = readline("Informe o índice do pedido a ser excluído: ");

            if($idx > 0 && $idx <= count($m)) {

                array_splice($m, $idx-1, 1);

            } else {

                echo "Índice informado é inválido.\n";

                break;
            
            }

            break;

        case 0:

            echo "Pedido encerrado!\n";

            // $opcao = 0;

            break;

        default:

            echo "Opção Invalida";

            break;

    }

} while ($opcao != 0);
