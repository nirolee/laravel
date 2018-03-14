@extends('layouts.app')

@section('content')
<div class="container">
    <div id="content">
        <ul>
            @foreach ($articles as $article)
            <li>
                <div class="title">
                    <a href="{{url('article/'.$article->id)}}">
                        <h4>{{$article->title}}</h4>
                    </a>
                </div>
                <div class="body">
                    <p>{{$article->body}}</p>
                </div>
            </li>
            @endforeach
        </ul>

    </div>
</div>
@endsection
