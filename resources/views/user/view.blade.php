<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>viewPage</title>
</head>
<body>
    <h1>View Page</h1>
    <div>
        @foreach ($views as $view)
            <table>
                <tr>
                    <td>title</td>
                    <td>
                        {{ $view->title }}
                    </td>
                    <td>no</td>
                    <td>
                        {{ $view->id }}
                    </td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>
                        {{ $view->email }}
                    </td>
                </tr>
                <tr>
                    <td>content</td>
                    <td>
                        <p>
                            {{ $view->content }}
                        </p>
                    </td>
                </tr>
            </table>
    </div>
    <div>
        <button type="button" onclick="editBoard()">edit</button>
        <form action="/test/delete/{{$view->id}}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" >delete</button>
        </form>
        <button type="button" onclick="goToList()">list</button>
    </div>

    <script>
        function editBoard(){
            location.href='/test/edit/{{ $view->id }}'
        }
        function goToList() {
            location.href='/test'
        }
    </script>
    
            @endforeach
</body>
</html>