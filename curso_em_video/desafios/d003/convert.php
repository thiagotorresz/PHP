<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertido</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Conversor de Moedas &#x1F4B8</h1>
    </header>
    <main>
        <?php 
            $n = $_REQUEST["valor"];
            $d = $n / 5.13;
             print "Seus R$" . number_format($n, 2, ",", ".") . " equivalem a <b>US$" .  number_format($d, 2, ",", ".") . "</b><br>";
            print "<h5>*cotação fixa de US$ 5,13 </h5>"
        ?>
    </main>
    <a href="index.html"><button>Voltar</button></a>
</body>
</html>