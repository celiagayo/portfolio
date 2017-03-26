$(document).ready(function () {
    var WindHeight = $(window).height();
//    console.log(WindHeight);
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
    $('.portada').click(function () {
        $('.portada ul li').addClass('hovered');
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


    function mueveFlotante() {
        ventanaScrollTop = $(window).scrollTop();
        areaWeb = $(".area[data-attr='web']");
        areaGraphic = $(".area[data-attr='graphic']");
        areaProduct = $(".area[data-attr='product']");
        areaArchitecture = $(".area[data-attr='architecture']");

//muy cutre: Para WEB
        if (ventanaScrollTop > areaWeb.offset().top) {
            if (ventanaScrollTop < areaWeb.offset().top + areaWeb.height() - $(areaWeb).find('.banda > div').height()) {
//                console.log("ahora area WEb");
                $(areaWeb).find('.banda > div').addClass('fix');
            } else {
//                console.log("NO area WEb");
                $(areaWeb).find('.banda > div').removeClass('fix');
            }
        } else {
//            console.log("NO area WEb");
            $(areaWeb).find('.banda > div').removeClass('fix');
        }

//muy cutre: Para GRAPHIC
       if (ventanaScrollTop > areaGraphic.offset().top) {
            if (ventanaScrollTop < areaGraphic.offset().top + areaGraphic.height() - $(areaGraphic).find('.banda > div').height()) {
//                console.log("ahora area WEb");
                $(areaGraphic).find('.banda > div').addClass('fix');
            } else {
//                console.log("NO area WEb");
                $(areaGraphic).find('.banda > div').removeClass('fix');
            }
        } else {
//            console.log("NO area WEb");
            $(areaGraphic).find('.banda > div').removeClass('fix');
        }


//muy cutre: Para PRODUCT
       if (ventanaScrollTop > areaProduct.offset().top) {
            if (ventanaScrollTop < areaProduct.offset().top + areaProduct.height() - $(areaProduct).find('.banda > div').height()) {
//                console.log("ahora area WEb");
                $(areaProduct).find('.banda > div').addClass('fix');
            } else {
//                console.log("NO area WEb");
                $(areaProduct).find('.banda > div').removeClass('fix');
            }
        } else {
//            console.log("NO area WEb");
            $(areaProduct).find('.banda > div').removeClass('fix');
        }

//muy cutre: Para ARQUITECTURA
       if (ventanaScrollTop > areaArchitecture.offset().top) {
            if (ventanaScrollTop < areaArchitecture.offset().top + areaArchitecture.height() - $(areaArchitecture).find('.banda > div').height()) {
//                console.log("ahora area WEb");
                $(areaArchitecture).find('.banda > div').addClass('fix');
            } else {
//                console.log("NO area WEb");
                $(areaArchitecture).find('.banda > div').removeClass('fix');
            }
        } else {
//            console.log("NO area WEb");
            $(areaArchitecture).find('.banda > div').removeClass('fix');
        }
        
        
//        areaPosTop = $('.area').offset().top;
//        areaAltura = $('.area').height();
//        ventanaScrollTop = $(window).scrollTop();
////        console.log(areaPosTop);
////        console.log(areaAltura);
////        console.log(ventanaScrollTop);
//        if (ventanaScrollTop > areaPosTop) {
//            console.log("ahora area");
//            var attrArea = $('.area').attr('data-attr');
//            console.log(attrArea);
//        }
//        if (ventanaScrollTop > areaPosTop + areaAltura) {
//            console.log("ahora no area");
//        }




//        $('.area').each(function () {
//            var attrArea = $(this).attr('data-attr');
//            var positionFijar = $(this).find($(".fijador." + attrArea)).offset().top;
//            var positionSoltar = $(".soltador").offset().top;
//            console.log(positionFijar);
//            if ($(document).scrollTop() >= positionFijar) {
//                $(".banda>div." + attrArea).addClass("fix");
//
//
//            } else {
//                $(".banda>div").removeClass("fix").css("top", "0px");
//            }
//        });



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
