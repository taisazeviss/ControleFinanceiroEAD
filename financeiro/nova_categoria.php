<?php

    require_once '../DAO/CategoriaDAO.php';

    if(isset($_POST['btnGravar'])){
        $nome = $_POST['nome'];

        $objdao = new CategoriaDAO();
        $ret = $objdao->CadastrarCategoria($nome);
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
                        <h2>Nova Categoria</h2>
                        <h5>Aqui voce poderá cadastrar todas as suas categorias.</h5>
                        <?php include_once '_msg.php';  ?>
                    </div>
                </div>
                <hr />
                <form method="POST" action="nova_categoria.php">
                    <div class="form-group">
                        <label>Nome da categoria</label>
                        <input class="form-control" placeholder="Digite o nome da categoria... Ex: conta de luz" name="nome" id="nomeCategoria"/>
                    </div>
                    <button type="submit" class="btn btn-success" onclick="return ValidarCategoria();" name="btnGravar">Gravar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>