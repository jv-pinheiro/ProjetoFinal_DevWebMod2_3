<?php
    session_start();
    require_once ("../Model/os.php");
    require_once ("../Model/osDAO.php");

    $acao = $_GET["acao"];
    $osDAO = new osDAO();

    if($acao == 'cadastrar'){
        $solicitante = $_POST["nSolicitante"];
        $contato = $_POST["contatoSoli"];
        $sobre = $_POST["sobre"];
        $tE = $_POST["trouxeEquip"];
        $exe = $_POST["nExecutor"];

        $os = new Os();
        $os->setNSolicitante($solicitante);
        $os->setContatoSoli($contato);
        $os->setSobre($sobre);
        $os->setTrouxeEquip($tE);
        $os->setNExecutor($exe);

        $osDAO->inserir($os);

        header("Location: controle.php?acao=listar");
    }else if ($acao == 'listar'){
        $_SESSION["oss"] = $osDAO->recuperar();
        header('Location: ../View/listar.php');
    }
    else if ($acao == 'excluir'){
        $id = $_GET["id"];
        $os = new Os();
        $os->setId($id);
        $osDAO->excluir($os);
        header('Location: ../Control/controle.php?acao=listar');
    }
    else if($acao == 'recuperar'){
        $id = $_GET["id"];
        $os = $osDAO->recuperarPorID($id);
        $_SESSION["os"]=$os;
        header('Location: ../View/formEdicaoOs.php');
    }
    else if($acao == 'editar'){
        $id = $_POST["id"];
        $solicitante = $_POST["nSolicitante"];
        $contato = $_POST["contatoSoli"];
        $sobre = $_POST["sobre"];
        $tE = $_POST["trouxeEquip"];
        $exe = $_POST["nExecutor"];

        $os = new Os();
        $os->setId($id);
        $os->setNSolicitante($solicitante);
        $os->setContatoSoli($contato);
        $os->setSobre($sobre);
        $os->setTrouxeEquip($tE);
        $os->setNExecutor($exe);

        $osDAO->atualizar($os);

        header('Location: ../Control/controle.php?acao=listar');
    }
?>