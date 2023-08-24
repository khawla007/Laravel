<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
</head>
<body>
    <header>
        <h1>hello header!</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
    <h1>hello footer!</h1>
    </footer>
</body>
</html>
