<?php
    header("Access-Control-Allow-Origin: *");
    echo "Ola, eu sou uma API";
    include("conexao.php");
    $minhaconexao = new Conexao();
    $minhaconexao->conectar();  
?>