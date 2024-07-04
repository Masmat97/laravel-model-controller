<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Movies List</h1>
    <ul>
        @foreach ($movies as $movie)
            <ul>
                <li>
                    {{ $movie->title }}
                    {{''}}{{''}}{{''}}
                    {{ $movie->original_title }}
                    {{ $movie->nationality }}
                </li>
               
            </ul>
        @endforeach
    </ul>
</body>

</html>
