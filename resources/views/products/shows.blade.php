<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This page is for array list Products!</h1>
    <div>
        <p>
            @foreach ($data as $item)
                {{ $item }} <br>
            @endforeach
            

        </p>
    </div>
</body>
</html>