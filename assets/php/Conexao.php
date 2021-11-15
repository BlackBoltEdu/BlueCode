<?php
    class Conexao{
        private $PDO;

        public function __construct(){
            try{
                $this->PDO = new PDO('mysql:dbname=cantinhodopet;host=localhost', 'root', '');
            }catch(PDOException $e){
                echo "Erro de conexão com a base de dado: ". $e->getMessage();
            }catch(Exception $e){
                echo "Erro generico: ". $e->getMessage();
            }
        }
        
        public function getPDO(){
            return $this->PDO;
        }
    }
   
?>