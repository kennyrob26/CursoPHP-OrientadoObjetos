<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1->modelo = "BIC";
            $c1->cor = "azul";
            //$c1->ponta = 1.0; //Ponta não pode ser alterada (private)
            //$c1->tampada = true; //não podemos alterar tampa diretamente, somente por meio da função tampar:
            $c1->tampar();
            print_r($c1);
        ?>
    </pre>

</body>
</html>