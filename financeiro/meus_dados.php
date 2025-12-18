<?php

    require_once '../DAO/UsuarioDAO.php';

    $objDAO = new UsuarioDAO();

    if(isset($_POST['btnSalvar'])){
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $senha = trim($_POST['senha']);
        $repSenha = trim($_POST['repSenha']);

        $ret = $objDAO->GravarMeusDados($nome, $email, $senha, $repSenha);
    }

    $dados = $objDAO->CarregarMeusDados();

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include_once '_head.php'; ?>

<body>
    <div id="wrapper">
        <?php
            include_once '_topo.php';
            include_once '_menu.php';
        ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Alterar Dados de Cadastro do Usuário.</h2>
                        <h5>Aqui você pode ALTERAR seus dados de cadastro.</h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <hr/>
                <form action="meus_dados.php" method="POST">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Digite seu Nome:</label>
                            <input type="text" class="form-control" placeholder="Digite seu Nome aqui..." name="nome" id="nome" value="<?= $dados[0]['nome_usuario'] ?>"/>
                        </div>
                        <div class="form-agroup">
                            <label>Digite seu E-mail:</label>
                            <input type="email" class="form-control" placeholder="Digite seu E-mail aqui..." name="email" id="email" value="<?= $dados[0]['email_usuario'] ?>"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Digite sua Nova Senha:</label>
                            <div class="ajuste1">
                                <input type="password" class="form-control tmh" placeholder="Digite uma nova Senha aqui..." name="senha" id="senha" value="<?= $dados[0]['senha_usuario'] ?>"/>
                                <img src="./assets/img/img_senha.png" id="olho1" alt="Icone de Ver Senha!" title="Icone de Ver Senha!" class="iconSenha1">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Repita sua Nova Senha:</label>
                            <div class="ajuste2">
                                <input type="password" class="form-control tmh" placeholder="Digite uma nova Senha aqui..." name="repSenha" id="repSenha" value="<?= $dados[0]['senha_usuario'] ?>"/>
                                <img src="./assets/img/img_senha.png" id="olho2" alt="Icone de Ver Senha!" title="Icone de Ver Senha!" class="iconSenha2">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-success" name="btnSalvar" onclick="return ValidarMeusDados();">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>

        //manipulao a visualizacao da Senha
        $( "#olho1" ).mousedown(function() {
            $("#senha").attr("type", "text");
        });

        $( "#olho1" ).mouseup(function() {
            $("#senha").attr("type", "password");
        });

        $( "#olho2" ).mousedown(function() {
            $("#repSenha").attr("type", "text");
        });

        $( "#olho2" ).mouseup(function() {
            $("#repSenha").attr("type", "password");
        });
    </script>
</body>
</html>