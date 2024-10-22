<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Titulo -->
    <header>
        <h1>Resultado final</h1>
    </header>
    <!-- Cálculos -->
    <main>
    <?php 
        $numero = $_REQUEST ["numero"];
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;
    // Resultado
       echo "O NÚMERO DIGITADO FOI <b>$numero</b>";
       echo "<p>O SEU <em>SUCESSOR</em> É <b>$sucessor</b></p>";
       echo "<p>O SEU <em>ANTECESSOR</em> É <b>$antecessor</b></p>";
    ?>
    </main>
 <a href="index.html"><button>Voltar</button></a>
</body>
</html>