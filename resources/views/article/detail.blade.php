@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="title" style="text-align: center;">
            <h1>{{ $article->title }}</h1>
        </div>
        <div style="display: flex">
            @if (Auth::id() == $article->user_id)
                <div style="flex: 1">
                    <a href="{{ url('admin/article/' . $article->id . '/edit') }}" class="btn btn-primary">编辑</a>
                    <form action="{{ url('admin/article/'.$article->id) }}" method="POST" style="display: inline;">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">删除</button>
                    </form>
                    <a href="{{ url('admin/article/' . $article->id . '/commit')}}" class="btn btn-info">评论</a>
                </div>
            @endif
            <div>
                <p style="margin-bottom: 0">作者: {{ $article->user->name }}</p>
                <p style="margin-bottom: 0">创建于: {{ $article->created_at }}</p>
            </div>
        </div>
        <hr>
        <div class="content">
            <article>{{ $article->content }}</article>
        </div>
        <hr>
            <p style="margin-bottom: 0">
                <span style="font-size: 20px">用户评论:</span>
                <br>
                @foreach($commits as $commit)
                @if($article->id == $commit->title)
                    {{ $commit->commit }}
                <p style="margin-bottom: 0;text-align: right">作者: {{ $article->user->name }}</p>
                <p style="margin-bottom: 0;text-align: right">创建于: {{ $commit->created_at }}</p>
                    <hr>
                    @endif
                @endforeach
            </p>


    </div>
@endsection

