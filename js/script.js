jQuery(function($){

$('#cookie-notice').attr('style', '');

    $('.link-to-top').click(function(e){
        e.preventDefault();
        $('html, body').animate({scrollTop: 0}, 300);
    });
    var checkInput = (function checkInput(){
        $('.input-row').each(function(i, el){
            activeInput(el);
        })
        return checkInput;
    }());

    function activeInput(el){
        if(!!$(el).find('input').val() || $(el).find('input').is(':focus')){
            $(el).addClass('active');
        } else {
            $(el).removeClass('active');
        }
    }

    $('.input-row input').focus(function(e){
        e.preventDefault();
        activeInput($(this).closest('.input-row'));
    });

    $('.input-row input').blur(function(e){
        e.preventDefault();
        activeInput($(this).closest('.input-row'));
    });

    $('.form-box-anime .form-row input').focus(function(e){
        e.preventDefault();
        activeInput($(this).closest('.form-row'));
    });

    $('.form-box-anime .form-row input').blur(function(e){
        e.preventDefault();
        activeInput($(this).closest('.form-row'));
    });
})