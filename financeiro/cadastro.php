<?php

    require_once '../DAO/UsuarioDAO.php';

    if(isset($_POST['btnCadastrar'])){
        $nome = strip_tags(trim($_POST['nome']));
        $email = strip_tags(trim($_POST['email']));
        $senha = strip_tags(trim($_POST['senha']));
        $repSenha = strip_tags(trim($_POST['repSenha']));

        $objDAO = new UsuarioDAO();
        $ret = $objDAO->CadastrarUsuario($nome, $email, $senha, $repSenha);
    }

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php

include_once '_head.php';
?>

<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br />
                <br />
                <h2> Controle Financeiro: Cadastro</h2>
                <h5>( Faça seu cadastro )</h5>
                <br />
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <?php include_once '_msg.php'; ?>
                    <div class="panel-heading">
                        <strong> Preencher todos os campos </strong>
                    </div>
                    <div class="panel-body">
                        <form action="cadastro.php" method="POST" role="form">
                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
                                <input type="text" class="form-control" placeholder="Seu nome" name="nome" id="nome"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input type="email" class="form-control" placeholder="Seu e-mail" name="email" id="email"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Crie uma senha (mínimo 6 caracteres)" name="senha" id="senha"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input type="password" class="form-control" placeholder="Repita a senha criada" name="repSenha" id="repSenha"/>
                            </div>
                            <button type="submit" class="btn btn-success" name="btnCadastrar" onclick="return ValidarCadastro();">Cadastrar</button>
                        </form>
                        <hr />
                        Já possui Cadastro ? <a href="index.php">Clique aqui!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>