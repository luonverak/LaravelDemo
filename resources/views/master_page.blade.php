<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid bg-dark p-3 float-end">
        <h1 class="text-light">
            @if (request()->route()->uri === 'add-student')
                Add Page
            @elseif (request()->route()->uri === 'update-student')
                Update Page
            @else
                Home Page
            @endif
        </h1>
        <a href="/add-student">
            @if (request()->route()->uri == '/')
                <button class="btn btn-primary float-end">Add Student</button>
            @endif
            @if (request()->route()->uri == 'update-student')
            @endif
        </a>
    </div>
    @yield('content')
</body>

</html>
