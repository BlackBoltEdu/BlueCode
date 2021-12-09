<?php
    require_once "Conexao.php";
    class CrudFuncionarios{
        public function buscarTodosFunc(){
            $con = new Conexao();
            $resultado = array();
            
            $func = $con->getPDO()->query("SELECT * FROM funcionarios ORDER BY nome");
            $resultado = $func->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        }

        public function deletarFunc($id){
            $con = new Conexao();
            
            $delete = $con->getPDO()->prepare("DELETE FROM funcionarios WHERE id= :id");
            $delete->bindValue(':id', $id);
            $delete->execute();
        }

        public function buscarFuncionario($id){
            $con = new Conexao();
            $resultado = array();

            $selecionar = $con->getPDO()->prepare("SELECT * FROM funcionarios WHERE id = :id");
            $selecionar->bindValue(':id', $id);
            $selecionar->execute();

            $resultado = $selecionar->fetch(PDO::FETCH_ASSOC);
            return $resultado;
        }

        public function atualizarFuncionario($id, $nome, $email, $cpf, $cargo){
            $con = new Conexao();

            $buscarEmail = $con -> getPDO() -> prepare("SELECT id FROM funcionarios WHERE email = :email");
            $buscarEmail->bindValue(':email', $email);
            $buscarEmail->execute();

            // VERIFICA SE A CONSULTA RETORNOU ALGO.
            if($buscarEmail->rowCount() >= 1){
                // SE RETORNAR ELE TRANSFORMA E UM ARRAY OS DADOS QUE FORAM RETORNADOS.
                $ver = $buscarEmail->fetch(PDO::FETCH_ASSOC);
            }else{
                // SE NÂO ENCONTRAR O E-MAIL ELE COLOCA UM ARRAY VAZIO PARA NÃO ACONTECER ERRO NA VERIFICAÇÃO DO in_array.
                $ver = array();
            }
            
            if(in_array($id, $ver)){
                $atualizar = $con->getPDO()->prepare("UPDATE funcionarios SET nome = :nome, email = :email, cpf = :cpf, cargo = :cargo WHERE id = :id");
                $atualizar->bindValue(':nome', $nome);
                $atualizar->bindValue(':email', $email);
                $atualizar->bindValue(':cpf', $cpf);
                $atualizar->bindValue(':cargo', $cargo);
                $atualizar->bindValue(':id', $id);
                $atualizar->execute();
                return true;
            }else if($buscarEmail->rowCount() > 0){
                return false;
            }else{
                $atualizar = $con->getPDO()->prepare("UPDATE funcionarios SET nome = :nome, email = :email, cpf = :cpf, cargo = :cargo WHERE id = :id");
                $atualizar->bindValue(':nome', $nome);
                $atualizar->bindValue(':email', $email);
                $atualizar->bindValue(':cpf', $cpf);
                $atualizar->bindValue(':cargo', $cargo);
                $atualizar->bindValue(':id', $id);
                $atualizar->execute();
                return true;
            }
        }
    }
?>