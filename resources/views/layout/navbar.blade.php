<div class="navbar">
    <h1 class="titulo"><a href="/" title="Volver a la home">Celia Gayo Escribano</a></h1>

    <div class="menu-box">
        <p class="box-abremenu">menú</p>
        <nav>
            <div class="menu-ap" ><a href="/" title="Ir al inicio">Inicio</a></div>
            <div class="menu-ap"><a href="/sobre-celia-gayo" title="Saber más sobre mi">Sobre mi</a></div>
            <div class="menu-ap"><a href="/contacto" title="Contactar">Contacto</a></div>
            @foreach ($categories as $category)
            <div class="menu-ap {{ $category->css_class }}" data-attr="{{ $category->slug }}">{{ $category->title }}</div>

            @endforeach
        </nav>

    </div>
</div>