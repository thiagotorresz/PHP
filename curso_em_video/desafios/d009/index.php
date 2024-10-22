<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Médias Aritméticas</h1>
    </header>

    <!-- FIXANDO VALORES -->
    <?php 
        $n1 = $_POST['nota1'] ?? 0;
        $p1 = $_POST['peso1'] ?? 1;
        $n2 = $_POST['nota2'] ?? 0;
        $p2 = $_POST['peso2'] ?? 1;        
    ?>
    <!-- FORMULARIO -->
    <main>
        <form action="" method="post">
            <label for="nota1">1ª Nota</label>
            <input type="number" name="nota1" id="idnota1" step="0.01" value= "<?= $n1 ?>" min="0" max="10">
            <label for="nota1">1º Peso</label>
            <input type="number" name="peso1" id="idpeso1" value= "<?= $p1 ?>" min="1" max="5">
            <label for="nota1">2ª Nota</label>
            <input type="number" name="nota2" id="idnota2" step="0.01" value= "<?= $n2 ?>" min="0" max="10">
            <label for="nota1">2º Peso</label>
            <input type="number" name="peso2" id="idpeso2" value= "<?= $p2 ?>" min="1" max="5">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <!-- CONTAS -->
    <?php 
        // MEDIA SIMPLES
        $msimples = ($n1 + $n2) / 2;
        // MEDIA PONDERADA
        $mpond = (($n1 * $p1) + ($n2 * $p2)) / ($p1 + $p2);
    ?>
    <main>
        <header>
            <h2>Cálculo de Médias</h2>
        </header>
        <p>Analisando os valores de <?= number_format($n1, 1, ".")?> e <?= number_format($n2, 1, ".")?>:
            <ul>
                <li>A <b>Média Aritmética Simples</b> entres os valores é igual a <?= number_format($msimples, 1, ".")?>.</li>
                <li>A <b>Média Aritmética Ponderada</b> entre os valores é igual a <?= number_format($mpond, 1, ".")?>.</li>
            </ul>
        </p>
    </main>
</body>
</html>