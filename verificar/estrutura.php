<!DOCTYPE html>
<html>
    <head>
        <title>Estrutura</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-widh">
        <link href="../css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="../css/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
        <link href="css/Login.css" rel="stylesheet" type="text/css"/> 
        <link rel="icon" type="image/ico" href="../imagens/icone.ico">
        
        <?php
            $estrutura = mysqli_fetch_array($sql);
            $blocal;
            $scorredor;
            $masculino;
            $feminino;
            $direito;
            $esquerdo;
            $sabonete;
            $papelhigienico;
            $papeltoalha;
            
            if($estrutura["ban_local"] == "NULL"){
                $blocal = "";
            } else {
                $blocal = $estrutura["ban_local"];
            }
            if($estrutura["sala_corredor"] == "NULL"){
                $scorredor = "";
            } else {
                $scorredor = $estrutura["sala_corredor"];
            }
            
            if($estrutura["ban_sexo"] == 1){
                $masculino = "checked";
                $feminino = "";
            } elseif ($estrutura["ban_sexo"] == 2) {
                $masculino = "";
                $feminino = "checked";
            } else {
                $masculino = "";
                $feminino = "";
            }
            if($estrutura["lado"]){
                $direito = "checked";
                $esquerdo = "";
            } elseif (!$estrutura["lado"]) {
                $direito = "";
                $esquerdo = "checked";
            } else {
                $direito = "";
                $esquerdo = "";
            }
            
            if($estrutura["m_sabonete"]){
                $sabonete = "checked";
            } else {
                $sabonete = "";
            }
            if($estrutura["m_papel_h"]){
                $papelhigienico = "checked";
            } else {
                $papelhigienico = "";
            }
            if($estrutura["m_papel_t"]){
                $papeltoalha = "checked";
            } else {
                $papeltoalha = "";
            }
            
            if(!isset($_SESSION)) {
                    session_start();
                }
            if(!isset($_SESSION['login'])){
                     session_destroy();
                     header("location:../index.php");
                                      exit();
                 }
            ?>

         
        
    </head>
    <body>
        <section class="container">
        <div class="row">
            <div class="col-lg-12">
            <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" 
                           name="nome" value="<?= $estrutura["nome"]?>" disabled>
                    <label for="local">Local</label>
                    <select name="local" class="form-control" disabled>
                        <option><?= $estrutura["local"]?></option>
                    </select>
                    <label for="tipo-de-problema">Problema</label>
                    <select name="problema" class="form-control" disabled>
                        <option><?= $estrutura["problema"]?></option>
                    </select>
                    <div class="row">
                        <div class="col-lg-6">
                            <p><label>Caso seja o banheiro</label></p>
                            <label>Gênero:</label>
                            <p><label>Masculino</label>
                            <input type="radio" class="form-check-input" id="sexo"
                                   name="sexo" value="Masculino" <?= $masculino?> disabled>
                            <label>Feminino</label>
                            <input type="radio" class="form-check-input" id="sexo"
                                   name="sexo" value="Feminino" <?= $feminino?> disabled></p>
                            <label>Local</label>
                            <select name="ban_local" class="form-check-input" disabled>
                                <option><?= $blocal?></option>
                            </select>
                            <label>Lado:</label>
                            <p><label>Direito</label>
                            <input type="radio" class="form-check-input" id="lado"
                                      name="lado" value="Direito" <?= $direito?> disabled>
                            <label>Esquerdo</label>
                            <input type="radio" class="form-check-input" id="lado"
                                      name="lado" value="Esquerdo" <?= $esquerdo?> disabled></p>
                        </div>
                        <div class="col-lg-6">
                            <p><label>Caso seja uma sala</label></p>
                            <label>Sala</label>
                            <div class="row">
                                <div class="col-lg-2">
                                    <input type="text" id="sala" class="form-control" name="sala"
                                           placeholder="000" data-mask="999" value="<?= $estrutura["sala"]?>" disabled>
                                </div>
                            </div>
                            <label>Corredor:</label>
                            <select name="sala-corredor" class="form-check-input" disabled>
                                <option><?= $scorredor?></option>
                            </select>
                            <p><label>Tipo de Material de Higiene</label></p>
                            <p><input class="form-check-input" type="checkbox" id="Sabonetelíquido"
                                      value="Sabonete líquido" name="Sabonetelíquido" <?= $sabonete?> disabled>Sabonete líquido</p>
                            <p><input class="form-check-input" type="checkbox" id="PapelHigiênico"
                                      value="Papel Higiênico" name="PapelHigiênico" <?= $papelhigienico?> disabled>Papel Higiênico</p>
                            <p><input class="form-check-input" type="checkbox" <?= $papeltoalha?> id="Papeltoalha"
                                      value="Papel toalha" name="Papeltoalha" disabled>Papel toalha</p>
                        </div>
                    </div>
                    <form action="alteracao.php" method="POST">
                        <label for="resposta">Resposta</label>
                        <textarea name="resposta" id="conteudo" rows="1" cols="50" class="form-control"><?=$estrutura["retorno"]?></textarea>
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-2">
                                <input type="submit" id="Enviar" value="Enviar" name="action" class="btn btn-default navbar-btn">
                            </div>
                            <div class="col-lg-2">
                                <button type="button" class="btn btn-default navbar-btn" onclick="window.close()">
                                    Fechar
                                </button>
                                <input type="hidden" id="protocolo" name="protocolo" value="<?= $protocolo?>">
                                <input type="hidden" id="tipo" name="tipo" value="estrutura">
                            </div>
                            <div class="col-lg-2">
                                <input type="submit" value="Terminar" name="action" id="Terminar" class="btn btn-default navbar-btn">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>