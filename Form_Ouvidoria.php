<?php
$cabecalho_title = "Ouvidoria";
include 'php/cabecalho.php';
?>
<section class="ouvidoria container">
    <div class="row">
        <div class="col-lg-12">
            <form action="php/Envio.php" method="POST" class="ouvidoria">
                <fieldset>
                    <legend style="color: red;font-size: 75%;">Não esqueça: apenas o campo Sugestões/Reclamações é obrigatório</legend>
                <label>Nome</label>
                <input type="text" class="form-control" id="nome" 
                           name="nome">
                <label>E-mail</label>
                <input type="email" class="form-control" id="email" name="email">
                <label>Sugestão/Reclamação</label>
                <textarea name="conteudo" id="conteudo" rows="4" cols="50" class="form-control" required></textarea>
                <input type="hidden" name="tipo" value="ouvidoria">
                </fieldset>
                <div class="row">
                    <div class="col-lg-2 col-md-2"></div>
                    <div class="col-lg-1 col-md-1">
                        <button type="submit" name="Ok" value="Ok" class="btn btn-default navbar-btn">
                            Ok
                        </button>
                    </div>
                    <div class="col-lg-2 col-md-2"></div>
                    <div class="col-lg-1 col-md-1">
                        <button type="reset" class="btn btn-default navbar-btn">
                            Limpar
                        </button>
                    </div>
                    <div class="col-lg-2 col-md-2"></div>
                    <div class="col-lg-2 col-md-1">
                        <a href="index.php"><button type="button" class="btn btn-default navbar-btn">
                            Voltar
                        </button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<?php
include 'php/rodape.php';