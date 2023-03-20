<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="php.css">
        <title>Página apresentar.php - Método Get</title>
    </head>
    <body>
        <h1>Página form.php</h1>
        <h3>Tela de Dados Recebidos</h3>
        <p><b>Nome: </b> <span><?php echo $_GET["nome"]; ?> </span> </p>
        <p><b>Data de Nascimento recebida:</b> <span><?php echo $_GET["data"]; ?></span> </p>
        <p><b>CPF/CNPJ: </b><span><?php echo $_GET["CC"]; ?></span> </p>
        <p><b>Estado Civil: </b><span><?php echo $_GET["civil"]; ?></span> </p>
        <p><b>País: </b><span><?php echo $_GET["pais"]; ?></span> </p>
        <p><b>Cidade: </b><span><?php echo $_GET["cidade"]; ?></span> </p>
        <p><b>E-mail: </b><span><?php echo $_GET["email"]; ?></span> </p>
        <p><b>Senha: </b><span><?php echo $_GET["senha"]; ?></span> </p>
        <br/>
        <a href="p1.php"> Voltar</a>
    </body>
</html>