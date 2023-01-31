<?php
    $con = mysqli_connect("localhost","root","","cadastro");
    if(!$con){
        die('Falha na conexão!!!'. mysqli_connect_error());
    }

?>