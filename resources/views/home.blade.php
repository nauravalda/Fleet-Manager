
    
        <div class="flex content-end flex-col rounded-2xl justify-center items-center ml-44">
            <div class="bg-black py-10 w-2/3 flex flex-start flex-col">
                <div>
            <h2 class="text-4xl font-bold text-secondary mb-5">Riwayat Pemesanan</h2>
            <p class="">Lacak status pemesanan kendaraan Anda.</p>
            </div>

            <table class="bg-black w-2/3 mt-5">
                <thead>
                    <tr>
                        <th class="text-white text-left p-3">Kendaraan</th>
                        <th class="text-white text-left p-3">Driver</th>
                        <th class="text-white text-left p-3">Middle Level Manager</th>
                        <th class="text-white text-left p-3">Top Level Manager</th>
                        <th class="text-white text-left p-3">Tanggal Pemesanan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                    <tr>
                        <td class="text-white p-3">{{ $data->id_kendaraan }}</td>
                        <td class="text-white p-3">{{ $data->id_driver }}</td>
                        <td class="text-white p-3">{{ $data->id_approver_1 }} | {{$data->status_1}}</td>
                        <td class="text-white p-3">{{ $data->id_approver_2 }} | {{$data->status_2}}</td>
                        <td class="text-white p-3">{{ $data->tanggal_pemesanan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        <hr class="mt-32 bg-primary h-1">
        </div>
            <hr class="bg-white h-1">
            <div class="bg-black w-2/3 flex flex-start flex-col">
            <h2 class="text-4xl font-bold text-secondary mb-5">Katalog</h2>
            <p class="">Berikut adalah data yang dapat diinput pada pemesanan.</p>

            <h3 class="text-white text-2xl font-semibold mt-10">Kendaraan</h3>
            <table class="bg-black w-2/3 mt-5">
                <thead>
                    <tr>
                        <th class="text-white text-left p-3">Nama</th>
                        <th class="text-white text-left p-3">No. Polisi</th>
                        <th class="text-white text-left p-3">Jenis</th>
                        <th class="text-white text-left p-3">Ketersediaan</th>
                        <th class="text-white text-left p-3">Vendor</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($kendaraan as $kendaraan)
                    <tr>
                        <td class="text-white p-3">{{ $kendaraan->nama }}</td>
                        <td class="text-white p-3">{{ $kendaraan->no_polisi }}</td>
                        <td class="text-white p-3">{{ $kendaraan->jenis }}</td>
                        <td class="text-white p-3">{{ $kendaraan->ketersediaan }}</td>
                        <td class="text-white p-3">{{ $kendaraan->vendor }}</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>

            <h3 class="text-white text-2xl font-semibold mt-10">Top Level Manager (Approver)</h3>
            <table class="bg-black w-2/3 mt-5">
                <thead>
                    <tr>
                        <th class="text-white text-left p-3">Nama</th>
                        <th class="text-white text-left p-3">Email</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($top as $top)
                    <tr>
                        <td class="text-white p-3">{{ $top->name }}</td>
                        <td class="text-white p-3">{{ $top->email }}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <h3 class="text-white text-2xl font-semibold mt-10">Middle Level Manager (Approver)</h3>
            <table class="bg-black w
            -2/3 mt-5">
                <thead>
                    <tr>
                        <th class="text-white
                        text-left p-3">Nama</th>
                        <th class="text-white text-left p-3">Email</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($mid as $mid)
                    <tr>
                        <td class="text-white p-3">{{ $mid->name }}</td>
                        <td class="text-white p-3">{{ $mid->email }}</td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

            <h3 class="text-white text-2xl font-semibold mt-10">Driver</h3>
            <table class="bg-black w-2/3 mt-5">
                <thead>
                    <tr>
                        <th class="text-white text-left p-3">Nama</th>
                        <th class="text-white text-left p-3">No. Telp</th>
                        <th class="text-white text-left p-3">Lokasi</th>
                        <th class="text-white text-left p-3">Region</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($driver as $driver)
                    <tr>
                        <td class="text-white p-3">{{ $driver->nama }}</td>
                        <td class="text-white p-3">{{ $driver->no_telp }}</td>
                        <td class="text-white p-3">{{ $driver->lokasi }}</td>
                        <td class="text-white p-3">{{ $driver->region }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            



            </div>
            

            


        </div>
    </body>

</html>
