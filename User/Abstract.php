<?php

    class XAuth_User_Abstract extends XAuth_Model
    {
        protected $pdo_database_connection = null;
        protected $current_table = "xauth_user";
        
        /**
         * Resgata um usuario pelo ID
         * @param String|int $id ID do usuario
         * @return mixed Dados do usuario ou false em caso de erro
         */
        public function getUserByID($id){
            return $this->findOne("id = {$id}");
        }
        
        /**
         * Resgata um usuario pelo nome de usuario
         * @param String|int $id nome do usuario
         * @return mixed Dados do usuario ou false em caso de erro
         */
        public function getUserByUsername($username){
            $username = addslashes($username);
            return $this->findOne("username = '{$username}'");
        }
        
    }