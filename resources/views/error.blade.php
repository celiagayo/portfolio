@extends('layout.error')
@section('title', 'Error')
@section('content')

<header>
    <div class="navbar">
        <h1 class="titulo"><a href="/" title="Volver a la home">Celia Gayo Escribano</a></h1>

        <div class="menu-box">
            <p class="box-abremenu">menú</p>
            <nav>
                <div class="menu-ap" ><a href="/" title="Ir al inicio">Inicio</a></div>
                <div class="menu-ap"><a href="sobre-mi" title="Saber más sobre mi">Sobre mi</a></div>
                <div class="menu-ap"><a href="contacto" title="Contactar">Contacto</a></div>

            </nav>

        </div>
    </div>
</header>
<div class="content ">
    <div class="error">
        <h2>¡Me temo que ha habido un error!  :(</h2>

        <p> Puede que la página que buscas ya no exista; te sugiero que vuelvas a la <a href='/' title='volver a la home'>home</a> y navegues por otro proyecto.</p>
        <p>Si necesitas ponerte en contacto conmigo, puedes enviarme un mail a esta dirección <a href="mailto:hola@celiagayo.com" title="Envíame un correo">hola@celiagayo.com</a></p>

        <p>¡Gracias! y disculpa las molestias</p>

    </div>
</div>


@endsection
