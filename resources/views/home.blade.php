@extends('layout.master')
@section('title', 'Celia Gayo Escribano')
@section('content')


<div class="portada">
    <h1 class="titulo">Celia Gayo Escribano</h1>
    <h2 class="titulo"><em>diseñadora</em></h2>

    <ul class="titulo">
        <li class="c-web">Web</li>
        <li class="c-graphic">Graphic</li>
        <li class="c-producto">Producto</li>
        <li class="c-arquitectura">Arquitectura</li>
    </ul>
</div>
<div class="images">
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
    @endforeach
</div>
@endsection