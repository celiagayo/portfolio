@extends('layout.master')
@section('title', 'Celia Gayo Escribano')
@section('content')


<div class="portada">
    <div>
        <h1 class="titulo">Celia Gayo Escribano</h1>
        <h2 class="titulo"><em>diseñadora</em></h2>

        <ul class="titulo">
            @foreach ($categories as $category)
            <li class="{{ $category->css_class }}">{{ $category->title }}</li>
            <!--            <li class="c-graphic">Graphic</li>
                        <li class="c-producto">Producto</li>
                        <li class="c-arquitectura">Arquitectura</li>-->
            @endforeach
        </ul>
    </div>

</div>

<div class="content">
    @foreach ($categories as $category)
    <div class="area" data-attr="{{ $category->slug }}">
      
        <div  class="{{ $category->css_class }}">
            <div class="banda {{ $category->slug }}">
                <div>
                    <h2>{{ $category->title }}</h2>
                    <i class="fa fa-long-arrow-left fa-3x" aria-hidden="true"></i>
                    <div class="detalle">
                        {{ $category->detail }}
                    </div>
                </div>
            </div>
            <div class="bloque">
                @foreach ($category->projects as $project)
                <div >
                    <a href="{{ $project->url }}" title="Ver {{ $project->title }}">
                        <img src="{{ $project->featured_image }}"/>
                        <p>{{ $project->title }}</p>
                    </a>
                </div>
                @endforeach
            </div>

        </div>
    </div>
  


    @endforeach
</div>

<div>


</div>

<div >
    <!-- 
     @foreach ($categories as $category)
        <div>{{ $category->id }}</div>
        <div>{{ $category->slug }}</div>
        <div>{{ $category->title }}</div>
        <div>{{ $category->detail }}</div>
    
        @foreach ($category->projects as $project)
        <div>{{ $project->id }}</div>
        <div>{{ $project->slug }}</div>
        <div>{{ $project->title }}</div>
        <div>{{ $project->url }}</div>
        <div>{{ $project->featured_image }}</div>
        <div>{{ $project->detail_one }}</div>
        <div>{{ $project->detail_two }}</div>
    
        @endforeach
        @endforeach-->
</div>
@endsection
