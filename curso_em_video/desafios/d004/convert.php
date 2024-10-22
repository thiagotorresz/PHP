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
            // COTAÇÃO ATUAL
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=%27'.$inicio.'%27&@dataFinalCotacao=%27'.$fim.'%27&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);

            $cotação = $dados["value"][0]["cotacaoCompra"];

            // VALOR DIGITADO
            $n = $_REQUEST["valor"];
            $d = $n / $cotação;
            
            print "Seus R$" . number_format($n, 2, ",", ".") . " equivalem a <b>US$" .  number_format($d, 2, ",", ".") . "</b><br>";
            print "<h6>*COTAÇÃO US$ " . number_format($cotação, 2, ",",".") . " | $fim</h6>"
        ?>
    </main>
    <a href="index.html"><button>Voltar</button></a>
</body>
</html>

