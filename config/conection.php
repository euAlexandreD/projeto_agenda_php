<?php 

    $host = "localhost";
    $user = "root";
    $db = "Agenda";
    $pass = "";


    try{
        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        //ativar modo de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    }catch(PDOException $e){
        //erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
    }



?>