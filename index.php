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

    <title>Cadastro com MySQL e BootStrap</title>
</head>
<body>  
    <div class="container mt-4">
        <?php 
            include 'mensagem.php'; 
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Dados dos Contatos
                            <a href="cadastro.php" class="btn btn-primary float-end">Adicionar Contatos</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome Completo</th>
                                    <th>Endereço</th>
                                    <th>E-mail</th>
                                    <th>Celular</th>
                                    <th>Data Nasc.</th>
                                    <th>Opções</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT *, date_format(dataNasc, '%d/%m/%Y') as dataNasc FROM usuario";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $dados)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $dados['id']; ?></td>
                                                <td><?= $dados['nome']; ?></td>
                                                <td><?= $dados['endereco']; ?></td>
                                                <td><?= $dados['email']; ?></td>
                                                <td><?= $dados['celular']; ?></td>
                                                <td><?= $dados['dataNasc']; ?></td>
                                                <td>
                                                    <a href="visualizar.php?id=<?= $dados['id']; ?>" class="btn btn-info btn-sm">Exibir</a>
                                                    <a href="editar.php?id=<?= $dados['id']; ?>" class="btn btn-success btn-sm">Editar</a>
                                                    <form action="codigo.php" method="POST" class="d-inline">
                                                        <button type="submit" name="excluir" value="<?=$dados['id'];?>" class="btn btn-danger btn-sm">Excluir</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> Registros não encontrados. </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>