<?php
class Connection {

    private $host = "sql306.byethost.com";
    private $dbname = "b3_22963838_empresa_courier";
    private $user = "b3_22963838";
    private $pass = "matoki123";
    private $DBH;

    function __construct() {

        try {

            $this->DBH = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
        }
        catch (PDOException $e) {

            echo $e->getMessage();
        }
    }

    public function closeConnection() {

        $this->DBH = null;
    }
}
?>


