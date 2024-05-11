<div>
    <div class="flex content-end flex-col rounded-2xl justify-center items-center ml-44">
        <div class="bg-black py-10 w-2/3 flex flex-start flex-col">
            <h2 class="text-4xl font-bold text-secondary mb-5">Approval</h2>
            <p class="">Berikut adalah data pemesanan yang perlu Anda setujui.</p>
            <form action="{{ route('update-status') }}" method="POST">
            <table class="bg-black w-2/3 mt-16">
                <thead>
                    <tr>
                        <th class="text-white text-left p-3">Requester</th>
                        <th class="text-white text-left p-3">Kendaraan</th>

                        <th class="text-white text-left p-3">Driver</th>
                        <th class="text-white text-left p-3">Lokasi Tambang</th>
                        <th class="text-white text-left p-3">Region</th>
                        <th class="text-white text-left p-3">
                            Approval
                        </th>
                        <th class="text-white text-left p-3">
                            Tanggal Pemesanan </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($view as $view)
                    <tr data-id="{{ $view->id }}">
                        <td class="text-white p-3">{{ $view->admin_name }} <br> {{ $view->admin_email }}</td>
                        <td class="text-white p-3">{{ $view->kendaraan_nama}} <br> {{$view->no_polisi}}</td>
                        <td class="text-white p-3">{{ $view->driver_nama}} <br> {{$view->driver_no_telp}}</td>
                        <td class="text-white p-3">{{ $view->lokasi}}</td>
                        <td class="text-white p-3">{{ $view->region}}</td>
                        <td class="text-white p-3">
                            
                                <!-- input approve or reject -->
                                @csrf
                                <select id="approval" name="approval" class="text-white bg-primary rounded-lg p-3 mb-5">
                                    
                                    <option value="approve-{{ $view->id }}">Approve</option>
                                    <option value="reject-{{ $view->id }}">Reject</option>
                                    
                                </select>
                                <button type="submit" class="bg-secondary text-white rounded-xl p-3 w-full ">Submit</button>

                            

                        </td>
                        <td class="text-white p-3">{{ $view->created_at }}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>

            
            </form>



        </div>



        <div class="bg-black py-10 w-2/3 flex flex-start flex-col">
            <h2 class="text-4xl font-bold text-secondary mb-5">History</h2>
            <p class="">Berikut adalah data pemesanan yang telah Anda konfirmasi.</p>
            <form action="{{ route('update-status') }}" method="POST">
            <table class="bg-black w-2/3 mt-16">
                <thead>
                    <tr>
                        <th class="text-white text-left p-3">Requester</th>
                        <th class="text-white text-left p-3">Kendaraan</th>

                        <th class="text-white text-left p-3">Driver</th>
                        <th class="text-white text-left p-3">Lokasi Tambang</th>
                        <th class="text-white text-left p-3">Region</th>
                        <th class="text-white text-left p-3">
                            Status
                        </th>
                        <th class="text-white text-left p-3">
                            Tanggal Pemesanan </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($history as $history)
                    <tr>
                        <td class="text-white p-3">{{ $history->admin_name }} <br> {{ $history->admin_email }}</td>
                        <td class="text-white p-3">{{ $history->kendaraan_nama}} <br> {{$history->no_polisi}}</td>
                        <td class="text-white p-3">{{ $history->driver_nama}} <br> {{$history->driver_no_telp}}</td>
                        <td class="text-white p-3">{{ $history->lokasi}}</td>
                        <td class="text-white p-3">{{ $history->region}}</td>
                        <td class="text-white p-3"> {{ $current_user->role == 'mid-lvl' ? ($history->status_1 == 0 ? 'Rejected' : 'Approved') :
                            
                            ( $history->status_2 == 0 ? 'Rejected' : 'Approved') }}
                        </td>
                        <td class="text-white p-3">{{ $history->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            
            </form>



        </div>



    </div>
</div>
</body>

