<html>

<head>
    <?php 
require_once './components/head.php';
?>
    <title>Agenda</title>
</head>

<body>
    <?php
    require_once './components/header.php';
    ?>
    <main class="d-flex flex-column align-items-center">
        <?php require_once './components/backbtn.php' ?>
        <form action="./data/inputEdit.php?id=<?= $contact['id'] ?>" method="POST" class="d-flex flex-column">

            <label class="mb-1" for="name">Nome do contato:</label>
            <input type="text" id="name" name="name" placeholder="Digite o nome" class="mb-2" value="<?= $contact['name'] ?>" required>

            <label class="mb-1" for="phone">Telefone do contato:</label>
            <input type="text" id="phone" name="phone" placeholder="Digite o telefone" class="mb-2" value="<?= $contact['phone'] ?>" required>

            <label class="mb-1" for="observations">Observações</label>
            <textarea name="observations" id="observations" placeholder="Insira as observações" cols="30" rows="5" class="mb-2" required><?= $contact['observations'] ?></textarea>

            <button type="submit" class="btn btn-primary" value="enviar">Enviar</button>


        </form>
    </main>


</body>

</html>