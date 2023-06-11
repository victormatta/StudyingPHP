$(function() {
    $('.hidden').click(function() {
        $('.HW').toggle();
    });
});

$(function () {
    $('#b1').click(function () {
        $('.m1').css('color', 'red');
        $('.alterColor1').text("Successfully changed color!");
        $('.alterColor1').css('background-color', 'red');
        $('.alterColor1').stop().fadeIn('fast').delay(3000).fadeOut('fast');

        setTimeout(function () {
            $('.m1').css('color', ''); // Reverter a cor do texto para o padrão
            $('.alterColor1').text(""); // Limpar o texto
            $('.alterColor1').css('background-color', ''); // Reverter a cor do fundo para o padrão
            $('.alterColor1').show(); // Exibir novamente o elemento
        }, 3000);
    });
});

$(function () {
    $('#b2').click(function() {
        $('.m2').css('color', 'blue');
        $('.alterColor2').text('Successfully changed color!');
        $('.alterColor2').css('background-color', 'blue');
        $('.alterColor2').stop().fadeIn('fast').delay(3000).fadeOut('fast');

        setTimeout(function() {
            $('.m2').css('color', '');
            $('alterColor2').text("");
            $('alterColor2').css('background-color', '');
            $('.alterColor2').show();
        }, 3000);
    });
});


 
$(function() {
    $('.open').click(function () {
        $('ul').toggle();
    });
});