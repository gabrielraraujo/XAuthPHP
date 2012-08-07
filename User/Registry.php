<?php

    /**
     *  XAuth - Biblioteca de autenticação para Web Services
     * 
     *  XAuth User Registry - Model de base para dados do usuario
     * 
     *  @author Gabriel Ribeiro <ribeirogabriel.95@gmail.com> 
     */
    class XAuth_User_Registry
    {
        protected $id = null;
        protected $username = null;
        protected $password = null;
        protected $locked = 0;
        protected $since = null;
        
        /**
         * Retorna o ID do cliente
         * @return null|String 
         */
        public function getId() {
            return $this->id;
        }

        /**
         * Define o ID do cliente
         * @param String $id
         * @return XAuth_User_Registry objeto base
         */
        public function setId($id) {
            $this->id = $id;
            return $this;
        }

        /**
         * Obtém o nome de usuario do cliente
         * @return null|String Nome do usuario
         */
        public function getUsername() {
            return $this->username;
        }

        /**
         * Define um nome de usuario
         * @param String $username Nome do usuario
         * @return XAuth_User_Registry objeto base
         */
        public function setUsername($username) {
            $this->username = $username;
            return $this;
        }

        /**
         * Retorna a senha do usuario
         * @return null|String Senha do usuario ou null
         */
        public function getPassword() {
            return $this->password;
        }

        /**
         * Define uma nova senha para o usuario
         * @param String $password Senha do usuario
         * @return XAuth_User_Registry objeto base 
         */
        public function setPassword($password) {
            $this->password = $password;
            return $this;
        }

        /**
         * Verifica se o usuario está bloqueado
         * @return boolean Verdadeiro caso bloqueado, falso caso desbloqueado
         */
        public function isLocked() {
            return (boolean) $this->locked;
        }

        /**
         * Bloquea usuario
         * @return XAuth_User_Registry objeto base 
         */
        public function lockUser() {
            $this->locked = 1;
            return $this;
        }

        /**
         * Desbloquea usuario
         * @return XAuth_User_Registry objeto base 
         */
        public function unlockUser() {
            $this->locked = 0;
            return $this;
        }
        
        /**
         * Retorna a data do cadastro do usuario 
         * @return null|String data do cadastro no formato AAAA-MM-DD HH:MM:SS
         */
        public function getSince() {
            return $this->since;
        }


    }