@extends('layout.master')
@section('title', '{{$project->slug}}')
@section('content')

<div class="modal" title="volver"></div>
<div class="exit" title="volver"> <img src="/img/back.png" title="volver" alt="volver"/></div>

<div class="content ">

    <div class="area {{ $category->slug }}" >
        <div class="{{ $category->css_class }}">
            <div class="banda {{ $category->slug }}">
                <div class="cont-banda fix">
                    <div class="scroll-banda">
                        <div class="info-button">i</div>

                        <div class="detalle">
                            {!!html_entity_decode($project->detail_one)!!}
                            <!--                        {{ $project->detail_one }}-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="proyect">
                <div class="presenta-proyecto">
                    <div class='enlaces-proyecto '>

                        <div class='ver {{$category->css_class}}'> <a title="volver" href="/#{{$category->slug}}"> 
                                <img src="/img/back.png" title="volver" alt="volver"/>

                            </a></div>
<!--                        <div class='volver {{$category->css_class}}'>  <a title="ver online" href="{{ $project->url }}" >     <img src="/img/eye.png" title="Ver online" alt="Ver online"/></a></div>-->
                        <div class='titulo {{$category->css_class}}'><h2>{{ $project->title }}</h2></div>
                    </div>
                    <div>
                        <img class="featured-image" src="{{ $project->featured_image }}"/>
                        <div class="texto-detalle-2">
                        {!!html_entity_decode($project->detail_two)!!}
</div>
                        </a>
                    </div>

                </div>


                <div class="imagenes-proyecto">  

                    @foreach ($images as $image)
                    <div>

                        <img src="{{ $image->url }}"/>
                    </div>
                    @endforeach
                </div>
            </div>
            <br/>
            <br/>

        </div>
    </div>


</div>

@endsection