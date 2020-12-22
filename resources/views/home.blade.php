@extends('master')

@section('title', 'Funso')

@section('content')
    <h1>Welcome to Funso</h1>

    <form action="/create" method="post" name="create_question">
        <input type="text" name="topic" id="topic" placeholder="Enter topic of question">
        <input type="text" name="content" id="content" placeholder="Enter content">
        {{ csrf_field() }}
        <button type="submit">Submit</button>
    </form>

    <h2>Asked question</h2>
    <ol>
       @foreach ($questions as $question)
            <li>
                <strong>
                    {{ $question->topic }} <br>
                </strong>
                {{ $question->content }}<br>
                {{ $question->created_at->diffForHumans() }} <br>
                <a href="/question/{{ $question->id }}">View</a>
            </li>
       @endforeach
       
    </ol>
@endsection