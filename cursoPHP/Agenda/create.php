<?php
    include_once("templates/header.php")
?>
    <div class="container">
        <?php include_once("templates/backbtn.html") ?>
        <h1 id="main-title">Criar Contato</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Digite o nome" required>
            </div>
            <div class="form-group">
                <label for="phone">Telefone:</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Digite o telefone" required>
            </div>
            <div class="form-group">
                <label for="observations">Obervações:</label>
                <textarea type="text" name="observations" class="form-control" id="observations" placeholder="Digite as observações" rows="5"></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Cadastrar</button>
        </form>
    </div>


<?php
    include_once("templates/footer.php")
?>