<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo TV</title>
</head>
<body>
    <?php
        require_once 'Televisao.php';

        $tv1 = new Televisao;
        $tv1->marca = "LG";
        $tv1->canal = 1;
        $tv1->volume = 23;
        $tv1->ligado = true;

        $tv1->desligar();
        $tv1->avancarCanal();
        $tv1->abaixarVolume();

        print_r($tv1);

    ?>
</body>
</html>