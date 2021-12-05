<?php
    require_once "Conexao.php";
    class CrudFuncionarios{
        public function buscarTodosFunc(){
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

        public function buscarFuncionario($id){
            $con = new Conexao();
            $resultado = array();

            $selecionar = $con->getPDO()->prepare("SELECT * FROM usuario WHERE id = :id");
            $selecionar->bindValue(':id', $id);
            $selecionar->execute();

            $resultado = $selecionar->fetch(PDO::FETCH_ASSOC);
            return $resultado;
        }

        public function atualizarFuncionario($id, $nome, $email, $cpf, $tipoUse){
            $con = new Conexao();

            $buscarEmail = $con -> getPDO() -> prepare("SELECT id FROM usuario WHERE email = :email");
            $buscarEmail->bindValue(':email', $email);
            $buscarEmail->execute();

            if($buscarEmail->rowCount() > 0){
                return false;
            }else{
                $atualizar = $con->getPDO()->prepare("UPDATE usuario SET nome = :nome, email = :email, cpf = :cpf, tipoUse = :cargo WHERE id = :id");
                $atualizar->bindValue(':nome', $nome);
                $atualizar->bindValue(':email', $email);
                $atualizar->bindValue(':cpf', $cpf);
                $atualizar->bindValue(':cargo', $tipoUse);
                $atualizar->bindValue(':id', $id);
                $atualizar->execute();
                return true;
            }
        }
    }
?>