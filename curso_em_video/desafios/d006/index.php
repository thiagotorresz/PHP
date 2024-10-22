<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dividor</title>
    <link rel="stylesheet" href="style.css">
    
   
</head>

<body>
    <header>
        <h1>Anatomia de uma Divisão</h1>
    </header>    

    <!-- Fixando número -->
    <?php 
        $dividendo = $_POST['dividendo'] ?? 0;
        $divisor = $_POST['divisor'] ?? 1;
    ?>

    <!-- Formulario -->
    <main>
        <form action="" method="post">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="idividendo" value="<?= $dividendo ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="isdivisor" value="<?= $divisor ?>">
            <input type="submit" value="Dividir">
        </form>
    </main>

    <!-- Divisão -->
    <?php 
        $conta = (int)($dividendo / $divisor);
        $resto = $dividendo % $divisor;
    ?>

    <!-- Resultado -->
    <section> 
    <header>
        <h2>Estrutura de Divisão</h2>
    </header>
    <table class = "divisao">
        <tr>
            <td><?=$dividendo?></td>
            <td><?=$divisor?></td>
        </tr>
        <tr>
            <td><?=$resto?></td>
            <td><?=$conta?></td>
        </tr>
    </table>
    </section> 
</body>
</html>