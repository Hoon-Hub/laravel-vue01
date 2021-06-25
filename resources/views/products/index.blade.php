<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <div>
        <p>
            {{ $title }}<br>
            {{ $description }}
        </p>
    </div>
    <div>
        <form action="/products/show" method="post">
            <input type="text" name="id" value="testing..">
            @csrf
            <button type="submit">Show</button>
        </form>
    </div>
    <div>
        <form action="/products/shows" method="post">
            @csrf
            <input type="text" value="testing1" name="id1">
            <input type="text" value="testing2" name="id2">
            <input type="text" value="testing3" name="id3">
            <button type="submit">Shows</button>

        </form>
    </div>
</body>
</html>