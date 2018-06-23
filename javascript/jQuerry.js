/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$('[name=tamanho]').on('input', function(){
    $('[name=valortamanho]').val(this.value);
});
