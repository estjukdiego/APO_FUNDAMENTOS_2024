<?php
$title = "Currículo Fast";
$description = "Crie seu currículo de forma rápida e fácil com o Currículo Fast. Contato rápido pelo WhatsApp.";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description; ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="styles2.css">
</head>
<body>
    <div class="container">
        <div class="title">
            <h1><?php echo $title; ?></h1>
        </div>
        <div class="button-container">
            <a href="index.html" class="btn btn-primary btn-lg" aria-label="Criar Currículo">Criar Currículo</a>
            <a href="https://wa.me/46999162876" class="btn btn-primary btn-lg" aria-label="Contato via WhatsApp">Contato</a>
        </div>
    </div>
</body>
</html>