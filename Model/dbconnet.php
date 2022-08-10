<?php
//db=database
    abstract class dbConnect{

        private $db_username='Dayanechronos';
        private $db_password='#cortana4002';

        protected function Connected(){
            
            return new PDO("mysql:host=localhost;dbname=data_db",$this->db_username,$this->db_password);
        }
    }
