<x-app-layout>
<div class="container">
    <div class="card my-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-5 fs-2">
                    <div class="card shadow-sm">
                        <b class="ms-2">Detail Riwayat Perjalanan Anda :</b>
                    </div>
                </div>
                <div class="col-md-7"></div>
                <div class="col-md-6">
                    <div class="card shadow ps-2 mt-3 mb-2">
                        <div class="row">
                            <div class="col-md-6">
                                <b class="fs-4">Nama Pembeli : </b>
                            </div>
                            <div class="col-md-6 fs-4">
                                {{ $bookings->nama }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <b class="fs-4">Waktu Keberangkatan : </b>
                            </div>
                            <div class="col-md-6 fs-4">
                                {{ \Carbon\Carbon::parse($bookings->bus->jam_keberangkatan)->format('H:i') }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 fs-4">
                                <b class="fs-4">Total Harga : </b>
                            </div>
                            <div class="col-md-6 fs-4">
                                {{ number_format($bookings->total_harga, 2, ',', '.') }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <b class="fs-4">No Pembelian</b>
                            </div>
                            <div class="col-md-6">
                                <p class="fs-4">{{ $bookings->no_pembelian }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow mt-3 ps-2">
                        <div class="row">
                            <div class="col-md-6">
                                <b class="fs-4">Nama Bus : </b>
                            </div>
                            <div class="col-md-6 fs-4">
                                {{ $bookings->bus->nama }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <b class="fs-4">Rute Perjalanan : </b>
                            </div>
                            <div class="col-md-6">
                                <p class="fs-4">{{ $bookings->asal_tujuan }} - {{ $bookings->tiba_tujuan }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <b class="fs-4">Kelas : </b>
                            </div>
                            <div class="col-md-6 fs-4">
                                {{ $bookings->bus->tipe_seat }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <b class="fs-4">Nomor Kursi : </b>
                            </div>
                            <div class="col-md-6 fs-4">
                                @foreach($bookings->details as $item)
                                {{ $item->nomor_kursi }}.
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
