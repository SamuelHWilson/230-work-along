<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>This is a view.</h1>
    <ul>
        @foreach($facts as $fact)
            <li>{{ $fact }}</li>
        @endforeach
    </ul>
</body>
</html>