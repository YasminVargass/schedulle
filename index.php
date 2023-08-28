<?php 
require_once './components/head.php';

?>
<html>

<body>
    <?php
    require_once './components/header.php';
    ?>
    <main>
        <?php if (isset($printMsg) && $printMsg !== '') : ?>
        <p><?=$printMsg; ?></p>
        <?php endif; ?>
        <h1 class="text-center mt-4">Minha agenda</h1>
        <?php if (count($contacts) > 0) : ?>

        <table class="table">
            <thead>
                <tr class="table-primary">
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact) :?>
                <tr>
                    <td scope="row"> <?= $contact['id']; ?></td>

                    <td scope="row"> <?= $contact['name']; ?></td>

                    <td scope="row"> <?= $contact['phone']; ?></td>
                    <td class="actions">
                        <a href="#"><i class="far fa-eye check-icon"></i></a>
                        <a href="#"><i class="far fa-edit edit-icon"></i></a>
                        <button type="submit"><i class="fas fa-times delete-icon"></i></button>
                    </td>
                </tr>
                <?php endforeach ; ?>
            </tbody>

        </table>

        <?php else : ?>
        <p class="text-center mt-3">Ainda não existem contatos, <a href="./create.php">clique aqui</a> para adicionar novos contatos.</p>
        <?php endif ; ?>


    </main>

</body>

</html>