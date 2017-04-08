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
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Código</th>
                                                <th>Nome</th>
                                                <th>Cnpj</th>
                                                <th>Razão</th>
                                                <th>Endereço</th>
                                                <th>Complemento</th>
                                                <th>Cep</th>
                                                <th>Telefone</th>
                                                <th>Web</th>
                                                <th>Alterar</th>
                                                <th>Excluir</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <form role='form' method='get' action=atualizar.php>
                                            <input name=id type=hidden value=<?= $arr['idtblClientes'] ?>>
                                            <tr>
                                            <td> <?= $arr['idtblClientes'] ?></td>
                                            <td><input name=nome type=text value=<?= $arr['tblClientesNome'] ?>></td>
                                            <td><input name=cnpj type=text value=<?= $arr['tblClientesCnpj'] ?>></td>
                                            <td><input name=razao type=text value=<?= $arr['tblClientesRazao'] ?>></td>
                                            <td><input name=endereco type=text value=<?= $arr['tblClientesEndereco'] ?>></td>
                                            <td><input name=complemento type=text value=<?= $arr['tblClientesComplemento'] ?>></td>
                                            <td><input name=cep type=text value=<?= $arr['tblClientesCep'] ?>></td>
                                            <td><input name=telefone type=text value=<?= $arr['tblClientesTelefone'] ?>></td>
                                            <td><input name=web type=text value=<?= $arr['tblClientesWeb'] ?>></td>
                                            <td><input name=alterar type=submit value=Alterar></td>
                                            <td><a class=btn href=excluir.php?id=<?=$arr['idtblClientes'] ?>>Excluir</a></td>
                                            </tr>
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
