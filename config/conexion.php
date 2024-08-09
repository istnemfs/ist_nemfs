<?php
session_start();

class Conectar{
    protected $dbh;

    protected function Conexion(){
        try{$conectar = $this->dbh = new PDO("mysql:local=localhot;dbname=andercode_helpdesk","alud","ola39716842");

            return $conectar;
        }catch(Exception $e){
            print "Error DB!" . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function set_name() {
        return $this->dbh->query("SET NAMES 'utf8'");

    }
    public function ruta(){
        return "http://localhost:80/ist_nemfs/";
    }
}   

?>
