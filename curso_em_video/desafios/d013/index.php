<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Caixa Eletrônico</h1>
    </header>
    <?php 
        $valor = $_POST['valor'] ?? 0;
    ?>
    <main>
        <form action="" method="post">
            <label for="valor">Qual valor você deseja sacar? (R$)</label>
            <input type="number" name="valor" id="idvalor" value="<?=$valor?>" step="5">
            <p><h6>*Notas diponiveis: R$100, R$50, R$20, R$10, R$5</h6></p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php 
        $cem = $valor / 100;
        $resto = $valor % 100;
        $cinquenta = $resto / 50;
        $rest = $resto % 50;
        $vinte = $rest / 20;
        $resto = $rest % 20;
        $dez = $resto / 10;
        $rest = $resto % 10;
        $cinco = $rest / 5;
    ?>
    <main>
        <header>
            <h2>Saque de R$<?=number_format($valor, 2, ",", ".")?> realizado</h2>
        </header>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="cemrs-250.jpg" alt="Cedula 100"> x <?=(int)$cem?></li>
            <li><img src="cinquentars-250.jpg" alt="Cédula 50"> x <?=(int)$cinquenta?></li>
            <li><img src="vinters-250.jpg" alt="Cédula 20"> x <?=(int)$vinte?></li>
            <li><img src="dezrs-250.jpg" alt="Cédula 10"> x <?=(int)$dez?></li>
            <li><img src="cincors-250.jpg" alt="Cédula 5"> x <?=(int)$cinco?></li>
        </ul>
    </main>
</body>
</html>