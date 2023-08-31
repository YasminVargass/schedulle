<head>
    <?php 
require_once './components/head.php';

?>
    <title>Criar Contato</title>
    <link rel="stylesheet" href="./assets/css/create.css">
</head>

<html>

<?php
    require_once './components/header.php';
?>
<main class="d-flex flex-column align-items-center">
    <?php require_once './components/backbtn.php' ?>

    <h1 class="text-center mt-4">Criar Contato</h1>
    <form action="./data/contact.php" method="POST" class="d-flex flex-column">
        <label class="mb-1" for="name">Nome do contato:</label>
        <input type="text" id="name" name="name" placeholder="Digite o nome" class="mb-2" required>

        <label class="mb-1" for="phone">Telefone do contato:</label>
        <input type="text" id="phone" name="phone" placeholder="Digite o telefone" class="mb-2" required>

        <label class="mb-1" for="observations">Observações</label>
        <textarea name="observations" id="observations" placeholder="Insira as observações" cols="30" rows="5" class="mb-2" required></textarea>

        <button type="submit" class="btn btn-primary" value="enviar">Enviar</button>

    </form>
</main>

</html>