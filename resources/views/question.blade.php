@extends('master')

@section('title', 'Funso')

@section('content')
    <a href="../">Go back</a>
    <h1>{{ $question->topic }}</h1>
    <p>
        {{ $question->content }}
    </p>
    <p>
        {{ $question->created_at->diffForHumans() }}
    </p>
@endsection