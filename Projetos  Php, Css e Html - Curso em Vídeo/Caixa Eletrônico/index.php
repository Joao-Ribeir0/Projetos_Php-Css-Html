<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <?php 
        $saque = (int)($_GET['saque'] ?? 0);
        $sobra = $saque;

        $notas100 = intdiv($sobra, 100);
        $sobra = $sobra % 100;

        $notas50 = intdiv($sobra, 50);
        $sobra = $sobra % 50;

        $notas20 = intdiv($sobra, 20);
        $sobra = $sobra % 20;

        $notas10 = intdiv($sobra, 10);
        $sobra = $sobra % 10;

        $notas5 = intdiv($sobra, 5);
        $sobra = $sobra % 5;

        $notas2 = intdiv($sobra, 2);
        $sobra = $sobra % 2;

        $notas1 = intdiv($sobra, 1);
        $sobra = $sobra % 1;
    ?>

    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual valor você deseja sacar?</label>
            <input type="number" id="saque" name="saque" value="<?php echo $saque?>">
            <input type="submit" value="Sacar">
        </form>
    </main>

    <section>
        <h2>
        <?php 
        if ($saque == 0){
            echo "<p>Não é possível sacar 0 reais!</p>";
        }
        else{
            echo "<p>Saque realizado no valor de R$" . number_format($saque,2,',','.') . "</p>";
        }
        ?>
        <ul>
            <li><img src="../Imagens/1-real.jpg"> <?php echo "x $notas1"?></li>
            <li><img src="../Imagens/2-reais.jpg"> <?php echo "x $notas2"?></li>
            <li><img src="../Imagens/5-reais.jpg"> <?php echo "x $notas5"?></li>
            <li><img src="../Imagens/10-reais.jpg"> <?php echo "x $notas10"?></li>
            <li><img src="../Imagens/20-reais.jpg"> <?php echo "x $notas20"?></li>
            <li><img src="../Imagens/50-reais.jpg"> <?php echo "x $notas50"?></li>
            <li><img src="../Imagens/100-reais.jpg"> <?php echo "x $notas100"?></li>
        </ul>
        </h2>
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