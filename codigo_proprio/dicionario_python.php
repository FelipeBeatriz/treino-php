<?php
// Função para limpar a tela (Windows e Linux)
function limparTela() {
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        system("cls");
    } else {
        system("clear");
    }
}

// Função para pausar
function pausa($mensagem = "Pressione ENTER para continuar...") {
    readline($mensagem);
}

// Criar o array (dicionário)
function inicializar_dicionario($d) {
    if ($d === null) {
        $d = [];
        echo "Dicionário criado com sucesso!\n\n";
        pausa();
    } else {
        echo "Dicionário já foi criado! Use outra opção.\n\n";
        pausa();
    }
    return $d;
}

// Exibir dicionário
function exibir_dicionario($d) {
    if ($d === null) {
        echo "O dicionário ainda não foi criado! Crie ele pelo MENU primeiro.\n";
    } elseif (count($d) === 0) {
        echo "O dicionário foi criado mas está vazio! Preencha dados pelo MENU primeiro.\n";
    } else {
        echo "Conteúdo do dicionário:\n\n";
        foreach ($d as $chave => $valor) {
            echo "\"" . strtoupper($chave) . "\": $valor\n";
        }
    }
    pausa();
}

// Adicionar item
function add_item_dicionario(&$d) {
    if ($d === null) {
        pausa("O dicionário ainda não foi criado! Crie ele pelo MENU primeiro.\n\nPressione ENTER para continuar...");
    } else {
        $chave_nova = readline("Digite o nome da nova chave: ");
        $valor_novo = readline("Digite o valor da nova chave: ");
        $d[$chave_nova] = $valor_novo;
        pausa("\nItem adicionado com sucesso!\n\nPressione ENTER para continuar...");
    }
}

// Alterar valor
function alterar_valor(&$d) {
    if ($d === null) {
        pausa("O dicionário ainda não foi criado! Crie ele pelo MENU primeiro.\n\nPressione ENTER para continuar...");
    } elseif (count($d) === 0) {
        pausa("O dicionário foi criado mas está vazio! Preencha dados pelo MENU primeiro.\n\nPressione ENTER para continuar...");
    } else {
        limparTela();
        $chaves = array_keys($d);
        foreach ($chaves as $indice => $campo) {
            echo "$indice: \"" . strtoupper($campo) . "\"\n";
        }
        $campo_escolhido = (int) readline("\nDigite o ÍNDICE do campo que deseja alterar: ");
        
        if ($campo_escolhido >= 0 && $campo_escolhido < count($chaves)) {
            $novo_valor = readline("Digite o novo valor para '{$chaves[$campo_escolhido]}': ");
            $d[$chaves[$campo_escolhido]] = $novo_valor;
            pausa("Valor alterado com sucesso!\n\nPressione ENTER para continuar...");
        } else {
            pausa("Índice inválido.\n\nPressione ENTER para continuar...");
        }
    }
}

// Remover item
function remover_item(&$d) {
    if ($d === null) {
        pausa("O dicionário ainda não foi criado! Crie ele pelo MENU primeiro.\n\nPressione ENTER para continuar...");
    } elseif (count($d) === 0) {
        pausa("O dicionário foi criado mas está vazio! Preencha dados pelo MENU primeiro.\n\nPressione ENTER para continuar...");
    } else {
        limparTela();
        $chaves = array_keys($d);
        foreach ($chaves as $indice => $campo) {
            echo "$indice: \"" . strtoupper($campo) . "\"\n";
        }
        $campo_escolhido = (int) readline("\nDigite o ÍNDICE do campo que deseja remover: ");

        if ($campo_escolhido >= 0 && $campo_escolhido < count($chaves)) {
            unset($d[$chaves[$campo_escolhido]]);
            pausa("Campo removido com sucesso!\n\nPressione ENTER para continuar...");
        } else {
            pausa("Índice inválido.\n\nPressione ENTER para continuar...");
        }
    }
}

// Limpar dicionário
function limpar_dicionario(&$d) {
    if ($d === null) {
        pausa("O dicionário ainda não foi criado! Crie ele pelo MENU primeiro.\n\nPressione ENTER para continuar...");
    } elseif (count($d) === 0) {
        pausa("O dicionário já está vazio!\n\nPressione ENTER para continuar...");
    } else {
        $d = [];
        pausa("Campos removidos com sucesso!\n\nPressione ENTER para continuar...");
    }
}

// ==========================
// Programa principal
// ==========================
$d = null;
$continuar = true;

while ($continuar) {
    echo "\n============ MENU ============\n";
    echo "0 - Sair\n";
    echo "1 - Criar dicionário\n";
    echo "2 - Exibir o dicionario\n";
    echo "3 - Acrescentar chave\n";
    echo "4 - Alterar valor\n";
    echo "5 - Remover um item\n";
    echo "6 - Remover todos os itens\n";
    echo "==============================\n";

    $opcao = (int) readline("Digite sua opção: ");

    switch ($opcao) {
        case 0:
            $continuar = false;
            break;
        case 1:
            $d = inicializar_dicionario($d);
            break;
        case 2:
            exibir_dicionario($d);
            break;
        case 3:
            add_item_dicionario($d);
            break;
        case 4:
            alterar_valor($d);
            break;
        case 5:
            remover_item($d);
            break;
        case 6:
            limpar_dicionario($d);
            break;
        default:
            echo "Opção inválida.\n";
            pausa();
            break;
    }
    limparTela();
}

pausa("Programa finalizado. Pressione ENTER para continuar...");
?>
