<?php
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

    <title>Visualizar Contato</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalhes de Contato 
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
                                    <div class="mb-3">
                                        <label>Nome Completo</label>
                                        <p class="form-control">
                                            <?=$dados['nome'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Endereço</label>
                                        <p class="form-control">
                                            <?=$dados['endereco'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <p class="form-control">
                                            <?=$dados['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Telefone Celular</label>
                                        <p class="form-control">
                                            <?=$dados['celular'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Data Nascimento</label>
                                        <p class="form-control">
                                            <?=$dados['dataNasc'];?>
                                        </p>
                                    </div>

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