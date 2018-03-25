@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-ld-10 col-ld-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">编辑文章</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>编辑失败</strong> 输入不符合要求<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <form action="{{ url('admin/articles/'.$articles->id) }}" method="POST">
                         {{ method_field('PUT') }}
                        {!! csrf_field() !!}
                        <input type="text" name="title" class="form-control" required="required" value="{{$articles->title}}">
                        <br>
                        <textarea name="body" rows="10" class="form-control" required="required" value="{{$articles->body}}">{{$articles->body}}</textarea>
                        <br>
                        <button class="btn btn-lg btn-info">提交编辑</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection