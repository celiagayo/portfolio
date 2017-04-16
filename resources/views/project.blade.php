@extends('layout.master')
@section('title', '{{$project->slug}}')
@section('content')


<div class="content ">

    <div class="area {{ $category->slug }}" >
        <div class="{{ $category->css_class }}">
            <div class="banda {{ $category->slug }}">
                <div class="cont-banda">
                    <div>i</div>
                    <i class="fa fa-long-arrow-left fa-3x" aria-hidden="true"></i>
                    <div class="detalle">
                        {{ $project->detail_one }}
                    </div>
                </div>
            </div>
            <div class="proyect">
                <div class="presenta-proyecto">
                    <div class='enlaces-proyecto '>
                        <div class='volver {{$category->css_class}}'>  <a title="ver online" href="{{ $project->url }}<" target="_blank"><i class="fa fa-eye fa-2x" aria-hidden="true" ></i></a></div>
                        <div class='ver {{$category->css_class}}'> <a title="volver" href="/" target="_blank"> <i class="fa fa-undo fa-2x" aria-hidden="true" ></i></a></div>
                        <div class='titulo {{$category->css_class}}'><h2>{{ $project->title }}</h2></div>
                    </div>
                    <div>
                        <img src="{{ $project->featured_image }}"/>
                        <div>{{ $project->detail_two }}</div>
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