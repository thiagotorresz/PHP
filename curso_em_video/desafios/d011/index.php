<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Reajustador de Preços</h1>
    </header>
    <?php 
        $preco = $_POST['preco'] ?? 100;
        $reajuste = $_POST["reajuste"] ?? 0;
    ?>
    <main>
    <form action="" method="post">
        <label for="preco">Preço do produto (R$)</label>
        <input type="number" name="preco" id="preco" step="0.01" value="<?=$preco?>">

        <label for="reajuste">Qual será o percentual do reajuste? (<span id="p">?</span>%)</label>
        <input type="range" name="reajuste" id="reajuste" value="<?=$reajuste?>" min="0" max="100" step="1" oninput="mudaValor()" >

        <input type="submit" value="Reajustar">
    </form>
    </main>
    <?php 
        $precoa = ($preco / 100) * $reajuste + $preco
    ?>
    <main>
        <header>
            <h2>Resultado do reajuste</h2>
        </header>
        <p>O produto que custava R$<?= number_format($preco, 2, ",", ".")?>, com <b><?=$reajuste?>%</b> de aumento vai passar a custar <b>R$<?= number_format($precoa, 2, ",", ".")?> </b>a partir de agora</p>
    </main>
    <script>
        mudaValor()

        function mudaValor() {
            p.innerText = reajuste.value
        }
    </script>
</body>
</html>