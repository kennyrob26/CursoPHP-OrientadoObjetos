<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'Caneta.php'; //Inclui um arquivo PHP dentro de outro

        $c1 = new Caneta;   //Instancia o objeto
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = true;

        $c1->destampar();
        $c1->rabiscar();
        //print_r($c1);

        $c2 = new Caneta;
        $c1->cor = "Vermelha";
        $c2->carga = 50;
        $c2->tampada = true;
        $c2->ponta - 1.0;
        print_r($c2);
    ?>
</body>
</html>