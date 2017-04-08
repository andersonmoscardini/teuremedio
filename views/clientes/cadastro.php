<?php

if (isset($_POST['cadastrar'])) {
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_MAGIC_QUOTES);
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_MAGIC_QUOTES);
    $cnpj = filter_input(INPUT_POST, "cnpj", FILTER_SANITIZE_MAGIC_QUOTES);
    $razao = filter_input(INPUT_POST, "razao", FILTER_SANITIZE_MAGIC_QUOTES);
    $endereco = filter_input(INPUT_POST, "endereco", FILTER_SANITIZE_MAGIC_QUOTES);
    $complemento = filter_input(INPUT_POST, "complemento", FILTER_SANITIZE_MAGIC_QUOTES);
    $cep = filter_input(INPUT_POST, "cep", FILTER_SANITIZE_MAGIC_QUOTES);
    $telefone = filter_input(INPUT_POST, "telefone", FILTER_SANITIZE_MAGIC_QUOTES);
    $web = filter_input(INPUT_POST, "web", FILTER_SANITIZE_MAGIC_QUOTES);
} ?>

<div id="wrapper">

    <div id="page-wrapper">

        <div class="row">
            <legend><h3 style="text-align: center;">Cadastro de Clientes</h3></legend>
            <div class="col-lg-6 col-md-6">
                <form role="form" method="post" action="sistema.php?op=clientescadastro">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input class="form-control" placeholder="Digite o nome" name="nome">
                    </div>
                    <div class="form-group">
                        <label>Cnpj:</label>
                        <input class="form-control" placeholder="Digite um Cnpj" name="cnpj">
                    </div>
                    <div class="form-group">
                        <label>Razao:</label>
                        <input class="form-control" placeholder="Razão Social" name="razao">
                    </div>
                    <div class="form-group">
                        <label>Endereço:</label>
                        <input class="form-control" placeholder="Digite seu endereço" name="endereco">
                    </div>
                    <div class="form-group">
                        <label>Complemento:</label>
                        <input class="form-control" placeholder="Complemento" name="complemento">
                    </div>
                    <div class="form-group">
                        <label>Cep:</label>
                        <input class="form-control" placeholder="99999-999" name="cep">
                    </div>
                    <div class="form-group">
                        <label>Telefone:</label>
                        <input class="form-control" placeholder="(xx) xxxx-xxxxx" name="telefone">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label>Pagina Web:</label>
                            <input class="form-control" placeholder="www.meu endereço.com.br" name="web">
                        </div>

                        <input type="submit" class="btn btn-success" name="cadastrar" value="Cadastrar">
                        <a href="../layout.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
