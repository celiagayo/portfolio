<div class="navbar">
    <h1 class="titulo">Celia Gayo Escribano</h1>

    <div class="menu-box">
        <p>menú</p>
        <nav>
            <div>Inicio</div>
            <div>Sobre mi</div>
            <div>Contacto</div>
            @foreach ($categories as $category)
            <div>{{ $category->title }}</div>

            @endforeach
        </nav>

    </div>
</div>