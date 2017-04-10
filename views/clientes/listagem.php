            <div id="wrapper">
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <?php if(isset($cadastro) && $cadastro == true) { ?>
                            <p class="alert alert-success">Cadastro removido com sucesso</p>
                        <?php } if(isset($cadastro) && $cadastro == false) { ?>
                            <p class="alert alert-danger">Houve um problema ao remover o cadastro</p>
                        <?php } ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Lista de Clientes
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover table-condensed">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Cnpj</th>
                                                <th>Razão</th>
                                                <th>Endereço</th>
                                                <th>Complemento</th>
                                                <th>Cep</th>
                                                <th>Telefone</th>
                                                <th>Web</th>
                                                <th>Editar</th>
                                                <th>Excluir</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($clientes as $cliente): ?>
                                                <tr>
                                                    <td><?= $cliente->getNome() ?></td>
                                                    <td><?= $cliente->getCnpj() ?></td>
                                                    <td><?= $cliente->getRazao() ?></td>
                                                    <td><?= $cliente->getEndereco() ?></td>
                                                    <td><?= $cliente->getComplemento() ?></td>
                                                    <td><?= $cliente->getCep() ?></td>
                                                    <td><?= $cliente->getTelefone() ?></td>
                                                    <td><?= $cliente->getWeb() ?></td>
                                                    <td style="text-align: center;">
                                                        <form method="post" action="sistema.php?op=clientesfrmedita">
                                                            <input type="hidden" name="id" value="<?= $cliente->getId() ?>">
                                                            <button type="submit" class="btn btn-primary">
                                                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                                            </button>
                                                        </form>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <form method="post" action="sistema.php?op=clientesexclui">
                                                            <input type="hidden" name="id" value="<?= $cliente->getId() ?>">
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
