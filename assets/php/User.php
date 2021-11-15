<?php
    class User{
        private $nome;
        private $cpf;
        private $email;
        private $senha;
        private $tipoUser;
        
        //Get's e Setter's NOME COMPLETO
        public function getNome(){
            return $this->nome;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        //Get's e Setter's CPF
        public function getCpf(){
            return $this->cpf;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
            return $this;
        }
        
        //Get's e Setter's Email
        public function getEmail()        {
            return $this->email;
        }
        
        public function setEmail($email){
            $this->email = $email;
        }

        //Get's e Setter's SENHA
        public function getSenha(){
            return $this->senha;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }

        //Get's e Setter's TIPO DE USUÁRIO
        public function getTipoUser(){
            return $this->tipoUser;
        }

        public function setTipoUser($tipoUser){
            $this->senha = $tipoUser;
        }
    }
?>