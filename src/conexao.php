<?php
    class Conexao {
        var $cr;
        function conectar(){
            $this->cr = new mysqli("localhost", "root", "usbw", "storm-db");
            if($this->cr->connect_error){
                die ("Deu ruim<br/>".$this->cr->connect_error);
            }else {
                echo "conectado com sucesso!";
            }
        }
    }
?>