<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>科目名編集画面</title>
</head>
<body>
    <h1>科目名編集画面</h1>

    <form action="{{ route('subjects.update', $subject) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">科目名: </label>
        <input type="text" name="name" id="name" value="{{ old('name') }}"><br>

        <label for="description">説明: </label>
        <textarea name="description" id="description">{{ old('description') }}</textarea><br>

        <button type="submit">更新</button>
    </form>
</body>
</html>