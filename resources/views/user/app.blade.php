<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>app</title>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div id="app">
        @{{ message }}
    </div>



    <script>
        var app = new Vue(){
            el : '#app',
            data: {
                message: 'hello this is Vue.js & Laravel!',
            }
        }
    
    </script>
</body>
</html>