$(function() {
    $("#bdate").mask("99.99.9999");
    $("#phone").mask("+7(999) 999-99-99", {placeholder: "+7(___) ___-__-__" });
    $("#snils").mask("999-999-999 99");
    $("#dserial").mask("99 99");
    $("#dnumber").mask("999999");
  });

$(document).ready(function () {
    
    $('#document').on('change', function(){
        switch($('#document option:selected').val()) {
            case '0':
                document.getElementById('dserial').hidden = false;  
                $("#dserial").mask("99 99");
                $("#dnumber").mask("999999");              
            break;
            case '1':
                document.getElementById('dserial').hidden = true;
                $("#dnumber").mask("99999999");
            break;
            case '2':
                document.getElementById('dserial').hidden = false;
                $("#dnumber").mask("999999");
                $("#dserial").unmask();
               
            break;
            case '3':
                document.getElementById('dserial').hidden = true;
                $.mask.definitions['~']='[~!@#$%№]';
                $("#dnumber").mask("99~99999999999");  

            break;
        }
    });
});