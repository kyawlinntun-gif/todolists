@extends('layouts.master')

@section('content')

    <div class="container mt-3">
        <h1>Create Todo</h1>
        {{ Form::open(['route' => 'todo.store', 'method' => 'post']) }}
            {{ Form::bsText('Text') }}
            @error('text')
                <div class="alert alert-danger text-small">
                    {{ $message }}
                </div>
            @enderror
            {{ Form::bsTextArea('Body') }}
            {{ Form::bsText('Due') }}
            {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
        {{ Form::close() }}

    </div>
    
@endsection