<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 04</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta("Faber", 1.0);
            //$c1->setModelo("BIC");
            //$c1->setPonta(0.5);
            //$c1->tampar();
            $c2 = new Caneta("BIC", 0.4);
            $c2->destampar();
            $c3 = new Caneta("CIS", 0.7);


            print_r($c1);
            print_r($c2);
            print_r($c3);
        ?>
    </pre>
</body>
</html>