<head>
    <?php 
require_once './components/head.php';
?>
    <link rel="stylesheet" href="./assets/css/show.css">
    <title>Show Contacts</title>
</head>
<html>

<body>
    <?php
    require_once './components/header.php';
    ?>
    <main>
        <section class="box-show text-start">
            <a class="btn btn-outline-primary" href="./index.php" role="button">Voltar</a>
            <h1 class="text-center"><?= $contact['name']?></h1>
            <h4>Telefone:</h4>
            <p><?= $contact['phone'] ?></p>
            <h4>Observações:</h4>
            <p><?= $contact['observations'] ?></p>
        </section>

    </main>

</body>