<h1>詳細表示</h1>

<div>
Title
{{$post->title}}
</div>

<div>
Content
{{$post->content}}
</div>

<div>
userId
{{$post->userId}}
</div>
<a href="{{ route('post.index') }}">{{ __('一覧に戻る') }}</a>
<a href="{{route('post.edit',['id'=>$post->id])}}">{{ __('編集') }}</a>
<form method="POST" action="{{route('post.destroy',['id'=>$post->id])}}">
  @csrf
  <button type="submit">削除</button>
</form>
