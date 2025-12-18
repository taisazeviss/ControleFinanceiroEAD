<?php

    require_once '../DAO/EmpresaDAO.php';

    if(isset($_POST['btnGravar'])){
        $nome = strip_tags(trim($_POST['nome']));
        $telefone = strip_tags(trim($_POST['telefone']));
        $endereco = strip_tags(trim($_POST['endereco']));

        $objdao = new EmpresaDAO();
        $ret = $objdao->CadastrarEmpresa($nome, $telefone, $endereco);
    }

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
                        <h2>Nova Empresa</h2>
                        <h5>Aqui voce poderá cadastrar todas as empresas.</h5>
                        <?php include_once '_msg.php';  ?>
                    </div>
                </div>
                <hr />
                <form action="nova_empresa.php" method="POST">
                    <div class="form-group">
                        <label>Nome da empresa*</label>
                        <input class="form-control" placeholder="Digite o nome da empresa" name="nome" id="nome"/>
                    </div>
                    <div class="form-group">
                        <label>Telefone</label>
                        <input class="form-control" placeholder="Digite o telefone da empresa (Opcional)" name="telefone" id="telefone"/>
                    </div>
                    <div class="form-group">
                        <label>Endereço</label>
                        <input class="form-control" placeholder="Digite o endereço da empresa (Opcional)" name="endereco" id="endereco"/>
                    </div>
                    <button type="submit" class="btn btn-success" name="btnGravar" onclick="return ValidarEmpresa();">Gravar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>