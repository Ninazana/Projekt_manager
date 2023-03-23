<html>
    <body>
        <h1>Hello, {{ $name }}</h1>
    </body>
</html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Hello!</title>
    </head>
    <body>
        <ul>
        @foreach ($names as $name)
            <li>{{ $name }} </li>
        @endforeach
        </ul>
    </body>
</html>