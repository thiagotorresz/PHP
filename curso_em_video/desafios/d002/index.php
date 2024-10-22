<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aleatorio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Gerando um número aleatório</h1>
    </header>
    <main>
        <?php 
            $num = mt_rand(0, 100);
            print "Gerando um número aleatório entre 0 e 100...<br>";
            print "O número gerado foi $num"
        ?>  
        <a href="index.php"><input type="button" value="&#x1F504 Gerar outro"></a>
    </main>
</body>
</html>