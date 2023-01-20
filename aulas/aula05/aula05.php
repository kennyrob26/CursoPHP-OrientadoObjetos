<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula05</title>
</head>
<body>
    <pre>
        <?php
        require_once "Conta.php";
        $cliente1 =  new Conta();
        $cliente1->abrirConta("José", "cc");
        $cliente1->pagarMensalidade();
        print_r($cliente1);


        $cliente2 = new Conta();
        $cliente2->abrirConta("Ana", "cp");
        $cliente2->sacar(150);
        //$cliente2->excluirConta();
        $cliente2->depositar(200);
        print_r($cliente2);
        ?>
    </pre>
</body>
</html>