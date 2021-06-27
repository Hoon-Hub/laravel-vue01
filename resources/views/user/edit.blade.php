<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
    <h1>Edit</h1>
    <div>
        @foreach ($views as $view)
        <form action="/test/editProcess" method="POST">
            @csrf
            @method('PUT')
            <table>
                <tr>
                    <td>title</td>
                    <td>
                        <input type="text" name="title" value="{{ $view->title }}">
                    </td>
                    <td>no</td>
                    <td>
                        {{ $view->id }}
                        <input type="hidden" name="id" value="{{ $view->id }}">
                    </td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>
                        {{ $view->email }}
                        <input type="hidden" name="email" value="{{ $view->email }}">
                    </td>
                </tr>
                <tr>
                    <td>content</td>
                    <td>
                        <p>
                            <textarea name="content" id="" cols="30" rows="10">{{ $view->content }}</textarea>
                        </p>
                    </td>
                </tr>
            </table>
            <button type="submit">edit</button>
            <button type="button" onclick="goToList()">list</button>
        </form>
    </div>

            @endforeach

        <script>
            function goToList() {
                location.href='/test'
            }
        </script>
</body>
</html>