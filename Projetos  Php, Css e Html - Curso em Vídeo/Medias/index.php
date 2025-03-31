<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Médias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero1 = $_GET['valor1'] ?? 1;
        $numero2 = $_GET['valor2'] ?? 1;
        $peso_1 = $_GET['peso1'] ?? 1;
        $peso_2 = $_GET['peso2'] ?? 1;
    ?>
    <main>
        
        <h1>Calcule a média</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1º Valor: </label>
            <input type="number" id="valor1" name="valor1" value="<?php echo $numero1?>">
            <label for="peso1">Peso</label>
            <input type="number" id="peso1" name="peso1" value="<?php echo $peso_1?>">
            <label for="valor2">2º Valor</label>
            <input type="number" name="valor2" id="valor2" value="<?php echo $numero2?>" >
            <label for="peso2">Peso</label>
            <input type="number" id="peso2" name="peso2" value="<?php echo $peso_2?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>

        <?php 

            if($numero1 && $numero2 != 0){
            $media_aritmetica = ($numero1 + $numero2)/2;
            $media_ponderada = ($numero1 * $peso_1 + $numero2 * $peso_2) / ($peso_1 + $peso_2);

            echo "<ul>";
            echo "<li><p>A média aritmética de $numero1 e $numero2 é $media_aritmetica</p></li>"; 
            echo "<li><p>A média ponderada de $numero1 ( com peso $peso_1) e $numero2 ( com peso $peso_2) é $media_ponderada</p></li>";
            echo "</ul>";
            }
            else{
                echo "<p>Digite números diferentes de 0</p>";
            }
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