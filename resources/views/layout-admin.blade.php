<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @vite('resources/css/app.css')
  <title>Pemesanan</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />



</head>

<body class="font-sans bg-black text-white/50 w-full flex-row justify-center items-center h-screen">

  <nav class="bg-black fixed h-full border-r-2 border-primary flex">
    <div class="flex flex-wrap items-center justify-between mx-auto p-4">

      <div class="items-center justify-between w-56 items-center px-3" id="navbar-sticky">
        <h2 class="text-3xl font-bold text-secondary mb-10">NikelFleet </h2>
        <div>
          <a href="/home" aria-current="page" class="block w-full h-12 bg-primary text-white pl-4 py-3 mb-8 rounded-xl hover:opacity-80 active:bg-secondary focus:outline-none">
            <p>Home</p>
          </a>
          <a href="/pemesanan" aria-current="page" class="block w-full h-12 bg-primary text-white pl-4 py-3 mb-8 rounded-xl hover:opacity-80 active:bg-secondary focus:outline-none">
            <p>Pemesanan</p>
          </a>
        </div>
        <div class="h-96">
           

        </div>
        <div href="" aria-current="page" class="block w-full h-20 bg-primary text-white pl-4 py-4 bottom-0 mb-8 rounded-xl ">
        <p class="font-bold">{{ $current_user->name }}</p>
          <p class="opacity-70">{{ $current_user->role }}</p>
        </div>
        <a href="{{ url('/logout') }}">
        <button type="submit" class="bg-secondary text-white rounded-3xl w-full p-3 hover:opacity-70"
        href="{{ url('/logout') }}"
        >Logout</button>
        </a>
      </div>
    </div>
  </nav>
