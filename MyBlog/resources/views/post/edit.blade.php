<h1>編集</h1>

<form method="POST" action="{{route('post.update',['id' =>$post->id])}}">
    @csrf

    <div>
        title
        <input type="text" name=title value="{{$post->title}}">
    </div>

    <div>
        Content
        <input type="text" name=content value="{{$post->content}}">
    </div>

    <div>
        userId
        <input type="number" name=userId value="{{$post->userId}}">
    </div>


    <input type="submit" value="Update">

</form>
//追加
<a href="{{route('post.show',['id'=>$post->id])}}">{{ __('詳細に戻る') }}</a>
