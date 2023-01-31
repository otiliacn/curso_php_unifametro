<?php
  session_start();
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Cadastro com MySQL e BootStrap</title>
  </head>
  <body>
    <div class = "container mt-5">
      <div class = "row">
        <div class = "col-md-12">
          <div class = "card">
            <div class = "card-header">
              <h4>Adicionar Contato
                <a href="index.php" class = "btn btn-danger float-end">Voltar</a>
              </h4>
            </div>
            <div class = "card-body">
              <form action="codigo.php" method="post">
                <div class = "mb-3">
                  <label>Nome Completo</label>
                  <input type="text" class = "form-control" name = "nome">
                </div>
                <div class = "mb-3">
                  <label>Endereço</label>
                  <input type="text" class = "form-control" name = "endereco">
                </div>
                <div class = "mb-3">
                  <label>E-mail</label>
                  <input type="email" class = "form-control" name = "email">
                </div>
                <div class = "mb-3">
                  <label>Telefone Celular</label>
                  <input type="text" class = "form-control" name = "celular">
                </div>
                <div class = "mb-3">
                  <label>Data Nascimento</label>
                  <input type="date" class = "form-control" name = "dataNasc">
                </div>
                <div class = "mb-3">
                  <button type="submit" name= "inserir" class = "btn btn-primary">Inserir</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    

 

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
  </body>
</html>