<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="/" class="navbar-brand mb-0 h1">Kasir Pintar</a>
            @auth


                <div class="dropdown">
                    <a style="text-decoration: none; color:white" class="dropdown-toggle" href="#" role="button"
                        id="dropdownMenuLink" data-bs-toggle="dropdown">
                        Welcome, {{ auth()->user()->username }}
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                        <li>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"><i></i>
                                    Logout</button>
                            </form>
                        </li>

                    </ul>
                </div>

            @else
                <a href="/login" style="text-decoration: none; color:white">Login</a>
            @endauth
        </div>

    </nav>




    @yield('content')



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
