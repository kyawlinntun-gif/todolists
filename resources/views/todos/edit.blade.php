@extends('layouts.master')

@section('content')

    <div class="container mt-3">
        <h1>Edit Todo</h1>
        {{ Form::open(['route' => ['todo.update', $todo->id], 'method' => 'post']) }}
            {{ Form::hidden('_method', 'put') }}
            {{ Form::bsText('Text', $todo->text) }}
            @error('text')
                <div class="alert alert-danger text-small">
                    {{ $message }}
                </div>
            @enderror
            {{ Form::bsTextArea('Body', $todo->body) }}
            {{ Form::bsText('Due', $todo->due) }}
            {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}

    </div>
    
@endsection