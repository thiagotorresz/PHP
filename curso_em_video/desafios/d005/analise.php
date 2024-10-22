<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Analisador de Número Real</h1>
    </header>
    <main>
    <?php 
    
        $num = $_POST["numero"];
        $int = (int)$num;
        $fra = $num - $int;
        print "Analisando o número <b>".number_format($num, 3, ",", ".")."</b>  digitado pelo usuário:";
        print "<ul><li>A parte inteira do número é <b>".number_format($int, 3, ",", ".")."</b></li>
        <li>A parte fracionária do número é <b>".number_format($fra, 3, ",", ".")."</b></li></ul>"
    ?>
    </main>
    <a href="index.html"><button>Voltar</button></a>
</body>
</html>