<div class="flex content-end flex-col rounded-2xl justify-center items-center ml-44">
    <div class="bg-black py-10 w-2/3 flex flex-start flex-col">
        <h2 class="text-4xl font-bold text-secondary mb-5">Pemesanan</h2>
        <p class="">Silahkan masukkan data pemesanan Anda.</p>
        <form action="{{ url('pemesanan') }}" method="POST" class="flex flex-col mt-16 w-full">
            @csrf
            
            <p class="mb-3">Kendaraan</p>
            <select id="kendaraan-dropdown" name="kendaraan" class="text-white bg-primary rounded-lg p-3 pr-3 mb-6" >
            <option>Pilih Kendaraan</option>
                @foreach ($kendaraan as $kendaraan)
                <option value="{{ $kendaraan->id }}" class="mb-2">{{ $kendaraan->nama }} - {{$kendaraan->no_polisi}}</option>
                @endforeach
            </select>

            <p class="mb-3">Driver</p>
            <select id="driver-dropdown" name="driver" class="text-white bg-primary rounded-lg p-3 mb-6" >
            <option>Pilih Driver</option>
                @foreach ($driver as $driver)
                <option value="{{ $driver->id }}" class="mb-2">{{ $driver->nama }} - {{$driver->no_telp}}</option>
                @endforeach
            </select>

            <p class="mb-3">Middle Level Manager</p>
            <select id="mid-lvl-dropdown" name="mid" class="text-white bg-primary rounded-lg p-3 mb-6">
                <option>Pilih Middle Level Manager (Approver 1)</option>
                @foreach ($mid as $mid)
                <option value="{{ $mid->id }}" class="mb-2">{{ $mid->name }} - {{$mid->email}}</option>
                @endforeach
            </select>

            <p class="mb-3">Top Level Manager</p>
            <select id="top-lvl-dropdown" name="top" class="text-white bg-primary rounded-lg p-3 mb-10">
                <option>Pilih Top Level Manager (Approver 2)</option>
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
function sendDataToServer() {
    var kendaraanId = document.getElementById('kendaraan-dropdown').value;
    var driverId = document.getElementById('driver-dropdown').value;
    var midLvlId = document.getElementById('mid-lvl-dropdown').value;
    var topLvlId = document.getElementById('top-lvl-dropdown').value;

    // Create a FormData object to store the form data
    var formData = new FormData();
    formData.append('kendaraanId', kendaraanId);
    formData.append('driverId', driverId);
    formData.append('midLvlId', midLvlId);
    formData.append('topLvlId', topLvlId);

    // Send the form data using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/pemesanan', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log('Data berhasil disimpan');
        }
    };
    xhr.send(formData);

    // Prevent the default form submission
    return false;
}

</script>



</html>

