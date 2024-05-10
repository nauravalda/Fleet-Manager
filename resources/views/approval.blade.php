<div>
    <div class="flex content-end flex-col rounded-2xl justify-center items-center ml-44">
        <div class="bg-black py-10 w-2/3 flex flex-start flex-col">
            <h2 class="text-4xl font-bold text-secondary mb-5">Approval</h2>
            <p class="">Berikut adalah data pemesanan yang perlu Anda setujui.</p>

            <table class="bg-black w-2/3 mt-16">
                <thead>
                    <tr>
                        <th class="text-white text-left p-3">Requester</th>
                        <th class="text-white text-left p-3">Kendaraan</th>
                        
                        <th class="text-white text-left p-3">Driver</th>
                        <th class="text-white text-left p-3">
                            Approval
                        </th>
                        <th class="text-white text-left p-3">
                            Tanggal Pemesanan </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $data)
                    <tr>
                        <td class="text-white
                        p-3">{{ $data->id_admin }}</td>
                        <td class="text-white p-3">{{ $data->id_kendaraan }}</td>
                        <td class="text-white p-3">{{ $data->id_driver }}</td>
                        <td class="text-white p-3">{{ $data->id_approver_1 }} | {{$data->status_1}}</td>
                        <td class="text-white p-3">{{ $data->tanggal_pemesanan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            



</div>