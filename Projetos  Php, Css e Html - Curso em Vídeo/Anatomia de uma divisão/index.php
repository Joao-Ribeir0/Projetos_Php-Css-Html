<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php 
        $dividendo = $_GET['valor1'] ?? 0;
        $divisor = $_GET['valor2'] ?? 1;
    ?>

    <main>
        <h1>Anatomia de uma Divisão</h1>
        
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">Dividendo</label>
            <input type="number" id="valor1" name="valor1" value="<?php echo $dividendo?>">
            <label for="valor2">Divisor</label>
            <input type="number" id="valor2" name="valor2" value ="<?php echo $divisor?>">
            <input type="submit" value="Dividir">
        </form>
    </main>

    <section>
        <h2>Estrutura da Divisão</h2>

        <?php 
            $quociente = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;

            echo "<ul>";
            echo "<li>Dividendo: $dividendo</li>";
            echo "<li>Divisor: $divisor</li>";
            echo "<li>Quociente: $quociente</li>";
            echo "<li>Resto: $resto</li>";
            echo "</ul>";
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
