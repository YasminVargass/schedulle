<head>
    <?php 
require_once './components/head.php';
?>
    <link rel="stylesheet" href="./assets/css/show.css">
    <title>Show Contacts</title>
</head>
<html>

<body>
    <header>
    <?php
    require_once './components/header.php';
    ?>
    </header>
    <main>
        <section class="box-show text-start">
            <?php require_once './components/backbtn.php' ?>

            <h1 class="text-center"><?= $contact['name']?></h1>
            <h4>Telefone:</h4>
            <p><?= $contact['phone'] ?></p>
            <h4>Observações:</h4>
            <p><?= $contact['observations'] ?></p>
        </section>

    </main>

</body>
