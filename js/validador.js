$(function(){

	$('.input_cpf_cnpj').blur(function(){

        var cpf_cnpj = $(this).val();

        console.log( valida_cpf_cnpj($(this).val()) );

        if ( valida_cpf_cnpj( cpf_cnpj ) ) {
            
            $(this).css("border-color", "#1F5C1F");
            $('.label_cpf_cnpj').css("color", "#1F5C1F");
            
            
        } else {
        	
            $(this).css("border-color", "#CC0000");
            $('.label_cpf_cnpj').css("color", "#CC0000");
            
        }
        
    });

    $('.input_cpf_cnpj').focus(function() {
        $('.label_cpf_cnpj').css("color", "#1F5C1F");
    });

});

function cpf() {
    var cpf_cnpj = $('.input_cpf_cnpj').val();

    if ( valida_cpf_cnpj( cpf_cnpj ) ) {
        return true;
    } else {
        return false;
    }
}