<?php
    require_once "Conexao.php";
    class CrudFuncionarios{
        public function buscarFunc(){
            $con = new Conexao();
            $resultado = array();
            
            $func = $con->getPDO()->query("SELECT id, nome, email, cpf, tipoUse FROM usuario ORDER BY nome");
            $resultado = $func->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        }

        public function deletarFunc($id){
            $con = new Conexao();
            
            $delete = $con->getPDO()->prepare("DELETE FROM usuario WHERE id= :id");
            $delete->bindValue(':id', $id);
            $delete->execute();
        }
    }
?>