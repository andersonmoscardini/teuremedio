<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <?php if (isset($cadastro) && $cadastro == true) { ?>
                    <p class="alert alert-success">Produto removido com sucesso</p>
                <?php } if (isset($cadastro) && $cadastro == false) { ?>
                    <p class="alert alert-danger">Houve um problema ao remover o produto</p>
                <?php } ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Lista de Produtos
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover table-condensed">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nome</th>
                                        <th>Laboratório</th>
                                        <th>Categoria</th>
                                        <th>Cliente</th>
                                        <th>Editar</th>
                                        <th>Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($produtos as $produto): ?>
                                        <tr>
                                            <td><?= $produto->getId() ?></td>
                                            <td><?= $produto->getNome() ?></td>
                                            <td><?= $produto->getLaboratorio() ?></td>
                                            <td><?= $produto->getCategoria()->getCatNome() ?></td>
                                            <td><?= $produto->getCliente()->getNome() ?></td>
                                            <td style="text-align: center;">
                                                <form method="post" action="sistema.php?op=produtosfrmedita">
                                                    <input type="hidden" name="id" value="<?= $produto->getId() ?>">
                                                    <button type="submit" class="btn btn-primary">
                                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                    </button>
                                                </form>
                                            </td>
                                            <td style="text-align: center;">
                                                <form method="post" action="sistema.php?op=produtosexclui">
                                                    <input type="hidden" name="id" value="<?= $produto->getId() ?>">
                                                    <button type="submit" class="btn btn-danger">
                                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            </form>
                            <a href="../views/sistema.php" class="btn btn-danger" style="float: right">Voltar</a>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>

            </div>
        </div>
    </div>
</div>