<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>科目新規作成画面</title>
</head>
<body>
    <h1>科目新規作成画面</h1>

    <form action="{{ route('subjects.store') }}" method="POST">
        @csrf

        <label for="name">科目名: </label>
        <input type="text" name="name" id="name" value="{{ old('name') }}"><br>

        <label for="description">説明: </label>
        <textarea name="description" id="description">{{ old('description') }}</textarea><br>

        <input type="submit" value="作成">
    </form>
</body>
</html>