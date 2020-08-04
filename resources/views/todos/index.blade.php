@extends('layouts.master')

@section('content')

    <div class="container">

        @include('layouts.message')

        <div class="todos-index mt-3">

            <h1>Todo Lists</h1>

            @foreach($todos as $todo)

                <div class="card card-body mt-2">
                    <h3 class="m-0"><a href="{{ route('todo.show', $todo->id) }}" class="text-dark text-decoration-none">{{ $todo->text }}</a><p class="badge badge-danger m-0 ml-2">{{ $todo->due }}</p></h3>
                </div>

            @endforeach
            
        </div>

    </div>
    
@endsection