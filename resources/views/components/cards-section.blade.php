<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite("resources/js/app.js")
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container mt-3 mb-3">
            <div class="row">
                @foreach($comics as $comic)
                    <div class="col col-lg-2 col-md-3 col-sm-6 col-12 my_col">
                        <img src="{{ $comic['thumb']}}" alt="{{ $comic['title'] }}">
                        <span>{{ $comic['title'] }}</span>
                    </div>
                @endforeach                    
            </div>
        </div>
    </main>
</body>
</html>