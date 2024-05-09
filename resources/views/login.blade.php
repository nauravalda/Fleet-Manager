<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Login</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />



    </head>
    <body class="font-sans bg-black text-white/50 w-full flex justify-center items-center h-screen">
        <div class="flex flex-col w-3/4 max-w-[48rem] h-[32rem] rounded-2xl py-48 justify-center items-center border-primary border-2">
            <div class="items-start">
            <h2 class="text-4xl font-bold text-secondary mb-10">Welcome!</h2>
            <p class="">Masukkan email dan password untuk masuk ke akun Anda.</p>
            <form action="{}" method="POST" class="flex flex-col mt-10 w-full">
                @csrf
                <input type="email" name="email" placeholder="Email" class=" text-white bg-primary rounded-lg p-3 mb-5">
                <input type="password" name="password" placeholder="Password" class="text-white bg-primary rounded-lg p-3 mb-5">
                <button type="submit" class="bg-secondary text-white rounded-lg p-3">Login</button>
            </form>
            </div>
        </div>
    </body>

</html>
