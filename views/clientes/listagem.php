            <div id="wrapper">
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
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
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <form role='form' method='get' action=atualizar.php>
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
                                                        <a class=btn href="#">
                                                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                                        </a>
                                                        <a class=btn href=excluir.php?id=<?= $cliente->getId() ?>>
                                                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                            </form>
                                        </tbody>
                                    </table>
                                </form>
                                    <a href="../sistema.php" class="btn btn-danger" style="float: right">Voltar</a>
                                </div>
                                <!-- /.table-responsive -->
                            </div>
                            <!-- /.panel-body -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
