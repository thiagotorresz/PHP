<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Calculadora de Tempo</h1>
    </header>
    <?php 
        $seg = $_POST['segundos'] ?? 60;
    ?>
    <main>
        <form action="" method="post">
            <label for="segundos">Qual o total de segundos?</label>
            <input type="number" name="segundos" id="idsegundos" value="<?=$seg?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
        $sem = $seg / 604800;
        $rest = $seg % 604800;
        $dias = $rest / 86400;
        $resto = $rest % 86400;
        $horas = $resto / 3600;
        $rest = $resto % 3600;
        $min = $rest / 60;
        $resto = $rest % 60;
        $segundos = $resto / 1;
    ?>
    <main>
        <ul>
            <li><?=(int)$sem?> Semanas</li>
            <li><?=(int)$dias?> Dias</li>
            <li><?=(int)$horas?> Horas</li>
            <li><?=(int)$min?> Minutos</li>
            <li><?=(int)$segundos?> Segundos</li>
        </ul>
    </main>
</body>
</html>