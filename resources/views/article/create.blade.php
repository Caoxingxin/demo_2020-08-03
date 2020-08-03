@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="title" style="text-align: center;">
            <h1>Create</h1>
        </div>
        <hr>
        <div class="container">
            <form action="{{ url('/admin/article') }}" method="POST">
                @include('article.form', ['btnName' => '新建文章'])
            </form>
        </div>
    </div>
@endsection

