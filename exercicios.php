<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados dos Exercícios de PHP</title>

    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            color: #212529;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            overflow: hidden;
        }
        h1 {
            background-color: #007bff;
            color: white;
            padding: 20px;
            margin: 0;
            text-align: center;
        }
        .exercicio {
            padding: 20px;
            border-bottom: 1px solid #dee2e6;
        }
        .exercicio:last-child {
            border-bottom: none;
        }
        .exercicio h3 {
            margin-top: 0;
            color: #0056b3;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }
        .resultado {
            background-color: #e9f5ff;
            border: 1px solid #b3d7ff;
            padding: 10px 15px;
            border-radius: 4px;
            margin-top: 10px;
        }
        .resultado strong {
            color: #004a99;
        }
        code {
            background-color: #e8e8e8;
            padding: 2px 5px;
            border-radius: 3px;
        }
        ul, ol {
            padding-left: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Resultados dos Exercícios de PHP</h1>

        <?php
       
        // 1. Soma
        echo "<div class='exercicio'>";
        echo "<h3>1. Soma</h3>";
        $n1 = 12;
        $n2 = 8;
        $soma = $n1 + $n2;
        echo "<p>Números: <code>$n1</code> e <code>$n2</code></p>";
        echo "<div class='resultado'>A soma é: <strong>$soma</strong></div>";
        echo "</div>";

        // 2. Média
        echo "<div class='exercicio'>";
        echo "<h3>2. Média</h3>";
        $nota1 = 8.5;
        $nota2 = 7.0;
        $nota3 = 9.0;
        $media = ($nota1 + $nota2 + $nota3) / 3;
        echo "<p>Notas: <code>$nota1</code>, <code>$nota2</code>, <code>$nota3</code></p>";
        echo "<div class='resultado'>A média aritmética é: <strong>" . round($media, 2) . "</strong></div>";
        echo "</div>";

        // 3. Metros para Centímetros
        echo "<div class='exercicio'>";
        echo "<h3>3. Metros para Centímetros</h3>";
        $metros = 2.5;
        $centimetros = $metros * 100;
        echo "<p>Valor em metros: <code>{$metros}m</code></p>";
        echo "<div class='resultado'>O correspondente em centímetros é: <strong>{$centimetros}cm</strong></div>";
        echo "</div>";

        // 4. Área do Retângulo
        echo "<div class='exercicio'>";
        echo "<h3>4. Área do Retângulo</h3>";
        $base = 10;
        $altura = 5;
        $area = $base * $altura;
        echo "<p>Base: <code>$base</code> | Altura: <code>$altura</code></p>";
        echo "<div class='resultado'>A área do retângulo é: <strong>$area</strong></div>";
        echo "</div>";

        // 5. Positivo ou Negativo
        echo "<div class='exercicio'>";
        echo "<h3>5. Positivo, Negativo ou Zero</h3>";
        $numValor = -4;
        echo "<p>Número: <code>$numValor</code></p>";
        if ($numValor > 0) {
            $statusNum = "Positivo";
        } elseif ($numValor < 0) {
            $statusNum = "Negativo";
        } else {
            $statusNum = "Zero";
        }
        echo "<div class='resultado'>O número é: <strong>$statusNum</strong></div>";
        echo "</div>";

        // 6. Maioridade
        echo "<div class='exercicio'>";
        echo "<h3>6. Maioridade</h3>";
        $idade = 20;
        echo "<p>Idade: <code>$idade anos</code></p>";
        $maioridade = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
        echo "<div class='resultado'>A pessoa é: <strong>$maioridade</strong></div>";
        echo "</div>";

        // 7. Aprovação
        echo "<div class='exercicio'>";
        echo "<h3>7. Aprovação</h3>";
        $mediaFinal = 6.5;
        echo "<p>Média Final: <code>$mediaFinal</code></p>";
        $situacao = ($mediaFinal >= 6.0) ? "Aprovado" : "Reprovado";
        echo "<div class='resultado'>Status do Aluno: <strong>$situacao</strong></div>";
        echo "</div>";

        // 8. Maior de Dois
        echo "<div class='exercicio'>";
        echo "<h3>8. Maior de Dois</h3>";
        $a = 15;
        $b = 27;
        echo "<p>Valores: <code>$a</code> e <code>$b</code></p>";
        $maior = ($a > $b) ? $a : $b;
        echo "<div class='resultado'>O maior número é: <strong>$maior</strong></div>";
        echo "</div>";

        // 9. Dia da Semana
        echo "<div class='exercicio'>";
        echo "<h3>9. Dia da Semana</h3>";
        $diaNum = 3;
        echo "<p>Número do dia: <code>$diaNum</code></p>";
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

        // 10. Vogal ou Consoante
        echo "<div class='exercicio'>";
        echo "<h3>10. Vogal ou Consoante</h3>";
        $letra = "E";
        echo "<p>Letra definida: <code>$letra</code></p>";
        $letraMinuscula = strtolower($letra);
        switch ($letraMinuscula) {
            case 'a': case 'e': case 'i': case 'o': case 'u':
                $tipoLetra = "Vogal";
                break;
            default:
                $tipoLetra = "Consoante";
        }
        echo "<div class='resultado'>A letra é uma: <strong>$tipoLetra</strong></div>";
        echo "</div>";

        // 11. Status do Pedido
        echo "<div class='exercicio'>";
        echo "<h3>11. Status do Pedido</h3>";
        $statusPedido = "em_preparacao";
        echo "<p>Status interno: <code>$statusPedido</code></p>";
        switch ($statusPedido) {
            case "aguardando": $msgStatus = "Seu pagamento foi recebido. Aguardando separação."; break;
            case "em_preparacao": $msgStatus = "Opa! Seu pedido já está sendo embalado com todo carinho."; break;
            case "enviado": $msgStatus = "Boas notícias! Seu pedido já está com a transportadora."; break;
            case "concluido": $msgStatus = "Entregue! Esperamos que goste da sua compra."; break;
            default: $msgStatus = "Status desconhecido. Entre em contato com o suporte.";
        }
        echo "<div class='resultado'>Mensagem: <strong>$msgStatus</strong></div>";
        echo "</div>";

        // 12. Contagem 1-10
        echo "<div class='exercicio'>";
        echo "<h3>12. Contagem 1-10 (For)</h3>";
        echo "<div class='resultado'>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<strong>$i</strong> " . ($i < 10 ? "| " : "");
        }
        echo "</div>";
        echo "</div>";

        // 13. Pares de 1 a 20
        echo "<div class='exercicio'>";
        echo "<h3>13. Pares de 1 a 20 (For)</h3>";
        echo "<div class='resultado'>";
        for ($i = 2; $i <= 20; $i += 2) {
            echo "<strong>$i</strong> " . ($i < 20 ? "- " : "");
        }
        echo "</div>";
        echo "</div>";

        // 14. Tabuada
        echo "<div class='exercicio'>";
        echo "<h3>14. Tabuada (For)</h3>";
        $tabuadaNum = 7;
        echo "<p>Tabuada do: <code>$tabuadaNum</code></p>";
        echo "<div class='resultado'>";
        for ($i = 1; $i <= 10; $i++) {
            $resTabuada = $tabuadaNum * $i;
            echo "$tabuadaNum x $i = <strong>$resTabuada</strong><br>";
        }
        echo "</div>";
        echo "</div>";

        // 15. Contagem Regressiva
        echo "<div class='exercicio'>";
        echo "<h3>15. Contagem Regressiva (While)</h3>";
        echo "<div class='resultado'>";
        $contadorRegressivo = 10;
        while ($contadorRegressivo >= 1) {
            echo "<strong>$contadorRegressivo</strong> " . ($contadorRegressivo > 1 ? "» " : "");
            $contadorRegressivo--;
        }
        echo "</div>";
        echo "</div>";

        // 16. Soma até 100
        echo "<div class='exercicio'>";
        echo "<h3>16. Soma de 1 até 100 (While)</h3>";
        $somaTotal = 0;
        $atual = 1;
        while ($atual <= 100) {
            $somaTotal += $atual;
            $atual++;
        }
        echo "<div class='resultado'>A soma de todos os números de 1 a 100 é: <strong>$somaTotal</strong></div>";
        echo "</div>";

        // 17. Sorteio Simples
        echo "<div class='exercicio'>";
        echo "<h3>17. Sorteio Simples (Do While)</h3>";
        $tentativas = 0;
        echo "<p>Sorteando: </p>";
        echo "<div class='resultado'>";
        do {
            $sorteado = rand(1, 10);
            $tentativas++;
            echo "Tentativa $tentativas: Sorteou [<strong>$sorteado</strong>]<br>";
        } while ($sorteado != 5);
        echo "<br>Foram necessárias <strong>$tentativas</strong> tentativas para sortear o número 5!";
        echo "</div>";
        echo "</div>";

        // 18. Lista de Frutas
        echo "<div class='exercicio'>";
        echo "<h3>18. Lista de Frutas (Foreach)</h3>";
        $frutas = ["Morango", "Manga", "Uva", "Melancia", "Maracujá"];
        echo "<div class='resultado'>";
        echo "<ul>";
        foreach ($frutas as $fruta) {
            echo "<li>$fruta</li>";
        }
        echo "</ul>";
        echo "</div>";
        echo "</div>";

        // 19. Soma de Array
        echo "<div class='exercicio'>";
        echo "<h3>19. Soma de Array</h3>";
        $numerosArray = [10, 25, 5, 40, 20];
        $somaArray = array_sum($numerosArray);
        echo "<p>Elementos do array: <code>[" . implode(", ", $numerosArray) . "]</code></p>";
        echo "<div class='resultado'>A soma total dos números é: <strong>$somaArray</strong></div>";
        echo "</div>";

        // 20. Array Associativo
        echo "<div class='exercicio'>";
        echo "<h3>20. Array Associativo (Aluno)</h3>";
        $aluno = [
            "nome" => "Kauã",
            "idade" => 20,
            "curso" => "Ciência da Computação"
        ];
        echo "<div class='resultado'>";
        echo "Nome: <strong>{$aluno['nome']}</strong><br>";
        echo "Idade: <strong>{$aluno['idade']} anos</strong><br>";
        echo "Curso: <strong>{$aluno['curso']}</strong>";
        echo "</div>";
        echo "</div>";
        ?>
    </div>
</body>
</html>