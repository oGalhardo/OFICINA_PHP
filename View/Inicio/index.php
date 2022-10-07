<?php
require_once '../../Autoload.php';
require_once '../Componentes/cabecalho.php';


$acao = isset($_GET['a']) ? $_GET['a'] : 'noticias';

require_once '../../App/Controller/InicioController.php';

switch ($acao) {
    case 'detalhe':
        require_once 'pages/detalhe.php';
    break;
    case 'login':
        require_once 'pages/login.php';
    break;
    default: 
        require_once 'pages/noticias.php';
    break;
}

require_once '../Componentes/rodape.php';
