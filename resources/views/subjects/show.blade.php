<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>科目名詳細画面</h1>

    <table>
        <tr>
            <th>科目名</th>
            <th>説明</th>
            <th>登録日</th>
            <th>更新日</th>
            <th>編集</th>
            <th>削除</th>
        </tr>

        <tr>
            <td>
                <a href="{{ route('subjects.show', $subject) }}">
                    {{ $subject->name }}
                </a>
            </td>
            <td>{{ Str::limit($subject->description, 30) }}</td>
            <td>{{ $subject->created_at }}</td>
            <td>{{ $subject->updated_at }}</td>
            <td>
                <a href="{{ route('subjects.edit', $subject) }}">編集</a>
            </td>
            <td>
                <form action="{{ route('subjects.destroy', $subject) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit">削除</button>
                </form>
            </td>
        </tr>
    </table>

    <a href="{{ route('subjects.index') }}">一覧画面に戻る</a>
</body>
</html>