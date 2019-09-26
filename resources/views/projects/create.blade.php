@extends('layout')

@section('title')

    Projects

@endsection

@section('page_title', 'Laravel')

    
@section('content')

<form method="POST" action="/projects">

    {{csrf_field()}}
    <div class="field">
        <label class="label" for="title">Project Title</label>
        <div class="control">
            <input type="text" class="input {{$errors->has('title') ? 'is-danger' : ''}}" name="title" placeholder="Project title" value="{{ old('title') }}">
        </div>
    </div>
    <div class="field">
        <label class="label" for="description">Project Description</label>
        <div class="control">
            <textarea name="description" class="input {{$errors->has('title') ? 'is-danger' : ''}}" placeholder="Project description" value="{{ old('description') }}"></textarea>
        </div>

    <div>
        <button type="submit">Create Project</button>
    </div>
    @if ($errors->any())
        <div class="notification is-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</form>

@endsection