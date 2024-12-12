<?php 
    include_once("templates/header.php");
?>
<div class="container">
    <?php  include_once('templates/backbtn.html')?>
    <h1 id="main-title">Editar Contatos</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contact["id"] ?>">
        <div class="form-group">
            <label for="name">Nome do contato: </label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Digite o nome aqui"
                value="<?= $contact["name"] ?>" require>
        </div>
        <div class="form-group">
            <label for="email">E-mail do contato: </label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Digite o email aqui"
                value="<?= $contact["email"] ?>">
        </div>
        <div class="form-group">
            <label for="phone">Telefone do contato: </label>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Digite o numero aqui"
                value="<?= $contact["phone"] ?>" require>
        </div>
        <div class="form-group">
            <label for="street">Endereço do contato: </label>
            <input type="text" name="street" class="form-control" id="street" placeholder="Digite o endereço aqui"
                value="<?= $contact["street"] ?>" require>
            <p>Obs: Nome da rua e número</p>
        </div>
        <div class="form-group">
            <label for="observations">Observações do contato: </label>
            <textarea type="text" name="observations" class="form-control" id="observations"
                placeholder="Observações do contato" require rows="3"><?= $contact["observations"] ?></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Atualizar">
    </form>
</div>

<?php 
    include_once("templates/footer.php")
?>