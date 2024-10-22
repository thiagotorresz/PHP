<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Calculando a sua idade</h1>
    </header>
    <?php 
        $nasc = $_POST['anon'] ?? 2000;
        $atual = date("Y");
        $ano = $_POST['anoa'] ?? $atual;
    ?>
    <main>
        <form action="" method="post">
            <label for="anon">Em que ano você nasceu?</label>
            <input type="number" name="anon" id="idanon" value="<?=$nasc?>">
            <label for="anoa">Quer saber sua idade em que ano? (Estamos em <?=$atual?>)</label>
            <input type="number" name="anoa" id="idanoa" value="<?=$ano?>" min="<?=$nasc+1?>">
            <input type="submit" value="Qual a minha idade?">
        </form>
    </main>
    <?php 
        $idade = $ano - $nasc;
    ?>
    <main>
        <header>
            <h2>Resultado</h2>
        </header>
        <p>Quem nasceu em <?= $nasc?> vai ter <b><?= $idade?> anos</b> em <?= $ano?> !</p>
    </main>
</body>
</html>