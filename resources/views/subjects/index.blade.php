@php
    use Illuminate\Support\Str;
@endphp

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>科目一覧画面</title>
</head>
<body>
    <h1>科目一覧画面</h1>

    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <a href="{{ route('subjects.create') }}">新規作成画面へ</a>

    <table>
        <tr>
            <th>科目名</th>
            <th>説明</th>
            <th>登録日</th>
            <th>更新日</th>
            <th>編集</th>
            <th>削除</th>
        </tr>
        @foreach($subjects as $subject)
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
        @endforeach
    </table>
</body>
</html>