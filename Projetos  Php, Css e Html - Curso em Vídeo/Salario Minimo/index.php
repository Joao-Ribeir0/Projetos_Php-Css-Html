<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $salario = isset($_GET['salario']) ? (int) $_GET['salario'] : 0;
    ?>

    <main>
        <h1>Informe seu Salário</h1>
        <form action=" <?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" id="salario" name="salario" placeholder="Digite aqui seu salario em reais" value ="<?php echo $salario?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
   
    <section>

        <h2>Resultado</h2>

        <?php 
            
            $salario_minimo = (int) 1518;
            
            if ($salario >= $salario_minimo){
                $qtd_salarios = intdiv($salario, $salario_minimo);
                $sobra = $salario % $salario_minimo;

                echo  "<p>Quem recebe R$ " . number_format($salario, 2, ",",".") . " recebe $qtd_salarios salário(s) mínimo(s) + R$ " . number_format($sobra, 2, ",", ".") . ".</p>";;
            }
                elseif ($salario < $salario_minimo){
                    echo "<p>Quem recebe um salário de R$ " . number_format($salario, 2, ",", ".") . " está ganhando abaixo do salário mínimo</p>";
                }
                else{
                    echo "<p>Por favor insira um valor válido de salário!</p>";
                };
         ?>
    </section>
    
      <!-- Botão de Voltar -->
      <button id="backButton">Voltar</button>

    <script>
        // Obter o botão de voltar pelo ID
        const backButton = document.getElementById('backButton');

        // Adicionar um evento de clique ao botão
        backButton.addEventListener('click', function() {
            window.history.back();  // Volta para a página anterior no histórico
        });
    </script>

</body>
</html>