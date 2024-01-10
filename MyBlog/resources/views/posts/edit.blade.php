<h1>編集</h1>

<form method="POST" action="{{route('post.update',['id' =>$post->id])}}">
    @csrf

    <div>
        title
        <input type="text" name=title value="{{$post->title}}">
    </div>

    <div>
        Content
        <!-- <input type="text" name=content value="{{$post->content}}"> -->
        <textarea name="content" value="{{$post->content}}" rows="50" cols="150"></textarea>
    </div>

    <div>
        userId
        <input type="number" name=userId value="{{$post->userId}}">
    </div>


    <input type="submit" value="Update">

</form>

<a href="{{route('post.show',['id'=>$post->id])}}">{{ __('詳細に戻る') }}</a>
