@extends('layout')

@section('title')

    Welcome

@endsection

@section('page_title', 'Laravel')

    
@section('content')

        

        <!-- Standard PHP templating -->
        <?php foreach ($tasks as $task) : ?>
            <li><?= $task; ?> </li>
        <?php endforeach; ?>

        <!-- Blade Templating Engine -->
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach

        @if (empty($tasks))
            There are no people
        @endif

        

                
@endsection
