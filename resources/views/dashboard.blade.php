<div>
    <div class="flex content-end flex-col rounded-2xl justify-center items-center ml-44">
        <div class="bg-black py-10 w-2/3 flex flex-start flex-col">
            <h2 class="text-4xl font-bold text-secondary mb-5">Dashboard</h2>
            <p class="">Monitor penggunaan kendaraan PT Tambang Jaya Abadi</p>

            <div class="flex flex-row mt-16 w-full">
                <div class="bg-primary w-1/3 p-5 rounded-lg mr-5">
                    <h3 class="text-white text-2xl font-bold">Total Kendaraan</h3>
                    <p class="text-white text-4xl font-bold">0</p>

                </div>
                <div class="bg-primary w-1/3 p-5 rounded-lg mr-5">
                    <h3 class="text-white text-2xl font-bold">Total Driver</h3>
                    <p class="text-white text-4xl font-bold">0</p>
                </div>
                <div class="bg-primary w-1/3 p-5 rounded-lg">
                    <h3 class="text-white text-2xl font-bold">Total Pemesanan</h3>
                    <p class="text-white text-4xl font-bold">0</p>
                </div>
                <div class="bg-primary w-1/3 p-5 rounded-lg mr-5 mt-5">
                    <h3 class="text-white text-2xl font-bold">Total Approval</h3>
                    <p class="text-white text-4xl font-bold">0</p>
                </div>


            </div>

            <table class="bg-black w-2/3 mt-16">
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
                        <td class="text-white p-3">{ $data->id_kendaraan }}</td>
                        <td class="text-white
                        p-3">{ $data->id_driver }}</td>
                        <td class="text-white p-3">{ $data->id_approver_1 }} | {{$data->status_1}}</td>
                        <td class="text-white p-3">{ $data->id_approver_2 }} | {{$data->status_2}}</td>
                        <td class="text-white p-3">{ $data->tanggal_pemesanan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>





            </div>
        </div>
    </div>