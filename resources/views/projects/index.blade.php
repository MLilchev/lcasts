@extends('layout')

@section('title')

    Projects

@endsection

@section('page_title', 'Laravel')

    
@section('content')

    @foreach ($projects as $project)

        <li>
            <a href="/projects/{{ $project->id }}">
                {{ $project->title }}
            </a>
        </li>

        

    @endforeach
@endsection
