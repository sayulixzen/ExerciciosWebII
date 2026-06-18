<?php

$nome = $_POST['usuario_nome'];

echo "<h1>Olá, $nome! Os dados foram conectados com sucesso.</h1>";
?>

    // Exercício 1: Soma
    echo "<div class='exercicio'>";
    echo "<h3>1. Soma</h3>";
    $numA = 12;
    $numB = 8;
    $soma = $numA + $numB;
    echo "<p>Valores: <code>$numA</code> e <code>$numB</code></p>";
    echo "<div class='resultado'>A soma é: <strong>$soma</strong></div>";
    echo "</div>";

    // Exercício 2: Média
    echo "<div class='exercicio'>";
    echo "<h3>2. Média</h3>";
    $nota1 = 7.5;
    $nota2 = 8.0;
    $nota3 = 6.5;
    $media = ($nota1 + $nota2 + $nota3) / 3;
    echo "<p>Notas: <code>$nota1</code>, <code>$nota2</code>, <code>$nota3</code></p>";
    echo "<div class='resultado'>A média aritmética é: <strong>" . number_format($media, 1) . "</strong></div>";
    echo "</div>";

    // Exercício 3: Metros para centímetros
    echo "<div class='exercicio'>";
    echo "<h3>3. Metros para Centímetros</h3>";
    $metros = 2.5;
    $centimetros = $metros * 100;
    echo "<p>Valor em metros: <code>{$metros}m</code></p>";
    echo "<div class='resultado'>O correspondente em centímetros é: <strong>{$centimetros}cm</strong></div>";
    echo "</div>";

    // Exercício 4: Área do retângulo
    echo "<div class='exercicio'>";
    echo "<h3>4. Área do Retângulo</h3>";
    $base = 10;
    $altura = 5;
    $area = $base * $altura;
    echo "<p>Base: <code>$base</code> | Altura: <code>$altura</code></p>";
    echo "<div class='resultado'>A área do retângulo é: <strong>$area</strong></div>";
    echo "</div>";

    // Exercício 5: Positivo ou negativo
    echo "<div class='exercicio'>";
    echo "<h3>5. Positivo ou Negativo</h3>";
    $valorCheck = -4;
    echo "<p>Valor analisado: <code>$valorCheck</code></p>";
    if ($valorCheck > 0) {
        $msgPosNeg = "Positivo";
    } elseif ($valorCheck < 0) {
        $msgPosNeg = "Negativo";
    } else {
        $msgPosNeg = "Zero";
    }
    echo "<div class='resultado'>O número é: <strong>$msgPosNeg</strong></div>";
    echo "</div>";

    // Exercício 6: Maioridade
    echo "<div class='exercicio'>";
    echo "<h3>6. Maioridade</h3>";
    $idade = 19;
    echo "<p>Idade: <code>$idade anos</code></p>";
    if ($idade >= 18) {
        $msgIdade = "Maior de idade";
    } else {
        $msgIdade = "Menor de idade";
    }
    echo "<div class='resultado'>Esta pessoa é: <strong>$msgIdade</strong></div>";
    echo "</div>";

    // Exercício 7: Aprovação
    echo "<div class='exercicio'>";
    echo "<h3>7. Aprovação</h3>";
    $mediaFinal = 6.5;
    echo "<p>Média Final: <code>$mediaFinal</code></p>";
    if ($mediaFinal >= 6.0) {
        $statusAprovacao = "Aprovado";
    } else {
        $statusAprovacao = "Reprovado";
    }
    echo "<div class='resultado'>Status do Aluno: <strong>$statusAprovacao</strong></div>";
    echo "</div>";

    // Exercício 8: Maior de Dois
    echo "<div class='exercicio'>";
    echo "<h3>8. Maior de Dois</h3>";
    $n1 = 45;
    $n2 = 23;
    echo "<p>Números: <code>$n1</code> e <code>$n2</code></p>";
    if ($n1 > $n2) {
        $maior = $n1;
    } else {
        $maior = $n2;
    }
    echo "<div class='resultado'>O maior número é: <strong>$maior</strong></div>";
    echo "</div>";

    // Exercício 9: Dia da semana
    echo "<div class='exercicio'>";
    echo "<h3>9. Dia da Semana</h3>";
    $diaNum = 3;
    echo "<p>Número escolhido: <code>$diaNum</code></p>";
    switch ($diaNum) {
        case 1: $diaNome = "Domingo"; break;
        case 2: $diaNome = "Segunda-feira"; break;
        case 3: $diaNome = "Terça-feira"; break;
        case 4: $diaNome = "Quarta-feira"; break;
        case 5: $diaNome = "Quinta-feira"; break;
        case 6: $diaNome = "Sexta-feira"; break;
        case 7: $diaNome = "Sábado"; break;
        default: $diaNome = "Dia inválido";
    }
    echo "<div class='resultado'>Dia correspondente: <strong>$diaNome</strong></div>";
    echo "</div>";

    // Exercício 10: Vogal ou consoante
    echo "<div class='exercicio'>";
    echo "<h3>10. Vogal ou Consoante</h3>";
    $letra = "E";
    echo "<p>Letra informada: <code>$letra</code></p>";
    $letraMinuscula = strtolower($letra);
    switch ($letraMinuscula) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
            $tipoLetra = "Vogal";
            break;
        default:
            $tipoLetra = "Consoante";
    }
    echo "<div class='resultado'>A letra digitada é uma: <strong>$tipoLetra</strong></div>";
    echo "</div>";

    // Exercício 11: Status do pedido
    echo "<div class='exercicio'>";
    echo "<h3>11. Status do Pedido</h3>";
    $statusPedido = "em_preparacao";
    echo "<p>Chave do Status: <code>$statusPedido</code></p>";
    switch ($statusPedido) {
        case "aguardando": $msgStatus = "Seu pedido foi recebido e está aguardando confirmação."; break;
        case "em_preparacao": $msgStatus = "Oba! O chef já está preparando o seu pedido."; break;
        case "enviado": $msgStatus = "Boa notícia: Seu pedido já saiu para a entrega!"; break;
        case "concluido": $msgStatus = "Pedido entregue com sucesso. Bom apetite!"; break;
        default: $msgStatus = "Status desconhecido.";
    }
    echo "<div class='resultado'>Mensagem: <strong>$msgStatus</strong></div>";
    echo "</div>";

    // Exercício 12: Contagem 1-10
    echo "<div class='exercicio'>";
    echo "<h3>12. Contagem 1-10</h3>";
    echo "<div class='resultado'>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<strong>$i</strong> ";
    }
    echo "</div>";
    echo "</div>";

    // Exercício 13: Pares de 1 a 20
    echo "<div class='exercicio'>";
    echo "<h3>13. Pares de 1 a 20</h3>";
    echo "<div class='resultado'>";
    for ($i = 2; $i <= 20; $i += 2) {
        echo "<strong>$i</strong> ";
    }
    echo "</div>";
    echo "</div>";

    // Exercício 14: Tabuada
    echo "<div class='exercicio'>";
    echo "<h3>14. Tabuada</h3>";
    $tabuadaDo = 7;
    echo "<p>Tabuada do número: <code>$tabuadaDo</code></p>";
    echo "<div class='resultado'>";
    for ($i = 1; $i <= 10; $i++) {
        $resultadoTabuada = $tabuadaDo * $i;
        echo "$tabuadaDo x $i = <strong>$resultadoTabuada</strong><br>";
    }
    echo "</div>";
    echo "</div>";

    // Exercício 15: Contagem regressiva
    echo "<div class='exercicio'>";
    echo "<h3>15. Contagem Regressiva</h3>";
    echo "<div class='resultado'>";
    $contadorRegressivo = 10;
    while ($contadorRegressivo >= 1) {
        echo "<strong>$contadorRegressivo</strong> ";
        $contadorRegressivo--;
    }
    echo "</div>";
    echo "</div>";

    // Exercício 16: Soma até 100
    echo "<div class='exercicio'>";
    echo "<h3>16. Soma até 100</h3>";
    $somaTotal = 0;
    $numAtual = 1;
    while ($numAtual <= 100) {
        $somaTotal += $numAtual;
        $numAtual++;
    }
    echo "<div class='resultado'>A soma de todos os números de 1 até 100 é: <strong>$somaTotal</strong></div>";
    echo "</div>";

    // Exercício 17: Sorteio simples
    echo "<div class='exercicio'>";
    echo "<h3>17. Sorteio Simples (Do-While)</h3>";
    $tentativas = 0;
    do {
        $sorteado = rand(1, 10);
        $tentativas++;
    } while ($sorteado != 5);
    echo "<div class='resultado'>O número 5 foi sorteado após <strong>$tentativas</strong> tentativas!</div>";
    echo "</div>";

    // Exercício 18: Lista de frutas
    echo "<div class='exercicio'>";
    echo "<h3>18. Lista de Frutas (Foreach)</h3>";
    $frutas = ["Morango", "Banana", "Abacaxi", "Uva", "Manga"];
    echo "<div class='resultado'>";
    echo "<ul>";
    foreach ($frutas as $fruta) {
        echo "<li>$fruta</li>";
    }
    echo "</ul>";
    echo "</div>";
    echo "</div>";

    // Exercício 19: Soma de array
    echo "<div class='exercicio'>";
    echo "<h3>19. Soma de Array</h3>";
    $meusNumeros = [10, 20, 30, 40, 50];
    $somaItens = 0;
    foreach ($meusNumeros as $n) {
        $somaItens += $n;
    }
    echo "<p>Valores no array: <code>" . implode(", ", $meusNumeros) . "</code></p>";
    echo "<div class='resultado'>A soma total dos números é: <strong>$somaItens</strong></div>";
    echo "</div>";

    // Exercício 20: Array associativo
    echo "<div class='exercicio'>";
    echo "<h3>20. Array Associativo</h3>";
    $aluno = [
        "nome" => "Carlos Silva",
        "idade" => 21,
        "curso" => "Análise e Desenvolvimento de Sistemas"
    ];
    echo "<div class='resultado'>";
    echo "Nome: <strong>{$aluno['nome']}</strong><br>";
    echo "Idade: <strong>{$aluno['idade']} anos</strong><br>";
    echo "Curso: <strong>{$aluno['curso']}</strong>";
    echo "</div>";
    echo "</div>";
    ?>