<div id="wrapper">
    <div id="page-wrapper">
        <div class="row">
            <?php if (isset($cadastro) && $cadastro == true) { ?>
                <p class="alert alert-success">Cadastro realizado com sucesso</p>
            <?php } if (isset($cadastro) && $cadastro == false) { ?>
                <p class="alert alert-danger">Houve um problema ao realizar o cadastro</p>
            <?php } ?>
            <legend><h3 style="text-align: center;">Cadastro de Categorias</h3></legend>
            <div class="col-lg-6 col-md-6">
                <form role="form" method="post" action="sistema.php?op=categoriascadastro">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input class="form-control" placeholder="Digite o nome" name="nome">
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
