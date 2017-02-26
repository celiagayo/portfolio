$(document).ready(function () {
    var WindHeight = $(window).height();


//    portada ocupa todo el alto de la ventana
    function PortadaTodo() {
        $('.portada').height(WindHeight);
        var mitadPortada = $(".portada").height() / 2;
        var padingPortada = mitadPortada - $('.portada h1').height() * 2;
        $('.portada').css('padding-top', padingPortada);
        $('.portada ul').height(mitadPortada);

    }
    PortadaTodo();


    //RESIZE
    $(window).resize(function () {
        PortadaTodo();

    });
});
