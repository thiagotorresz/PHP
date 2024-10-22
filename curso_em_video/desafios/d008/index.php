<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz Quadrada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Informe um número</h1>
    </header>
    <?php 
        $num = $_POST['numero'] ?? 0;
    ?>
    <main>
        <form action="" method="post">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="idnumero" value="<?= $num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <!-- CONTA -->
    <?php 
        $quadrada = $num ** (1/2);
        $cubica = $num ** (1/3);
    ?>
    <main>
        <p>Analisando o <b>número <?=$num?></b>, temos:
        <ul>
            <li>A sua raiz quadrada é <b><?= number_format($quadrada, 3, ",", ".")?></b></li>
            <li>A sua raiz cúbica é <b><?= number_format($cubica, 3, ",", ".")?></b></li>
        </ul>
        </p>
    </main>
</body>
</html>