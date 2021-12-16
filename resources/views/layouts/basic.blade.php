<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content ="ie=edge">

    <link href="/css/main.css" rel="stylesheet">
    <title> Posts - @yield('title')</title>
</head>
<body>
    <h1>@yield('title')</h1>

    @if (session('message'))
        <p><b>{{session('message')}}</b></p>

    @endif
    @if($errors->any())
        <div>
            Errors:
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div>
        @yield('content')
    </div>
</body>
</html>