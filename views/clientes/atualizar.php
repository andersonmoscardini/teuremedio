<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <?php if(isset($cadastro) && $cadastro == true) { ?>
                <p class="alert alert-success">Cadastro atualizado com sucesso</p>
            <?php } if(isset($cadastro) && $cadastro == false) { ?>
                <p class="alert alert-danger">Houve um problema ao atualizar o cadastro</p>
            <?php } ?>
            <legend><h3 style="text-align: center;">Atualização de Cliente</h3></legend>
            <div class="col-lg-6 col-md-6">
                <form role="form" method="post" action="sistema.php?op=clientesedita">
                    <input type="hidden" name="id" value="<?= $cliente->getId() ?>">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input class="form-control" placeholder="Digite o nome" name="nome" value="<?= $cliente->getNome() ?>">
                    </div>
                    <div class="form-group">
                        <label>Cnpj:</label>
                        <input class="form-control" placeholder="Digite um Cnpj" name="cnpj" value="<?= $cliente->getCnpj() ?>">
                    </div>
                    <div class="form-group">
                        <label>Razao:</label>
                        <input class="form-control" placeholder="Razão Social" name="razao" value="<?= $cliente->getRazao() ?>">
                    </div>
                    <div class="form-group">
                        <label>Endereço:</label>
                        <input class="form-control" placeholder="Digite seu endereço" name="endereco" value="<?= $cliente->getEndereco() ?>">
                    </div>
                    <div class="form-group">
                        <label>Complemento:</label>
                        <input class="form-control" placeholder="Complemento" name="complemento" value="<?= $cliente->getComplemento() ?>">
                    </div>
                    <div class="form-group">
                        <label>Cep:</label>
                        <input class="form-control" placeholder="99999-999" name="cep" value="<?= $cliente->getCep() ?>">
                    </div>
                    <div class="form-group">
                        <label>Telefone:</label>
                        <input class="form-control" placeholder="(xx) xxxx-xxxxx" name="telefone" value="<?= $cliente->getTelefone() ?>">
                    </div>
                    <div class="form-group">
                        <label>Pagina Web:</label>
                        <input class="form-control" placeholder="www.meu endereço.com.br" name="web" value="<?= $cliente->getWeb() ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Atualizar">
                        <a href="../views/sistema.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
