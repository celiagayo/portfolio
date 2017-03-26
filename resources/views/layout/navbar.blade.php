<div class="navbar">
    <h1 class="titulo">Celia Gayo Escribano</h1>

    <div class="menu-box">
        <p>menú</p>
        <nav>
            <div class="menu-ap" ><a href="/" title="Ir al inicio">Inicio</a></div>
            <div class="menu-ap"><a href="sobre-mi" title="Saber más sobre mi">Sobre mi</a></div>
            <div class="menu-ap"><a href="contacto" title="Contactar">Contacto</a></div>
            @foreach ($categories as $category)
            <div class="menu-ap {{ $category->css_class }}">{{ $category->title }}</div>

            @endforeach
        </nav>

    </div>
</div>