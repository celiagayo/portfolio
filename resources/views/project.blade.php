@extends('layout.master')
@section('title', '{{$project->slug}}')
@section('content')


<div class="content ">

    <div class="area {{ $category->slug }}" >
        <div class="{{ $category->css_class }}">
            <div class="banda {{ $category->slug }}">
                <div class="cont-banda fix">
                    <div class="info-button">i</div>
<!--                    <i class="fa fa-long-arrow-left fa-3x" aria-hidden="true"></i>-->
                    <div class="detalle">
                        {!!html_entity_decode($project->detail_one)!!}
                        <!--                        {{ $project->detail_one }}-->
                    </div>
                </div>
            </div>
            <div class="proyect">
                <div class="presenta-proyecto">
                    <div class='enlaces-proyecto '>

                        <div class='ver {{$category->css_class}}'> <a title="volver" href="/"> <i class="fa fa-undo fa-2x" aria-hidden="true" ></i></a></div>
                        <div class='volver {{$category->css_class}}'>  <a title="ver online" href="{{ $project->url }}<" ><i class="fa fa-eye fa-2x" aria-hidden="true" ></i></a></div>
                        <div class='titulo {{$category->css_class}}'><h2>{{ $project->title }}</h2></div>
                    </div>
                    <div>
                        <img src="{{ $project->featured_image }}"/>
                        {!!html_entity_decode($project->detail_two)!!}
                        <!--                        <div>{{ $project->detail_two }}</div>-->
                        </a>
                    </div>
                </div>



            </div>
            <br/>
            <br/>

        </div>
    </div>

    <!--    <div class="images">
    
            <div>{{ $project->id }}</div>
            <div>{{ $project->slug }}</div>
            <div>{{ $project->title }}</div>
            <div>{{ $project->url }}</div>
            <div>{{ $project->featured_image }}</div>
            <div>{{ $project->detail_one }}</div>
            <div>{{ $project->detail_two }}</div>
    
        </div>-->
</div>
@endsection