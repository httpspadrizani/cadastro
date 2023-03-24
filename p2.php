<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="php.css">
        <title>Página apresentar.php - Método Get</title>
    </head>
    <body>

    <?php
        include("menu.php");
    ?>

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
        <a href="p1.php">
        <button id="voltar" type="submit" class="btn btn-warning">Voltar</button>
        </a>    
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>