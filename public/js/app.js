$(document).ready(function () {
    var WindHeight = $(window).height();


//PORTADA ocupa todo el alto de la ventana
    function portadaTodo() {
        $('.portada').height(WindHeight);
        var mitadPortada = $(".portada").height() / 2;
        var padingPortada = mitadPortada - $('.portada h1').height() * 2;
        $('.portada').css('padding-top', padingPortada);
        $('.portada ul').height(mitadPortada);

    }
    portadaTodo();

//PORTADA despliegue de datos al hover
    $('.portada>div')
            .mouseenter(function () {
                $('.portada ul li').addClass('hovered');
            })
            .mouseleave(function () {
                $('.portada ul li').removeClass('hovered');
            });

//PORTADA ha sido pasada con scroll - mostramos cabecera 
    function mostrarCabecera() {
        if ($('.portada').length) {
            var positionFijar = $(".c-arquitectura").position().top;
            if ($(window).scrollTop() <= positionFijar) {
                $('.portada').height(WindHeight);
                //coge los datos del navbar para colocarlos en la cabecera 


            }
            else {

                $('.portada').height('auto');
            }
        }

    }
    mostrarCabecera();

//MENUBOX funcionamiento
    $('.menu-box')
            .mouseenter(function () {
                $('.menu-box nav').show();
                $('.menu-box').addClass('abremenu');
                $('.menu-box p').html('X');
                $('.menu-box p').click(function () {
                    $('.menu-box nav').hide();
                    $('.menu-box').removeClass('abremenu');
                    $('.menu-box p').html('menu');

                });
            })
            .mouseleave(function () {
                $('.menu-box nav').hide();
                $('.menu-box').removeClass('abremenu');
                $('.menu-box p').html('menu');
            });






    //RESIZE
    $(window).resize(function () {
        portadaTodo();

    });


    //SCROLL
    $(window).scroll(function () {
        mostrarCabecera();

    });
});
