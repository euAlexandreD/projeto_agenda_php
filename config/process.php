<?php 

session_start();

include_once("conection.php");
include_once("url.php");

$data = $_POST;

    if(!empty($data)){

        if($data["type"] === "create"){
            $name = $data["name"];
            $email = $data["email"];
            $phone = $data["phone"];
            $street = $data["street"];
            $observations = $data["observations"];
            
            $query = "INSERT INTO contacts (name, email, phone, street, observations) VALUES (:name, :email, :phone, :street, :observations)";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":street", $street);
            $stmt->bindParam(":observations", $observations);

            try{
                $stmt->execute();
                $_SESSION["msg"] = "Contato criado com sucesso!!";
    
            }catch(PDOException $e){
                //erro na conexão
                $error = $e->getMessage();
                echo "Erro: $error";
            }
            

        } elseif ($data["type"] === "edit"){
            $name = $data["name"];
            $email = $data["email"];
            $phone = $data["phone"];
            $street = $data["street"];
            $observations = $data["observations"];
            $id = $data["id"];

            $query = "UPDATE contacts 
                      SET name = :name, email = :email, phone = :phone, street = :street, observations = :observations 
                      WHERE id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":phone", $phone);
            $stmt->bindParam(":street", $street);
            $stmt->bindParam(":observations", $observations);
            $stmt->bindParam(":id", $id);

            try{
                $stmt->execute();
                $_SESSION["msg"] = "Contato atualizado com sucesso!!";
    
            }catch(PDOException $e){
                //erro na conexão
                $error = $e->getMessage();
                echo "Erro: $error";
            }

           

        
        } elseif($data["type"] === "delete"){
            $id = $data["id"];

            $query = "DELETE FROM contacts WHERE id = :id";

            $stmt = $conn->prepare($query);
            $stmt->bindParam("id", $id);

            try{
                $stmt->execute();
                $_SESSION["msg"] = "Contato deletado com sucesso!!";
    
            }catch(PDOException $e){
                //erro na conexão
                $error = $e->getMessage();
                echo "Erro: $error";
            }

            

        }

        header("location:" . $BASE_URL . "../index.php");

    } else {
        $id;
        if(!empty($_GET)){
            $id = $_GET['id'];
        };
            if(!empty($id)){
                $query = "SELECT * FROM contacts WHERE id = :id";
                $stmt = $conn->prepare($query);
                $stmt->bindParam(":id", $id);
                $stmt->execute();
                $contact = $stmt->fetch();
            } else {
                $query = "SELECT * FROM contacts";
                $contacts = [];
                $stmt = $conn->prepare($query);
                $stmt->execute();
                $contacts = $stmt->fetchAll();
            }
    }

$conn = null;

?>