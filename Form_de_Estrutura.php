<?php
$cabecalho_title = "Formulario de Estrutura";
include 'php/cabecalho.php';
?>
<section class="formulario container">
    <div class="row">
        <div class="col-lg-12">
            <form action="php/Envio.php" method="POST" class="estrutura">
                <fieldset>
                    <legend><b>Diga-nos qual o problema:</b></legend>
                    <label for="nome">Nome <span style="color: red; font-size: 70%;">(opcional)</span></label>
                    <input type="text" class="form-control" id="nome" 
                           name="nome">
                    <label for="local">Local</label>
                    <select name="local" class="form-control">
                        <option>Biblioteca</option>
                        <option>Cantina</option>
                        <option>CDA</option>
                        <option>Direção</option>
                        <option>Gestão de Crédito</option>
                        <option>Lab. Redes</option>
                        <option>Lab II</option>
                        <option>Lab III</option>
                        <option>Banheiro (Especificar abaixo)</option>
                        <option>Sala de Aula (Especificar abaixo)</option>
                        <option>Corredor (Especificar abaixo)</option>
                    </select>
                    <label for="tipo-de-problema">Problema</label>
                    <select name="problema" class="form-control">
                        <option>Ar condicionado não funciona</option>
                        <option>Cadeira quebrada</option>
                        <option>Lâmpada queimada</option>
                        <option>Quadro arranhado</option>
                        <option>Tomada não funciona</option>
                        <option>Janela quebrada</option>
                        <option>Cadeira suja</option>
                        <option>Cadeira em qtde insuficiente</option>
                        <option>Equipamento audio/visual não funciona</option>
                        <option>Quadro sujo</option>
                        <option>Sala suja</option>
                        <option>Sala desorganizada</option>
                        <option>"Escada com ploblema</option>
                        <option>Escada escorregando</option>
                        <option>Escada suja</option>
                        <option>Rampa suja</option>
                        <option>Rampa com problema de iluminação</option>
                        <option>Banheiro sujo"</option>
                        <option>Vaso entupido"</option>
                        <option>Descarga vazando</option>
                        <option>Falta de material de higiene no banheiro (Especificar abaixo)</option>
                        <option>Torneira quebrada</option>
                        <option>Falta água</option>
                    </select>
                    <div class="row">
                        <div class="col-lg-6">
                            <p><label>Caso seja o banheiro</label></p>
                            <label>Gênero:</label>
                            <p><label>Masculino</label>
                            <input type="radio" class="form-check-input" id="sexo"
                                   name="sexo" value="Masculino">
                            <label>Feminino</label>
                            <input type="radio" class="form-check-input" id="sexo"
                                   name="sexo" value="Feminino"></p>
                            <label>Local</label>
                            <select name="ban_local" class="form-check-input">
                                <option></option>
                                <option>Terreo</option>
                                <option>1 Andar</option>
                                <option>2 Andar</option>
                                <option>3 Andar</option>
                                <option>Anexo</option>
                                <option>Cantina</option>
                            </select>
                            <label>Lado:</label>
                            <p><label>Direito</label>
                            <input type="radio" class="form-check-input" id="lado"
                                      name="lado" value="Direito">
                            <label>Esquerdo</label>
                            <input type="radio" class="form-check-input" id="lado"
                                      name="lado" value="Esquerdo"></p>
                        </div>
                        <div class="col-lg-6">
                            <p><label>Caso seja uma sala</label></p>
                            <label>Sala</label>
                            <div class="row">
                                <div class="col-lg-2">
                                    <input type="text" id="sala" class="form-control" name="sala"
                                           placeholder="000" data-mask="999">
                                </div>
                            </div>
                            <label>Corredor:</label>
                            <select name="sala_corredor" class="form-check-input">
                                <option></option>
                                <option>Terreo</option>
                                <option>1 Andar</option>
                                <option>2 Andar</option>
                                <option>3 Andar</option>
                                <option>Anexo</option>
                            </select>
                            <p><label>Tipo de Material de Higiene</label></p>
                            <p><input class="form-check-input" type="checkbox" id="Sabonetelíquido"
                                      value="Sabonete líquido" name="Sabonetelíquido">Sabonete líquido</p>
                            <p><input class="form-check-input" type="checkbox" id="PapelHigiênico"
                                      value="Papel Higiênico" name="PapelHigiênico">Papel Higiênico</p>
                            <p><input class="form-check-input" type="checkbox" id="Papeltoalha"
                                      value="Papel toalha" name="Papeltoalha">Papel toalha</p>
                        </div>
                    </div>
                    <input type="hidden" name="tipo" value="estrutura">
                </fieldset>
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-1">
                        <button type="submit" name="Ok" value="Ok" class="btn btn-default navbar-btn">
                            Ok
                        </button>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-1">
                        <button type="reset" class="btn btn-default navbar-btn">
                            Limpar
                        </button>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-2">
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