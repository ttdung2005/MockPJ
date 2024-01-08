<!--<h1>一覧表示</h1>

<table>
    <tr>
        <th>ID</th>
        <th>title</th>
        <th>creatorId</th>
    </tr>
    @foreach($posts as $post)
    <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->userId}}</td>
        <td><th><a href="{{route('post.show',['id'=>$post->id])}}">詳細</a></th></td>
    </tr>
    @endforeach
    
</table>
<a href="{{ route('post.create') }}">{{ __('新規作成') }}</a>
-->
<h1>一覧表示</h1>

<ul>
@foreach($posts as $post)
    <li>
        <strong>ID:</strong> {{$post->id}}<br>
        <strong>Title:</strong> {{$post->title}}<br>
        <strong>UserId:</strong> {{$post->userId}}<br>
        <td><th><a href="{{route('post.show',['id'=>$post->id])}}">詳細</a></th></td>
    </li>
@endforeach
<a href="{{ route('post.create') }}">{{ __('新規作成') }}</a>
</ul>