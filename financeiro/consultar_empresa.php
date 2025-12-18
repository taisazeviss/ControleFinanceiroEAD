<?php
require_once '../DAO/EmpresaDAO.php';

$objDAO = new EmpresaDAO();
$empresas = $objDAO->ConsultarEmpresa();

?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
include_once '_head.php';
?>

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
                        <h2>Consultar empresa</h2>
                        <h5>Consultar todas as empresas aqui</h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Empresas cadastradas. Caso deseja alterar, clique no botão
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Qtds.</th>
                                                <th>Nome da empresa</th>
                                                <th>Telefone</th>
                                                <th>Endereço</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; foreach($empresas as $itens){?>
                                                <td><?=  $i++ ?></td> 
                                                <td><?= $itens['nome_empresa'] ?></td>
                                                <td><?= $itens['telefone_empresa'] ?></td>
                                                <td><?= $itens['endereco_empresa'] ?></td>
                                                <td>
                                                    <a href="alterar_empresa.php?cod=<?=  $itens['id_empresa'] ?>" class="btn btn-warning btn-sm"> Alterar </a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>