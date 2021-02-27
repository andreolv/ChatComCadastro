<?php

class db
{
    private $dbuser = 'andreolv@ambiente';
    private $dbpassword = '0l1v31r$';
    private $dbhost = 'ambiente.mysql.database.azure.com';
    private $dbname = 'olimpus';

    public function conexao()
    {
        $var = "mysql:host={$this->dbhost};dbname={$this->dbname}";
        $con = new PDO($var, $this->dbuser, $this->dbpassword);

        return $con;
    }
}

?>