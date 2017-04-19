<?php

class DB{
    private $conn = null;

    public function __construct(){
        // Set DSN
        $dsn = 'mysql:host='.DB_Host.';dbname='.DB_Name;

        // Set options
        $options = array(
            PDO::ATTR_PERSISTENT    => false,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
        );

            // Create a new PDO instance
        try{
            $this->conn = new PDO($dsn, DB_Username, DB_Password, $options);
            }catch(PDOException $e){// Catch any errors
                echo 'Connection failed: ' . $e->getMessage();
            }

        }//__construct METHOD IS CALLED AUTOMATICALLY UPON CLASS CREATION(INSTANCE)

        function PDOquery($query, $aryParams, $returnvalues = true){

            //BIND - PREPARE
            $stmt = $this->conn->prepare($query);
            $results = $stmt->execute($aryParams);
            if ($returnvalues == true){
                $results = $stmt->fetchAll();
            }else{
                $results = $this->conn->lastInsertId();
            }

            return $results;
        }//END PDOquery method
    }//END DB CLASS
?>