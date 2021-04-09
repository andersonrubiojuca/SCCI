<?php
$cabecalho_title = "Formulario de Estrutura";
include 'php/cabecalho.php';
?>
<section class="formulario container">
    <div class="row">
        <div class="col-lg-12 col-md-8" id="form">
            <form action="php/Envio.php" method="POST" class="estrutura">
                <fieldset>
                    <legend><b>Diga-nos qual o problema:</b></legend>
                    <label for="nome">Nome <span style="color: red; font-size: 70%;">(opcional)</span></label>
                    <input type="text" class="form-control" id="nome" 
                           name="nome">
                    <label for="local">Ala*</label>
                    <select name="local" class="form-control">
                        <option>Outros</option>
                    </select>
                    <label for="sala">Em qual sala*</label>
                    <input type="text" class="form-control" name="sala" id="sala">
                    <label for="problema">Diga-nos qual o problema*</label>
                        <textarea name="problema" id="problema" class="form-control" cols="30" rows="10"></textarea>
                    <input type="hidden" name="tipo" value="estrutura">
                <span class="pequeno">* - Campos Obrigatórios</span>
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