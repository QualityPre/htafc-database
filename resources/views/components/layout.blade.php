<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <title>Huddersfield Town Players Database</title>
</head>

<body class="mb-20">
    <nav class="my-4 flex items-center justify-between">
        <a href="/"><img class="w-20" src="{{ asset('images/htafc.png') }}" alt="htafc logo"
                class="logo" /></a>
        <ul class="mr-6 flex space-x-6 text-lg">
            <li>
                <a href="register.html" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a href="login.html" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a>
            </li>
        </ul>
    </nav>

    <main>
        {{ $slot }}
    </main>
    {{-- <footer
        class="bg-laravel fixed bottom-0 left-0 mt-24 flex h-24 w-full items-center justify-start font-bold text-white opacity-90 md:justify-center">
        <p class="ml-2">Copyright &copy; QualityPre 2022, All Rights reserved</p>

        <a href="create.html" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Add player</a>
    </footer> --}}
</body>

</html>
