<?php
    session_start();
    require 'bdcon.php';

if(isset($_POST['excluir']))
{
    $contato_id = mysqli_real_escape_string($con, $_POST['excluir']);

    $query = "DELETE FROM usuario WHERE id='$contato_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['mensagem'] = "Contato Excluído com Sucesso";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['mensagem'] = "Contato não Excluído";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['atualiza_contato']))
{
    $dados_id = mysqli_real_escape_string($con, $_POST['contato_id']);  

    $nome = mysqli_real_escape_string($con, $_POST['nome']);
    $endereco = mysqli_real_escape_string($con, $_POST['endereco']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $celular = mysqli_real_escape_string($con, $_POST['celular']);
    $dataNasc = mysqli_real_escape_string($con, $_POST['dataNasc']);

    $query = "UPDATE usuario SET nome='$nome', endereco='$endereco', email='$email', celular='$celular', dataNasc='$dataNasc' WHERE id='$dados_id' ";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
            
        $_SESSION['mensagem'] = "Contato atualizado com Sucesso";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['mensagem'] = "Contato não atualizado";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['inserir']))
{
    $nome = mysqli_real_escape_string($con, $_POST['nome']);
    $endereco = mysqli_real_escape_string($con, $_POST['endereco']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $celular = mysqli_real_escape_string($con, $_POST['celular']);
    $dataNasc = mysqli_real_escape_string($con, $_POST['dataNasc']);

    $query = "INSERT INTO usuario (nome, endereco, email, celular, dataNasc) VALUES ('$nome','$endereco','$email','$celular','$dataNasc')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['mensagem'] = "Contato Inserido com Sucesso";
        header("Location: cadastro.php");
        exit(0);
    }
    else
    {
        $_SESSION['mensagem'] = "Contato não Inserido";
        header("Location: cadastro.php");
        exit(0);
    }
}

?>