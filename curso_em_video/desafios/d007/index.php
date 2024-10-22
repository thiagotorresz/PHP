<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Informe seu salário</h1>
    </header>
    <!-- Salário minimo atual e fixando salario-->
    <?php 
        $salario = $_POST['salario'] ?? 0;
        $s= 1412;
    ?>
    <!-- Formulario -->
    <main>
        <form action="" method="post">
        <label for="salario">Salário (R$)</label>
        <input type="number" name="salario" id="idsalario" step="0.01" value= "<?= $salario ?>">
        Considerando o salário mínimo de <b>R$ <?= number_format($s, 2, ",", ".") ?></b>
        <input type="submit" value="Calcular">
        </form>
    </main>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <!-- Conta -->
    <?php 
        $salario = $_POST['salario'] ?? 0;
        $div = (int)($salario / $s);
        $resto = $salario - ($s * $div); 
    ?>
    <main>
    <p>Quem recebe um salário de R$<?= number_format($salario, 2, ",", ".") ?> ganha <b><?= $div ?> salários mínimos + R$<?= number_format($resto, 2, ",", ".") ?>.</b></p>
    </main>
</body>
</html>