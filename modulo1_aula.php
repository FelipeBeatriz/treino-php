<?php
function limpar() {
   echo "\033[2J\033[1;1H";
}
//      ECHO
// echo "5" . "10" . "\n";
// echo 5 . 10 . "\n";
// echo 5 + 10 . "\n";


//      VARIAVEIS
// $saudacao = "Olá, meu nome é ";
// $nome = "Alice ";
// $continuacao = "e minha idade é ";
// $idade = 17;
// echo $saudacao . $nome . $continuacao . $idade;

// $variavel_do_terminal = $argv[1] ?? "N/A";
// echo "Variável do terminal é igual a: " . $variavel_do_terminal . "\n";

/*
//      LISTA/DICIONARIO/FOREACH
$idades = [
    "João" => 25,
    "Maria" => 30,
    "Pedro" => 22
];

foreach ($idades as $nome => $idade) {
    echo "$nome tem $idade anos.\n";
}

//      MATCH
$numero = 2;

$resultado = match ($numero) {
    1 => "Um - A",
    2 => "Dois - B",
    3 => "Três - C",
    default => "Outro número"
};

echo $resultado . "\n"; // Dois - B

//      SWITCH
$dia = 3;

switch ($dia) {
   case 1:
      $nomeDia = "domingo";
      break;
   case 2:
      $nomeDia = "segunda-feira";
      break;
   case 3:
      $nomeDia = "terça-feira";
      break;
   case 4:
      $nomeDia = "quarta-feira";
      break;
   case 5:
      $nomeDia = "quinta-feira";
      break;
   case 6:
      $nomeDia = "sexta-feira";
      break;
   case 7:
      $nomeDia = "sábado";
      break;
   default:
      $nomeDia = "Dia inválido";
      break;
}

echo "O dia $dia é $nomeDia\n";

//ARRAY
$filme = [
   "Thor: Ragnarok",
   2021,
   7.8,
   "Ação",
];

//ARRAY ASSOCIATIVO OU DICIONÁRIO
$filme = [
   "titulo" => "Thor: Ragnarok",
   "ano" => 2021,
   "nota" => 7.8,
   "genero" => "Ação",
];
var_dump($filme);

//FAZENDO CONVERSÃO DE STRING PRA INT

//OUTRO EXEMPLO
$notaString = "7.8";
$notaFloat = (float) $notaString;
echo "A nota é: " . $notaFloat . "\n";

echo (float) $notaString;

//FOREACH
$idades = [
    25,
    30,
    22
];

foreach ($idades as $idade) {
    echo "{$idade} anos\n";
}

$soma = 0;
foreach ($idades as $idade) {
   $soma += (int) $idade;
   echo "A soma até agora é: {$soma}\n";
}
echo "A soma total é: {$soma}\n";
//COM ARRAYSUM
echo "A soma total é: " . array_sum($idades) . "\n";

*/


/*
//SEM DUPLICAR
$array = [1, 1, 1, 1, 1, 2, 2, 3, 4, 4, 5];
$semDuplicatas = array_unique($array);
print_r($semDuplicatas);

//NOTAS
$notas = [10, 5.5, 3.8, 7.5, 6, 6.1, 5.9];

foreach ($notas as $nota) {
    $resultado = $nota > 6 ? "aprovado" : "reprovado";

    echo "Esse(a) aluno(a) foi $resultado com a nota $nota \n";
}

$familiares = ['Alice', 'Bob', 'Charlie'];
$familiares[] = 'Davi';
$familiares[] = 'Jorge';

print_r($familiares);
*/

/*
********************
Titular: Vinicius Dias
Saldo atual: R$ 1000
*********************
1. Consultar saldo atual
2. Sacar valor
3. Depositar valor
4. Sair
*/

$saldo = 1000;
$continuar = true;
while ($continuar) {
   limpar();
   echo "***********************\n";
   echo "Titular: Felipe Beatriz\n";
   echo "Saldo atual: " . "R$ " . $saldo . "\n";
   echo "***********************\n";
   echo "1. Consultar saldo atual\n";
   echo "2. Sacar valor\n";
   echo "3. Depositar valor\n";
   echo "4. Sair\n";

   $escolha = (int) readline("Digite sua escolha: ");
   switch ($escolha) {
      case 1: {
         limpar();
         echo "Saldo atual: " . "R$ " . $saldo . "\n";
         readline("\nPressione enter para continuar...");
         break;
      }

      case 2: {
         limpar();
         echo "Saldo atual: R$ " . $saldo . "\n";
         $valor_saque = (float) readline("Digite o valor a ser sacado: ");

         if ($valor_saque <= 0) {
            echo "Você não pode sacar esse valor!\n";
            readline("\nDigite enter para continuar...");
         } 
         else if ($valor_saque > $saldo) {
            echo "Você não pode sacar um valor maior que seu saldo!\n";
            readline("\nDigite enter para continuar...");
         } 
         else {
            $saldo -= $valor_saque;
            echo "Saque realizado! Novo saldo: R$ " . $saldo . "\n";
            readline("\nDigite enter para continuar...");
         }
         break;
      }

      case 3: {
         limpar();
         echo "Saldo atual: R$ " . $saldo . "\n";
         $valor_deposito = (float) readline("Digite o valor a ser depositado: ");
         if ($valor_deposito > 0) {
            $saldo += $valor_deposito;
            echo "Valor depositado! Novo saldo: R$ " . $saldo . "\n";
         } else {
            echo "\nVocê não pode depositar esse valor!";
         }
         readline("\nDigite enter para continuar...");
         break;
      }

      case 4: {
         limpar();
         $continuar = false;
         echo "Terminando o programa.";
         break;
      }
   }
}