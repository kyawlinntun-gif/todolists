@extends('layouts.master')

@section('content')

    <div class="container">

        <div class="todos-index mt-3">

            <h1 class="m-0">{{ $todo->text }}</h1>
            <div class="badge badge-danger m-0">{{ $todo->due }}</div>
            <hr>
            <p>
                {{ $todo->body }}
            </p>
            <br><br>
            <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-primary text-decoration-none text-dark">Edit</a>
            {{ Form::open(['route' => ['todo.destroy', $todo->id], 'method' => 'post', 'class' => 'float-right']) }}
                {{ Form::hidden('_method', 'delete') }}
                {{ Form::bsSubmit('Delete', ['class' => 'btn btn-primary']) }}
            {{ Form::close() }}
        </div>

    </div>
    
@endsection