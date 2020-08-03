{!! csrf_field() !!}
<input type="text" name="title" class="form-control" required="required" placeholder="请输入标题" value="{{ isset($article) ? $article->title : ''}}">
<br>
<textarea name="content" rows="10" class="form-control" required="required" placeholder="请输入内容">{{ isset($article) ? $article->content : ''}}</textarea>
<br>
{{--<input type="text" name="commit" class="form-control" required="required" placeholder="请输入标题">--}}
<br>
<button class="btn btn-lg btn-info">{{ $btnName }}</button>
