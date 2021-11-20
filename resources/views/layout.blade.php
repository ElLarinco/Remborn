<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <style>
        html {
            min-height: 100vh;
            overflow-x: hidden;
        }
        body {
            min-height: inherit;
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1 1 auto;
        }
    </style>
</head>
<body>
    @include('partials.header')

    <main class="container mx-auto px-1">
        @yield('content')
    </main>

    @include('partials.footer')

    <script>
        let toggleBtn = document.querySelector("#navbar-toggle");
        let collapse = document.querySelector("#navbar-collapse");

        toggleBtn.onclick = () => {
            collapse.classList.toggle("hidden");
            collapse.classList.toggle("flex");
        };
    </script>
</body>
</html>