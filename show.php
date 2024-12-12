<?php 
    include_once("templates/header.php");
?>
<div class="container" id="view-contact-container">
    <?php include_once("templates/backbtn.html")?>
    <h1 id="main-title"><?=$contact["name"]?></h1>
    <h2 class="bold"> E-mail</h2>
    <p class="phone"><?=$contact["email"]?></p>
    <h2 class="bold">Telefone</h2>
    <p class="phone"><?=$contact["phone"]?></p>
    <h2 class="bold"> Endereço</h2>
    <p class="phone"><?=$contact["street"]?></p>
    <h2 class="bold"> Observações</h2>
    <p class="phone"><?=$contact["observations"]?></p>
</div>
<?php 
    include_once("templates/footer.php")
?>