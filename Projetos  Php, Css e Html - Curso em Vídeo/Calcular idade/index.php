<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcule sua idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        // Convertendo os valores para inteiros
        $ano_nascimento = (int) ($_GET['nascimento'] ?? 0);
        $ano_desejado = (int) ($_GET['idade'] ?? 2025);
    ?>
    <main>
        <h1>Calculadora de idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
            <label for="nascimento">Em que ano você nasceu?</label>
            <input type="number" name="nascimento" id="nascimento">
            <label for="idade">Em que ano você quer saber sua idade? (atualmente estamos em 2025)</label>
            <input type="number" name="idade" id="idade">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <?php 
            // Validações
            if ($ano_nascimento == 0 || $ano_desejado == 0) {
                echo "<p>Digite valores diferentes de 0!</p>";
            } elseif ($ano_nascimento > $ano_desejado) {
                echo "<p>Se você nasceu em $ano_nascimento, em $ano_desejado você ainda não era nascido.</p>";
            } else {
                $resultado = $ano_desejado - $ano_nascimento;
                echo "<p>Se você nasceu em $ano_nascimento, em $ano_desejado você terá $resultado anos.</p>";
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
