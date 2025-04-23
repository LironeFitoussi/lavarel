<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello, this is a blade template. </h1>

    <p>
        A great numnber is {{ 2 + 2 }}
    </p>
    <p>
        The current year is {{ date('Y')}}
    </p>
    <ul>
        @foreach ($allAnimals as $animal)
            <li>{{ $animal }}</li>
        @endforeach
    </ul>
    <h3>{{ $name }}</h3>
    <h2> {{ $catname }}</h2>
    <a href="/about">Go to the about page</a>
</body>
</html>