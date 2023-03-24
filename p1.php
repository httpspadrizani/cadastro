<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
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
        <h3>Tela de Login</h3>
        <form action="p2.php" method="get">
            <label>Nome: </label>
            <input type="text" name="nome"/><br/><br/>
            <label>Data de Nascimento: </label>
            <input type="text" name="data"/><br/><br/>
            <label>CPF/CNPJ: </label>
            <input type="text" name="CC"/><br/><br/>
            <label>Estado Civil: </label>
            <input type="text" name="civil"/><br/><br/>
            <label>País: </label>
            <input type="text" name="pais"/><br/><br/>
            <label>Cidade: </label>
            <input type="text" name="cidade"/><br/><br/>
            <label>E-Mail: </label>
            <input type="text" name="email"/><br/><br/>
            <label>Senha: </label>
            <input type="text" name="senha"/><br/><br/>
            <button id="enviar" type="submit" class="btn btn-warning">Enviar</button>
            <div class="Mario">
            <button id="limpar" type="reset" class="btn btn-warning">Limpar</button>
            </div>
        </form>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>