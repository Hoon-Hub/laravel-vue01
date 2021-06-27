<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GetUsersData</title>
</head>
<body>
    <main>
        <h1>게시판 구현하기</h1>
        <div>
            <a href="/test/write">write</a>
        </div>
        <div>
            <table>
                <thead>
                    <td>no</td>
                    <td>title</td>
                    <td>email</td>
                    <td>writted</td>
                </thead>
                @foreach ($boards as $board)
                <tr>
                    <td>{{ $board->id }}</td>
                    <td>
                        <a href="/test/show/{{ $board->id }}">
                        {{ $board->title }}
                    </a>
                    </td>
                    <td>{{ $board->email }}</td>
                    <td>{{ $board->created_at }}</td>
                </tr>    
                @endforeach
            </table>
        </div>
    </main>


</body>
</html>