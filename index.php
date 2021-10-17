<!DOCTYPE html>
<html>
<head>
	<title>Autenticação</title>
	<link rel="shortcut icon" href="data:image/png;base64,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">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="entradas">
            <div class="container border-top margin-top">
                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <div class="card" style="width: 30rem; margin-top: 10rem;" align="center">
                            <p class="erro">
                                <?php 
                                    if (isset($_GET["erro"])) {
                                        if ($_GET["erro"]==1) {?>
                                            <div class="alert alert-danger" role="alert"> 
                                                Usuário e senha inválidos.
                                            </div>
                                        <?php }
                                        if ($_GET["erro"]==2) {?>
                                            <div class="alert alert-secondary" role="alert"> 
                                                Efetue login para acessar a página.
                                            </div>
                                        <?php }
                                    }
                                ?>
                            </p>
                            <div class="card-title text-center">
                                <img style="width: 100px;" src="https://static.wixstatic.com/media/4da27e_301802db73f14dc8bde0c0bfcdec209f~mv2.png/v1/fit/w_2500,h_1330,al_c/4da27e_301802db73f14dc8bde0c0bfcdec209f~mv2.png">
                            </div>
                            <br>
                            <form action="auth.php" method="POST">
                                <div class="mb-3 form-group">
                                    <label for="usuario">Usuário: </label>
                                    <input type="text" name="usuario" value="<?php echo isset($_COOKIE["usuario"])?$_COOKIE["usuario"]:""; ?>">
                                </div>
                                <div class="mb-3 form-group">
                                    <label for="senha">Senha: </label>
                                    <input type="password" name="senha" value="<?php echo isset($_COOKIE["senha"])?$_COOKIE["senha"]:""; ?>">
                                </div>
                                <br>
                                <div class="mb-3 form-group">
                                    <input class="btn btn-info" type="submit" value="Login">
                                </div>                                
                            </form>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <footer>
        <ul class="list-inline list-group list-group-horizontal">
            <li><a href="https://instagram.com/_jv.pinheiro"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.facebook.com/jvspinheiro"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCTqq1InNM-YCQyIPunWUh6A"><i class="fab fa-youtube"></i></a></li>
            <li><a href="https://github.com/jv-pinheiro"><i class="fab fa-github"></i></a></li>
        </ul>
        <p>Desenvolvido com 🤘🏽 por <a href="https://www.linkedin.com/in/jo%C3%A3o-victor-pinheiro-a74946125">João Victor Pinheiro</a>.</p>
    </footer>
</body>
</html>