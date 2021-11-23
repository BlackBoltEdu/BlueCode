<?php
    class Conexao{
        private $PDO;

        public function __construct(){
            try{
                $this->PDO = new PDO('mysql:dbname=cantinhodopet;host=localhost', 'root', '');
            }catch(PDOException $e){
                echo "Erro de conexão com a base de dado: ". $e->getMessage();
            }catch(Exception $e){
                echo "Erro: ". $e->getMessage();
            }
        }
        
        public function getPDO(){
            return $this->PDO;
        }

        public function buscarFunc(){
            $con = new Conexao();
            $resultado = array();
            
            $teste = "SELECT nome, email, cpf, tipoUse FROM usuario ORDER BY nome";
            $func = $con->getPDO()->query($teste);
            $resultado = $func->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        } 
    } 
?>