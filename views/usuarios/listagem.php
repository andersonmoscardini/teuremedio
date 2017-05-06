<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <?php if (isset($cadastro) && $cadastro == true) { ?>
                    <p class="alert alert-success">Cadastro removido com sucesso</p>
                <?php } if (isset($cadastro) && $cadastro == false) { ?>
                    <p class="alert alert-danger">Houve um problema ao remover o cadastro</p>
                <?php } ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Lista de Categorias
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover table-condensed">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nome</th>
                                        <th>E-mail</th>
                                        <th>Editar</th>
                                        <th>Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($usuarios as $usuario): ?>
                                        <tr>
                                            <td><?= $usuario->getId() ?></td>
                                            <td><?= $usuario->getNome() ?></td>
                                            <td><?= $usuario->getEmail()?></td>
                                            <td style="text-align: center;">
                                                <form method="post" action="sistema.php?op=usuariosfrmedita">
                                                    <input type="hidden" name="id" value="<?= $usuario->getId() ?>">
                                                    <button type="submit" class="btn btn-primary">
                                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                    </button>
                                                </form>
                                            </td>
                                            <td style="text-align: center;">
                                                <form method="post" action="sistema.php?op=usuariosexclui">
                                                    <input type="hidden" name="id" value="<?= $usuario->getId() ?>">
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
