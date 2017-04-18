<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <?php if(isset($cadastro) && $cadastro == true) { ?>
                <p class="alert alert-success">Cadastro atualizado com sucesso</p>
            <?php } if(isset($cadastro) && $cadastro == false) { ?>
                <p class="alert alert-danger">Houve um problema ao atualizar o cadastro</p>
            <?php } ?>
            <legend><h3 style="text-align: center;">Atualização de Produtos</h3></legend>
            <div class="col-lg-6 col-md-6">
                <form role="form" method="post" action="sistema.php?op=produtosedita">
                    <input type="hidden" name="id" value="<?= $produto->getId() ?>">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input class="form-control" placeholder="Digite o nome" name="nome" value="<?= $produto->getNome() ?>">
                    </div>
                    <div class="form-group">
                        <label>Laboratório:</label>
                        <input class="form-control" placeholder="Digite um laboratório" name="laboratorio" value="<?= $produto->getLaboratorio() ?>">
                    </div>
                    <div class="form-group">
                        <label>Categoria:</label>
                        <select class="form-control" name="categoria">
                            <option value="<?= $produto->getCategoria()->getIdCat() ?>"><?= $produto->getCategoria()->getCatNome() ?></option>
                            <?php foreach ($categorias as $categoria): ?>
                                <option value="<?= $categoria->getIdCat() ?>"><?= $categoria->getCatNome() ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Cliente:</label>
                        <select class="form-control" name="cliente">
                            <option value="<?= $produto->getCliente()->getId() ?>"><?= $produto->getCliente()->getNome() ?></option>
                            <?php foreach ($clientes as $cliente): ?>
                                <option value="<?= $cliente->getId() ?>"><?= $cliente->getNome() ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" name="cadastrar" value="Cadastrar">
                        <a href="../views/sistema.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
