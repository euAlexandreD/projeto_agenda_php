<?php 
    include_once("templates/header.php");
?>
<div class="container">
    <?php  include_once('templates/backbtn.html')?>
    <h1 id="main-title">Adicionar Contatos</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="create">
        <div class="form-group">
            <label for="name">Nome do contato: </label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Digite o nome aqui" require>
        </div>
        <div class="form-group">
            <label for="email">E-mail do contato: </label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Digite o email aqui">
        </div>
        <div class="form-group">
            <label for="phone">Telefone do contato: </label>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Digite o numero aqui" require>
        </div>
        <div class="form-group">
            <label for="street">Endereço do contato: </label>
            <input type="text" name="street" class="form-control" id="street" placeholder="Digite o endereço aqui"
                require>
            <p>Obs: Nome da rua e número</p>
        </div>
        <div class="form-group">
            <label for="observations">Observações do contato: </label>
            <textarea type="text" name="observations" class="form-control" id="observations"
                placeholder="Observações do contato" require rows="3"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Cadastrar">
    </form>
</div>

<?php 
    include_once("templates/footer.php")
?>