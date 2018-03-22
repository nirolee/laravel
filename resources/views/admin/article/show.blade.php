@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-ld-10 col-ld-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{$articles->title}}</div>
                <div class="panel-body">
                    {{$articles->body}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection