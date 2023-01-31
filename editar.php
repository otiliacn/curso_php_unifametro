<?php
session_start();
require 'bdcon.php';
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Editar Contato</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('mensagem.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar Contato 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $contato_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM usuario WHERE id='$contato_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $dados = mysqli_fetch_array($query_run);
                                ?>
                                <form action="codigo.php" method="POST">
                                    <input type="hidden" name="contato_id" value="<?= $dados['id']; ?>">

                                    <div class="mb-3">
                                        <label>Nome Completo</label>
                                        <input type="text" name="nome" value="<?=$dados['nome'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Endereço</label>
                                        <input type="text" name="endereco" value="<?=$dados['endereco'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>E-mail</label>
                                        <input type="email" name="email" value="<?=$dados['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Telefone Celular</label>
                                        <input type="text" name="celular" value="<?=$dados['celular'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Data Nascimento</label>
                                        <input type="date" name="dataNasc" value="<?=$dados['dataNasc'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="atualiza_contato" class="btn btn-primary">
                                            Atualizar
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>Nenhum ID encontrado!</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>