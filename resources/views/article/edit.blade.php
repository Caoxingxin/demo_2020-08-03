@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Auth::id() != $article->user_id)
            <div id="title" style="text-align: center">
                <h1 style="color: darkred">权限不足</h1>
            </div>
        @else
            <div id="title" style="text-align: center;">
                <h1>Edit</h1>
            </div>
            <hr>
            <div class="container">
                <form action="{{ url('/admin/article/' . $article->id) }}" method="POST">
                    {{ method_field('PUT') }}

                    @includeWhen($article, 'article.form', ['btnName' => '更新文章'])
                </form>
            </div>
        @endif
    </div>
@endsection


