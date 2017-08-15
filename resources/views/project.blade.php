@extends('layout.master')
@section('title', '{{$project->slug}}')
@section('content')


<div class="content ">

    <div class="area {{ $category->slug }}" >
        <div class="{{ $category->css_class }}">
            <div class="banda {{ $category->slug }}">
                <div class="cont-banda fix">
                    <div class="info-button">i</div>

                    <div class="detalle">
                        {!!html_entity_decode($project->detail_one)!!}
                        <!--                        {{ $project->detail_one }}-->
                    </div>
                </div>
            </div>
            <div class="proyect">
                <div class="presenta-proyecto">
                    <div class='enlaces-proyecto '>

                        <div class='ver {{$category->css_class}}'> <a title="volver" href="/"> 
                                <img src="/img/back.png" title="volver" alt="volver"/>
<!--                                <i class="fa fa-undo fa-2x" aria-hidden="true" ></i>-->

                            </a></div>
                        <div class='volver {{$category->css_class}}'>  <a title="ver online" href="{{ $project->url }}<" >     <img src="/img/eye.png" title="Ver online" alt="Ver online"/></a></div>
                        <div class='titulo {{$category->css_class}}'><h2>{{ $project->title }}</h2></div>
                    </div>
                    <div>
                        <img src="{{ $project->featured_image }}"/>
                        {!!html_entity_decode($project->detail_two)!!}
                        <!--                        <div>{{ $project->detail_two }}</div>-->
                        </a>
                    </div>

                </div>

<!--                <div class="images">

                    <div>{{ $project->id }}</div>
                    <div>{{ $project->slug }}</div>
                    <div>{{ $project->title }}</div>
                    <div>{{ $project->url }}</div>
                    <div>{{ $project->featured_image }}</div>
                    <div>{{ $project->detail_one }}</div>
                    <div>{{ $project->detail_two }}</div>
                    <div>{{ $images }}</div>
                </div>-->
                  @foreach ($images as $image)
                <div><img src="{{ $images->url }}"/></div>
                @endforeach

            </div>
            <br/>
            <br/>

        </div>
    </div>


</div>
@endsection