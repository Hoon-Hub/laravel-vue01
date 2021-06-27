<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Write</title>
</head>
<body>
    <div>
        <h1>Express Your Mind!</h1>
        <form action="/test/write" method="post">
            @csrf
            <table>
                <tr>
                    <td>email</td>
                    <td>
                        <input type="email" value="gei12@nasd.com" name="email">
                    </td>
                </tr>
                <tr>
                    <td>title</td>
                    <td>
                        <input type="text" name="title" value="title">
                    </td>
                </tr>
                <tr>
                    <td>content</td>
                    <td>
                        <textarea name="content" cols="30" rows="10" >asdasdasd</textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit">submit</button>
                        <button type="button" onclick="goToBoardList()">List</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <script>
        function goToBoardList() {
            location.href="/test"
        }
    </script>
</body>
</html>