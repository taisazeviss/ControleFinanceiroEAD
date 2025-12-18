<?php

    require_once '../DAO/UsuarioDAO.php';

    if(isset($_POST['btnAcessar'])){
        $email = strip_tags(trim($_POST['email']));
        $senha = strip_tags(trim($_POST['senha']));

        $objDAO = new UsuarioDAO();
        $ret = $objDAO->ValidarLogin($email, $senha);
    }

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include_once '_head.php'; ?>

<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br />
                <br />
                <h2> Controle financeiro: ACESSO</h2>
                <h5>( Faça seu login )</h5>
                <br />
            </div>
        </div>
        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <?php include_once '_msg.php'; ?>
                    <div class="panel-heading">
                        <strong> Entre com seus dados </strong>
                    </div>
                    <div class="panel-body">
                        <form action="index.php" method="POST" role="form">
                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <input type="email" class="form-control" placeholder="Seu e-mail..." name="email" id="email"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Sua senha..." name="senha" id="senha"/>
                            </div>
                            <button type="submit" class="btn btn-primary" name="btnAcessar" onclick="return ValidarLogin();">Acessar</button>
                        </form>
                        <hr />
                        Caso não tenha Cadastro? <a href="cadastro.php">Clique aqui!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>