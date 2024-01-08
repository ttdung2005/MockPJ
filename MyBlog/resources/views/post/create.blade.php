<h1>新規作成</h1>

<form method="POST" action="{{route('post.store')}}">
    @csrf

    <div>
        <label for="form-title">Title</label>
        <input type="text" name="title" id="form-title" required>
    </div>

    <div>
        <label for="form-content">Content</label>
        <input type="text" name="content" id="form-content">
    </div>

    <div>
        <label for="form-userId">userId</label>
        <input type="number" name="userId" id="form-userId">
    </div>

    <button type="submit">送信</button>

</form>
<a href="{{ route('post.index') }}">{{ __('一覧へ戻る') }}</a>