<?php
        $conn = null;
        function connect_to_db()
        {
            $dbengine   = 'mysql';
            $dbhost     = 'localhost';
            $dbuser     = 'root';
            $dbpassword = '';
            $dbname     = 'news_db';

            try{
                $conn = new PDO("".$dbengine.":host=$dbhost; dbname=$dbname", $dbuser,$dbpassword);
                $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                return $conn;
            }  
            catch (PDOException $e){
                $e->getMessage();
            }
        }