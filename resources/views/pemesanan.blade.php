<div class="flex content-end flex-col rounded-2xl justify-center items-center ml-44">
    <div class="bg-black py-10 w-2/3 flex flex-start flex-col">
        <h2 class="text-4xl font-bold text-secondary mb-5">Pemesanan</h2>
        <p class="">Silahkan masukkan data pemesanan Anda.</p>
        <form action="{}" method="POST" class="flex flex-col mt-16 w-full">
            @csrf
            
            <p class="mb-3">Kendaraan</p>
            <select id="kendaraan-dropdown" class="text-white bg-primary rounded-lg p-3 pr-3 mb-6">
                @foreach ($kendaraan as $kendaraan)
                <option value="{{ $kendaraan->id }}" class="mb-2">{{ $kendaraan->nama }} - {{$kendaraan->no_polisi}}</option>
                @endforeach
            </select>

            <p class="mb-3">Driver</p>
            <select id="driver-dropdown" class="text-white bg-primary rounded-lg p-3 mb-6">
                @foreach ($driver as $driver)
                <option value="{{ $driver->id }}" class="mb-2">{{ $driver->nama }} - {{$driver->no_telp}}</option>
                @endforeach
            </select>

            <p class="mb-3">Middle Level Manager</p>
            <select id="mid-lvl-dropdown" class="text-white bg-primary rounded-lg p-3 mb-6">
                @foreach ($mid as $mid)
                <option value="{{ $mid->id }}" class="mb-2">{{ $mid->name }} - {{$mid->email}}</option>
                @endforeach
            </select>

            <p class="mb-3">Top Level Manager</p>
            <select id="top-lvl-dropdown" class="text-white bg-primary rounded-lg p-3 mb-10">
                @foreach ($top as $top)
                <option value="{{ $top->id }}" class="mb-2">{{ $top->name }} - {{$top->email}}</option>
                @endforeach
            </select>
            

            <button type="submit" class="bg-secondary text-white rounded-2xl p-3 self-end w-1/3 max-w-44">Buat Pesanan</button>

        </form>
    </div>


</div>
</body>


<script>
    const kendaraanDropdown = document.getElementById('kendaraan-dropdown');
    kendaraanDropdown.addEventListener('change', (e) => {
        console.log(e.target.value);
    });

    const driverDropdown = document.getElementById('driver-dropdown');
    driverDropdown.addEventListener('change', (e) => {
        console.log(e.target.value);
    });

    const midLvlDropdown = document.getElementById('mid-lvl-dropdown');
    midLvlDropdown.addEventListener('change', (e) => {
        console.log(e.target.value);
    });

</script>

</html>

