<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $numero = $_GET['valor'] ?? 0;
    ?>

    <main>
        <h1>Calcule as raízes de um número</h1> 
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="$_GET">
            <label for="valor">Digite um número</label>
            <input type="number" id="valor" name="valor" value="<?php echo $numero?>">
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>

        <?php echo "<h2>As raízes do número $numero são: </h2>"?>
        <?php 
        
        $raiz_quadrada = sqrt($numero) ;
        $raiz_cubica = pow($numero, 1/3);
        $raiz_quinta = pow($numero, 1/5);
        
        echo "<ul>";
        echo "<li>Raíz quadrada: " . number_format($raiz_quadrada, 2,",",".") . " </li>";
        echo "<li>Raíz cúbica: " . number_format($raiz_cubica, 2,",",".") . " </li>";
        echo "<li>Raíz quinta: " . number_format($raiz_quinta, 2,",",".") . "</li>";
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