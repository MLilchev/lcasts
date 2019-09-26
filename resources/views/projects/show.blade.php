@extends('layout')

@section('title')

    Edit Project

@endsection

@section('page_title', 'Laravel')

    
@section('content')

    <h1 class="title">{{ $project->title }}</h1>


    <div class="content">{{ $project->description }}</div>

    <p> 
        <a href="/projects/{{$project->id}}/edit">Edit</a>
    </p>

@endsection