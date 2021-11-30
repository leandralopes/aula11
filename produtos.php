<?php
    include('conexao.php');
    try {
       $sql = "insert into tblprodutos (produto,preco,estoque) values (:produto,:preco,:estoque)";
       $stmt = $con->prepare($sql);

       $stmt-> bindValue(":produto",$_POST["produto"]);
       $stmt-> bindValue(":preco", $_POST["preco"]);
       $stmt-> bindValue(":estoque", $_POST["estoque"]);
       $stmt->execute();

    } catch(PDOException $e){
            echo "Não Cadastrou.".$e->getMessage();
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1>Formulário dos Produtos</h1>
    <!-- método de envio são 2
        * method_"Get" Envia sem segurança pois exibe os dados na url -  mais rápido
        * method= "POST" oculta os dados da url - mais lento
    -->
    <div class="container">
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Produto</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Valor</label>
    <input type="text" class="form-control" id="exampleInputEmail1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form></div>
<script src="http://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="http://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>     
</body>
</html>