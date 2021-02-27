<?php

include_once 'usuario.php';
$login = new usuario();

switch ($_REQUEST['requisicao']){
    case 'login':
        $login->login($_REQUEST);
        break;
    case 'cadastrar':
        $login->cadastrar($_REQUEST);
        break;
    default:
        header('Location: ../index.php');
}