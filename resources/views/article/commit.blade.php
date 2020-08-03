@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="title" style="text-align: center;">
            <h1>{{ $article->title }}</h1>
        </div>
        <hr>
        <div class="content">
            <article>{{ $article->content }}</article>
        </div>
        <br>
        <div class="container">
{{--            <div>--}}
{{--                <p style="margin-bottom: 0">用户评论:--}}
{{--                    @foreach($commits as $commit)--}}
{{--                        {{ $commit->commit }}--}}
{{--                        <br>--}}
{{--                    @endforeach--}}
{{--                </p>--}}

{{--            </div>--}}
            <form action="{{ url('admin/article/' . $article->id . '/commit') }}" method="POST">
                {!! csrf_field() !!}
                <br>
                <textarea name="commit" rows="5" class="form-control" required="required" placeholder="请输入内容"></textarea>
                <br>
                <button class="btn btn-lg btn-info">评论</button>

{{--                @includeWhen($article, 'article.commitform', ['btnName' => '评论'])--}}
            </form>
        </div>
    </div>
@endsection
