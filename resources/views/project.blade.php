@extends('layout.master')
@section('title', 'Project')

@section('content')


<div class="showmenu">
    @include('layout.navbar')
</div>

<div class="images">
        <div>{{ $category->id }}</div>
        <div>{{ $category->slug }}</div>
        <div>{{ $category->title }}</div>
        <div>{{ $category->detail }}</div>

        <div>{{ $project->id }}</div>
        <div>{{ $project->slug }}</div>
        <div>{{ $project->title }}</div>
        <div>{{ $project->url }}</div>
        <div>{{ $project->featured_image }}</div>
        <div>{{ $project->detail_one }}</div>
        <div>{{ $project->detail_two }}</div>
            
</div>
@endsection