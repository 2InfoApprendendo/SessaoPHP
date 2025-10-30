<?php
require_once '../conn.php';
class Users
{
    public $login = "";
    public $senha = "";

    protected $sql = "CREATE TABLE IF NOT EXISTS usuarios";

    private function createTable($conn, $sql)
    {
        if (mysqli_query($conn, $sql)) {
            echo "Tabela criada";
        }
    }

}