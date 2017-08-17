$(document).ready(function () {
    var WindHeight = $(window).height();
//    console.log(WindHeight);
//PORTADA ocupa todo el alto de la ventana
    function portadaTodo() {
        $('.portada').height(WindHeight);
        var mitadPortada = $(".portada").height() / 2;
        var padingPortada = mitadPortada - $('.portada h1').height();
        $('.portada').css('padding-top', padingPortada);
        $('.portada ul').height(mitadPortada + $('.portada h1').height());
    }
    portadaTodo();
//PORTADA despliega datos
    $('.portada>div')
            .mouseenter(function () {
                $('.portada ul li').addClass('hovered');
            })
            .mouseleave(function () {
                $('.portada ul li').removeClass('hovered');
            });
    $('.portada').click(function () {
        $('.portada ul li').toggleClass('hovered');
    });

    if ($(window).width() <= 850) {
        $(window).scroll(function () {
            $('.portada ul li').addClass('hovered');

        });
    }
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


//GO TO TOP
    $('.go-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 'slow');
    });

    //ANCLAS MENU

    $('.menu-ap').click(function () {
        var atributoAncla = ($(this).attr('data-attr'));
        posicionAncla = $("div." + atributoAncla).offset();
        $('html, body').animate({scrollTop: posicionAncla.top}, 'slow');
//        console.log(posicionAncla);
    });



    //  BANDA ACOMPAÑA

    function mueveFlotante() {

        if ($('.portada').length) {
            ventanaScrollTop = $(window).scrollTop();
            areaWeb = $(".area.web");
            areaGraphic = $(".area.graphic");
            areaProduct = $(".area.product");
            areaArchitecture = $(".area.architecture");

//muy cutre: Para WEB
            if (ventanaScrollTop > areaWeb.offset().top) {
                if (ventanaScrollTop < areaWeb.offset().top + areaWeb.height()) {
//                console.log("ahora area WEb");
                    $(areaWeb).find('.cont-banda').addClass('fix');
                } else {
//                console.log("NO area WEb");
                    $(areaWeb).find('.cont-banda').removeClass('fix');
                }
            } else {
//            console.log("NO area WEb");
                $(areaWeb).find('.cont-banda').removeClass('fix');
            }

//muy cutre: Para GRAPHIC
            if (ventanaScrollTop > areaGraphic.offset().top) {
                if (ventanaScrollTop < areaGraphic.offset().top + areaGraphic.height()) {
                    $(areaGraphic).find('.cont-banda').addClass('fix');
                } else {
                    $(areaGraphic).find('.cont-banda').removeClass('fix');
                }
            } else {
                $(areaGraphic).find('.cont-banda').removeClass('fix');
            }


//muy cutre: Para PRODUCT
            if (ventanaScrollTop > areaProduct.offset().top) {
                if (ventanaScrollTop < areaProduct.offset().top + areaProduct.height()) {
                    $(areaProduct).find('.cont-banda').addClass('fix');
                } else {
                    $(areaProduct).find('.cont-banda').removeClass('fix');
                }
            } else {
                $(areaProduct).find('.cont-banda').removeClass('fix');
            }

//muy cutre: Para ARQUITECTURA
            if (ventanaScrollTop > areaArchitecture.offset().top) {
                if (ventanaScrollTop < areaArchitecture.offset().top + areaArchitecture.height()) {
                    $(areaArchitecture).find('.cont-banda').addClass('fix');
                } else {
                    $(areaArchitecture).find('.cont-banda').removeClass('fix');
                }
            } else {
                $(areaArchitecture).find('.cont-banda').removeClass('fix');
            }
        }
    }
    mueveFlotante();

// BANDA SE MUESTRA
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


// ALTURA DE BANDA
    $('.banda .detalle').height(WindHeight - 100);

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

    //PROYECTO imagen agrandada          
    $('.imagenes-proyecto div').click(function () {
        posicionImg = $(this).offset();
        $('.modal').show();
        $('.exit').show();
        $('html, body').animate({scrollTop: 0}, 'slow');
        $(this).addClass('capa-modal');
        $('.modal').click(function () {
            $('.modal').hide();
            $('.exit').hide();
            $('.imagenes-proyecto div').removeClass('capa-modal');
            $('html, body').animate({scrollTop: posicionImg.top}, 'slow');
        });

        $('.exit').click(function () {
            $('.modal').hide();
            $('.exit').hide();
            $('.imagenes-proyecto div').removeClass('capa-modal');
            $('html, body').animate({scrollTop: posicionImg.top}, 'slow');
        });
    });


    //RESIZE
    $(window).resize(function () {
        portadaTodo();
    });
    //SCROLL
    $(window).scroll(function () {
// $('.portada ul li').addClass('hovered');
        scrollPortada();
        mueveFlotante();
    });
});
