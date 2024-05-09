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

    
        <div class="flex content-end flex-col rounded-2xl justify-center items-center ml-44">
            <div class="bg-black py-10 w-2/3 flex flex-start flex-col">
            <h2 class="text-4xl font-bold text-secondary mb-5">Pemesanan</h2>
            <p class="">Silahkan masukkan data pemesanan Anda.</p>
            <form action="{}" method="POST" class="flex flex-col mt-16 w-full">
                @csrf
                <input type="text" name="kendaraan" placeholder="Kendaraan" class=" text-white bg-primary rounded-lg p-3 mb-8">
                <input type="text" name="driver" placeholder="Driver" class=" text-white bg-primary rounded-lg p-3 mb-8">
                <input type="text" name="approver_1" placeholder="Middle Level Manager" class=" text-white bg-primary rounded-lg p-3 mb-8">
                <input type="text" name="approver_2" placeholder="Top Level Manager" class=" text-white bg-primary rounded-lg p-3 mb-10">

                <button type="submit" class="bg-secondary text-white rounded-lg p-3 self-end w-1/3">Buat Pesanan</button>
            </form>
            </div>


        </div>
    </body>

</html>
