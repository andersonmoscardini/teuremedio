<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <?php if (isset($cadastro) && $cadastro == true) { ?>
                <p class="alert alert-success">Cadastro atualizado com sucesso</p>
            <?php } if (isset($cadastro) && $cadastro == false) { ?>
                <p class="alert alert-danger">Houve um problema ao atualizar o cadastro</p>
            <?php } ?>
            <legend><h3 style="text-align: center;">Atualização de Categorias</h3></legend>
            <div class="col-lg-6 col-md-6">
                <form role="form" method="post" action="sistema.php?op=categoriasedita">
                    <input type="hidden" name="id" value="<?= $categoria->getIdCat() ?>">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input class="form-control" placeholder="Digite o nome" name="nome" value="<?= $categoria->getCatNome() ?>">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" name="cadastrar" value="Atualizar">
                        <a href="../views/sistema.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
