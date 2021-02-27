<?php
session_start();

include_once '../config/dbConfig.php';

class usuario
{
    private $con;

    public function __construct()
    {
        $this->con = new db();
    }

    public function login(array $dados)
    {

        $db = $this->con->conexao();

        $usuemail = $dados['usuemail'];
        $ususenha = $dados['ususenha'];

        try {

            $stmt = $db->prepare("SELECT usunome,ususenha from usuario where usuemail =?");
            $stmt->execute([$usuemail]);
            $dados = $stmt->fetch();

            if($dados['ususenha'] && $dados['ususenha'] == $ususenha){
                $_SESSION['usunome'] = $dados['usunome'];
                $_SESSION['usuemail'] = $usuemail;
            }

            header('Location: ../index.php');

        } catch (Exception $e) {
            print_r($e->getMessage());
        }

    }

    public function cadastrar(array $dados)
    {

    }
}