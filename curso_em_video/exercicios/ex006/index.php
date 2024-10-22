<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Somador &#x2795</h1>
    </header>
        <?php 
            $numero = $_GET['numero'] ?? 0;
            $numero2 = $_GET['numero2'] ?? 0;
        ?>
        <main>
            <form action= ""  method="get">
                <label for="numero">Primeiro número</label>
                <input type="number" name="numero" id="idnumero" value="<?=$numero?>">
                <label for="numero2">Segundo número</label>
                <input type="number" name="numero2" id="idnumero" value="<?=$numero2?>">
                <input type="submit" value="Somar">
         </form>
         </main>

         
            <header>
                <h1>Resultado da Soma</h1>
            </header>
        <section id = "resultado">
        <?php 
            $soma = $numero + $numero2;
            print "A soma entre $numero e $numero2 é <b>igual a $soma</b>"
        ?>
        </section>
</body>
</html>