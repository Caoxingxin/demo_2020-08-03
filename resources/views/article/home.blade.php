@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="title" style="text-align: center;">
            <h1>All Articles</h1>
        </div>
        @if (Auth::check())
            <a href="{{ url('admin/article/create') }}" class="btn btn-primary">写文章</a>
        @endif
        <hr>
        <div id="content" style="width: 90%; position: relative; float: left">
            <ul>
                @foreach ($articles as $article)
                    <li style="margin-bottom: 50px">
                        <h4 class="title">
                            @if (Auth::check())
                                <a href="{{ url('admin/article/' . $article->id) }}">
                                    @else
                                        <a href="{{ url('article/' . $article->id) }}">
                                            @endif
                                            {{ $article->title }}
                                        </a>
                        </h4>
                        <div class="content">
                            <p>{{ $article->content }}</p>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
@endsection

