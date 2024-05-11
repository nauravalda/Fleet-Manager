<div>
    <div class="flex content-end flex-col rounded-2xl justify-center items-center ml-44">
        <div class="bg-black py-10 w-2/3 flex flex-start flex-col">
            <h2 class="text-4xl font-bold text-secondary mb-5">Dashboard</h2>
            <p class="">Monitor penggunaan kendaraan PT Tambang Jaya Abadi</p>

            <div class="flex flex-row mt-16 w-full">
                <div class="bg-primary w-1/3 p-5 rounded-lg mr-5">
                    <h3 class="text-white text-xl font-bold">Total Pemesanan Disetujui</h3>
                    <p class="text-white text-4xl font-bold">{{ $totalApproved }}</p>

                </div>
                <div class="bg-primary w-1/3 p-5 rounded-lg mr-5">
                    <h3 class="text-white text-xl font-bold">Total Pemesanan Ditolak</h3>
                    <p class="text-white text-4xl font-bold">{{ $totalRejected }}</p>
                </div>
                <div class="bg-primary w-1/3 p-5 rounded-lg">
                    <h3 class="text-white text-xl font-bold">Total Pemesanan Pending</h3>
                    <p class="text-white text-4xl font-bold">{{$totalPending}}</p>
                </div>


            </div>

            <!-- bar chart -->
            <div>
            <div style="width: 80%; margin: auto;">
                <canvas id="barChart"></canvas>
            </div>
            </div>

            <table class="bg-black w-2/3 mt-16">
                <thead>
                    <tr>
                        <th class="text-white text-left p-3">Requester</th>
                        <th class="text-white text-left p-3">Kendaraan</th>
                        <th class="text-white text-left p-3">Driver</th>
                        <th class="text-white text-left p-3">Lokasi Tambang</th>
                        <th class="text-white text-left p-3">Region</th>
                        <th class="text-white text-left p-3">Middle Level Manager</th>
                        <th class="text-white text-left p-3">Top Level Manager</th>
                        <th class="text-white text-left p-3">Tanggal Pemesanan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                    <tr>
                        <td class="text-white p-3">
                            {{ $data->admin_name }} 
                            <br> 
                            <p class="text-tertiary">{{ $data->admin_email }}</p></td>

                        <td class="text-white p-3">
                            {{ $data->kendaraan_nama}} <br> 
                            <p class="text-tertiary">{{ $data->no_polisi}}</p></td>
                        </td>
                        <td class="text-white p-3">{{ $data->driver_nama}} 
                            <br> 
                            <p class="text-tertiary">{{ $data->driver_no_telp}}</p></td>
                        </td>
                        <td class="text-white p-3">{{ $data->lokasi}}</td>
                        <td class="text-white p-3">{{ $data->region}}</td>
                        <td class="text-white p-3">{{ $data->approver1_name }} 
                            <br> 
                            <p class="text-tertiary">
                            @if($data->status_1 == 3)
                                Pending
                            @elseif($data->status_1 == 0)
                                Ditolak
                            @elseif($data->status_1 == 1)
                                Diterima
                            @else
                                Status Tidak Valid
                            @endif
                            </p></td>
                        </td>
                        <td class="text-white p-3">{{ $data->approver2_name }} 
                            <br>
                            <p class="text-tertiary">
                            @if($data->status_2 == 3)
                                Pending
                            @elseif($data->status_2 == 0)

                                Ditolak
                            @elseif($data->status_2 == 1)
                                Diterima
                            @else
                                Status Tidak Valid
                            @endif
                            </p></td>
                        
                        </td>
                        <td class="text-white p-3">{{ $data->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- export in excel -->
            <div class="flex flex-row mt-5">
                <a href="/" class="bg-secondary text-white p-3 rounded-lg">Export to Excel</a>

            </div>





            </div>
        </div>
    </div>
</body>

    <script>
    var ctx = document.getElementById('barChart').getContext('2d');
    var labels = json($report_dashboard['labels']);
    var data = json($report_dashboard['data']);

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Data',
                data: data,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    </script>