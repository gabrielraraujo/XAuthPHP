<?php

    class XAuth_Model
    {
        /**
         * PDO Database Object
         * @var PDO
         */
        protected $pdo_object = null;
        
        /**
         * Tabela atual
         * @var type 
         */
        protected $current_table = "";
        
        /**
         * Construct
         * @param PDO $database_connection Link com o banco de dados 
         */
        public function __construct(PDO $database_connection = null){
            $this->pdo_object = $database_connection;
        }
        
        /**
         * Find One - Retorna apenas um registro de acordo com a busca
         * @param String $condition Condição Where
         * @param String $table Tabela atual
         * @return mixed Falso se não obtiver nenhum resultado ou um objeto com os dados do cliente
         * @throws Exception Caso o nome da tabela esteje vazio 
         */
        public function findOne($condition = null, $table = null){
            
            $current_table = (trim($table) == '' || $table == null) ? $this->current_table : $table;
            
            if(trim($current_table) == '')
                throw new Exception("O nome da tabela não pode ser vazio.");
            
            $condition = ($condition == null) ? "1 = 1" : $condition;
            
            $query = $this->pdo_object->query("SELECT * FROM `{$current_table}` WHERE {$condition}");
            
            return $query->fetch(PDO::FETCH_OBJ);
            
        }
    }