<x-app-layout>
    <x-slot name="header">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Riwayat Pesanan') }}
                </h2>
            </div>
            <div class="col-md-6 text-md-end mt-3 mt-md-0">
                <a href="{{ route('home') }}" class="btn btn-dark shadow-lg" id="continue-button">
                    <i class="fas fa-ticket-alt"></i> Pesan Tiket
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="container">
            <div class="py-6">
                <div class="container">
                    @if($data->count())
                        @foreach($data as $order)
                            <div class="card mb-4 shadow">
                                <div class="card-body">
                                    <div class="card-text">
                                        <div class="row">
                                            <div class="col-md-6 fs-5">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <b class="fs-3">{{$order->asal_tujuan}} - {{$order->tiba_tujuan}}</b>
                                                    </div>
                                                </div>
                                                {{-- <div class="row">
                                                    <div class="col-md-12">
                                                        <strong>Nomor Kursi: </strong>
                                                        @foreach($order->details as $item)
                                                        {{ $item->nomor_kursi }},
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <strong>Waktu Keberangkatan :</strong> {{ $order->bus->jam_keberangkatan }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <strong>Harga :</strong> Rp {{ $order->total_harga }}
                                                    </div>
                                                </div> --}}
                                            </div>
                                            <div class="col-md-6 fs-5">
                                                {{-- <div class="row">
                                                    <div class="col-md-12">
                                                        <strong>Nama Pembeli : </strong>{{ $order->nama }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <strong>Kelas : </strong>{{ $order->bus->tipe_seat }}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <strong>Nomor Tiket : </strong>{{ $order->no_pembelian }}
                                                    </div>
                                                </div> --}}
                                                {{-- <div class="row">
                                                    <div class="col-md-12">
                                                        <strong>No.Pembelian : </strong>{{ $order-> }}
                                                    </div>
                                                </div> --}}
                                                <div class="row text-end">
                                                    <div class="col-md-12">
                                                        <a href="{{ url('riwayat',$order->id ) }}" class="btn btn-dark">Detail Riwayat</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted">
                                        <p>Dibeli pada: {{ $order->tanggal_berangkat }} </p>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-info text-center" role="alert">
                            <strong>Info:</strong> Tidak ada riwayat pembelian tiket.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

