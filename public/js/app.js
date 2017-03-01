$(document).ready(function () {
    var WindHeight = $(window).height();

    console.log(WindHeight);
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

//PORTADA adapta su tamaño al scroll
    function scrollPortada() {
        if ($('.portada').length) {
            if ($(window).scrollTop() >= 100) {
                $('.portada').height('auto');
            }
            else {
                $('.portada').height(WindHeight);
            }
        }

    }
    scrollPortada();


//  BANDA ACOMPAÑA
    var flotante = $(".banda >div");
    function mueveFlotante() {
//        if (flotante.length) {
//            var positionFijar = $(".c-arquitectura").offset().top;
//            var positionQuitar = $(".contenido-graphic").offset().top;
//            if ($(window).scrollTop() >= positionFijar) {
//                console.log("mueve");
//                $(flotante).addClass("fix");
//                
//            } else {
//                $(flotante).removeClass("fix");
//            }
//        }

    }
    mueveFlotante();
//PORTADA ha sido pasada con scroll - mostramos cabecera 
//    function pasadaPortada() {
//        if ($('.portada').length) {
//            var positionFijar = $(".c-arquitectura").offset().top;
//
//            if ($(window).scrollTop() <= positionFijar) {
//
//
////
//
//            }
//            else {
//
//            }
//        }
//
//    }
//    pasadaPortada();
//Barra lateral info
    $('.banda')
            .mouseenter(function () {
                $(this).addClass('mostrada');
            })
            .mouseleave(function () {
                $(this).removeClass('mostrada');
            });
    //Si existe banda, centrar navbar
    if ($('.banda').length) {
        $('.navbar').addClass('con-banda');
    } else {
        $('.navbar').removeClass('con-banda');
    }




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
//        pasadaPortada();
        scrollPortada();
        mueveFlotante();
    });
});
