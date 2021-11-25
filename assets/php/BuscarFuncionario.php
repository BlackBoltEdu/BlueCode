<?php
    require_once "Conexao.php";
    class BuscarFuncionario{
        public function buscarFunc(){
            $con = new Conexao();
            $resultado = array();
            
            $func = $con->getPDO()->query("SELECT nome, email, cpf, tipoUse FROM usuario ORDER BY nome");
            $resultado = $func->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        }
    }
?>