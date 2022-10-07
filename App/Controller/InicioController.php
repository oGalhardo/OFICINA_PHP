<?php require_once  '../../Autoload.php';
switch ($acao) {
    case 'detalhe':
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $noticia = new Noticias();
            $item = $noticia->getPeloId($id);
            $item = $item[0] ?? null;
        }
        break;
        case 'login':
            if(isset($_POST['email']) && isset($_POST['senha'])){
                $usuario = New Usuarios();
                $usuario->login($_POST['email'],$_POST['senha']);
            }
        break;
        case 'sair':
            session_destroy();
            echo '
                <script>
                    window.location.href = "index.php?a=login"
                </script>
            ';
        break;
    default:
        $noticia = new Noticias();
        $noticias = $noticia->get();
    break;
}