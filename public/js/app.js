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

    //Anclas del menu
//    function anlcasMenu() {
//        $('.menu-ap').click(function () {
//            var atributo = ($(this).attr("class"));
//            $(window).scrollTop($('.area').find(atributo));
//        });
//    }
//    anlcasMenu();
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
    }
    mueveFlotante();

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
