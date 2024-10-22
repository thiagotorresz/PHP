<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
    <?php 
        $n = $_REQUEST["nome"] ?? "sem nome";
        $s = $_REQUEST["sobrenome"] ?? "";
        print "Olá $n $s, é um prazer ter você aqui no meu teste de site \u{1F6A4}"
    ?>
   </main>
    <a href="index.html">Clique aqui para voltar a página principal</a>
</body>
</html>