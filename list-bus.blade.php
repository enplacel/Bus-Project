@extends('layouts.app-home')

@section('content')
<div class="card">
    <div class="card-body text-bg-dark px-0">
        <div class="row">
            <div class="col-md-2 ps-5">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio1" value="Sekali Jalan">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Sekali Jalan
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="radio2" value="Pulang Pergi">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Pulang Pergi
                    </label>
                </div>
            </div>
            <div class="col-md-2 pe-0">
                <label for="from">Dari</label>
                <select class="form-select" id="asal" name="asal" aria-label="Default select example" required>
                    <option value="">Bus/Travel: Asal</option>
                    <option value="jakarta" {{ request()->get('asal') == 'jakarta' ? 'selected' : ''}}>Jakarta</option>
                    <option value="bandung" {{ request()->get('asal') == 'bandung' ? 'selected' : ''}}>Bandung</option>
                    <option value="surabaya" {{ request()->get('asal') == 'surabaya' ? 'selected' : ''}}>Surabaya</option>
                    <option value="lembang" {{ request()->get('asal') == 'lembang' ? 'selected' : ''}}>Lembang</option>
                    <option value="bali" {{ request()->get('asal') == 'bali' ? 'selected' : ''}}>Bali</option>
                    <option value="purwokerto" {{ request()->get('asal') == 'purwokarta' ? 'selected' : ''}}>Purwokerto</option>
                    <option value="bekasi" {{ request()->get('asal') == 'bekasi' ? 'selected' : ''}}>Bekasi</option>
                    <option value="jogjakarta" {{ request()->get('asal') == 'jogjakarta' ? 'selected' : ''}}>Jogjakarta</option>
                </select>
            </div>
            <div class="col-md-1 px-0"></div>
            <div class="col-md-2 ps-0">
                <label for="from">Ke</label>
                <select class="form-select" id="ke" name="ke" aria-label="Default select example" required>
                    <option value="">Bus/Travel: tujuan</option>
                    <option value="jakarta" {{ request()->get('ke') == 'jakarta' ? 'selected' : ''}}>Jakarta</option>
                    <option value="bandung" {{ request()->get('ke') == 'bandung' ? 'selected' : ''}}>Bandung</option>
                    <option value="surabaya" {{ request()->get('ke') == 'surabaya' ? 'selected' : ''}}>Surabaya</option>
                    <option value="lembang" {{ request()->get('ke') == 'lembang' ? 'selected' : ''}}>Lembang</option>
                    <option value="bali" {{ request()->get('ke') == 'bali' ? 'selected' : ''}}>Bali</option>
                    <option value="purwokerto" {{ request()->get('ke') == 'purwokerto' ? 'selected' : ''}}>Purwokerto</option>
                    <option value="bekasi" {{ request()->get('ke') == 'bekasi' ? 'selected' : ''}}>Bekasi</option>
                    <option value="jogjakarta" {{ request()->get('ke') == 'jogjakarta' ? 'selected' : ''}}>Jogjakarta</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="date">Tanggal Berangkat</label>
                <input type="date" class="form-control" id="tgl_berangkat" value="{{ request()->get('tgl-berangkat')}}">
            </div>
            <div class="col-md-2">
                <label for="date">Tanggal Kembali</label>
                <input type="date" class="for-hide form-control" id="tgl_kembali" value="{{ request()->get('tgl-kembali')}}">
            </div>
            <div class="col-md-1 pt-4">
                <input type="text" hidden id="pax" value="{{ request()->get('jumlah-pax') }}">
                <a id="link" href="" type="button" class="btn btn-outline-light me-0">Cari</a>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
    <a href="{{ url('/')}}">Halaman Utama</a> /<a> Hasil Pencarian</a>

    <div class="row">
        <div class="col-md-8">
            <h5 class="mt-4 fw-bold">{{ Str::ucfirst(trans(request()->get('asal'))) }}, Indonesia > {{ Str::ucfirst(trans(request()->get('ke'))) }}, Indonesia</h5>
        </div>
        <div class="col-md-4">
            <h5 class="mt-4 text-end"><b>< {{ date(' d F Y, D', strtotime(request()->get('tgl-berangkat')));}} ></b></h5>
        </div>
    </div>
    <div class="row sort-row pt-2 mb-2">
        <div class="row sort-row pt-2 mb-2">
            <div class="col-md-2 text-end">
                <a href="{{ url('list-bus', [
                    'asal' => request()->get('asal'),
                    'ke' => request()->get('ke'),
                    'tgl-berangkat' => request()->get('tgl-berangkat'),
                    'sort' => request()->get('sort') === 'asc' ? 'desc' : (request()->get('sort') === 'desc' ? 'none' : 'asc'),
                    'seatSort' => request()->get('seatSort', 'desc')
                ]) }}" class="d-flex align-items-center">
                    Depart Time
                    <i class="fas fa-sort{{ request()->get('sort') === 'asc' ? '-up' : (request()->get('sort') === 'desc' ? '-down' : '') }} ps-1"></i>
                </a>
            </div>
            <div class="col-md-5">
            </div>
            <div class="col-md-1 text-end">
                <a href="{{ url('list-bus', [
                    'asal' => request('asal'),
                    'ke' => request('ke'),
                    'tgl-berangkat' => request('tgl-berangkat'),
                    'sort' => request('sort', 'desc'),
                    'seatSort' => request('seatSort') === 'asc' ? 'desc' : (request('seatSort') === 'desc' ? 'none' : 'asc')
                ]) }}" class="d-flex align-items-center">
                    Seat
                    <i class="fas fa-sort{{ request('seatSort') === 'asc' ? '-up' : (request('seatSort') === 'desc' ? '-down' : '') }} ps-1"></i>
                </a>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-1 text-end">
                <a href="{{ url('list-bus', [
                    'asal' => request('asal'),
                    'ke' => request('ke'),
                    'tgl-berangkat' => request('tgl-berangkat'),
                    'sort' => request('sort', 'desc'),
                    'seatSort' => request('seatSort', 'desc'),
                    'hargaSort' => request('hargaSort') === 'asc' ? 'desc' : (request('hargaSort') === 'desc' ? 'none' : 'asc')
                ]) }}" class="d-flex align-items-center">
                    Harga
                    <i class="fas fa-sort{{ request('hargaSort') === 'asc' ? '-up' : (request('hargaSort') === 'desc' ? '-down' : '') }} ps-1"></i>
                </a>
            </div>
        </div>
    </div>




    @forelse ($items as $item)
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row p-0 m-0">
                <div class="col-sm-12 ps-0">
                    <div class="labeltag fw-bold">{{ $item->nama }}</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="mt-0 fs-5"><b>{{ date('H:i', strtotime($item->jam_keberangkatan))  }}</b></div>
                    <span class="estimasi pb-1">12j53m*</span>
                </div>
                <div class="col-md-2">
                    <div class="terminal">
                        <span class="fw-bold">{{ $item->asal }}</span>
                    </div>
                </div>
                <div class="col-md-1">
                    <i class="fas fa-angle-double-right fa-lg"></i>
                </div>
                <div class="col-md-2">
                    <div class="terminal">
                        <span class="fw-bold">{{ $item->tujuan }}</span>
                    </div>
                </div>
                <div class="col-md-1">
                    <span class="fw-bold">{{ $item->jumlah_seat }}</span>
                </div>
                <div class="col-md-2 text-end">
                    <i class="icon fas fa-male fa-lg">  Rp. {{ number_format($item->harga,0,',','.') }}</i> <i class="fas fa-angle-down fa-sm "></i>
                </div>
                <div class="col-md-2 text-end">
                    <button {{ date('H:i:s') > $item->jam_keberangkatan ? "disabled" : "" }} type="button" class="btn btn-warning shadow pilih-seat-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="{{ $item->id }}" data-seat="{{ $item->jumlah_seat }}">
                        pilih
                    </button>
                </div>
            </div>
            <div class="row border-top border-dark-subtle pt-2">
                <div class="col-sm-2">
                </div>
                <div class="col-md-3">
                    <div class="teks fw-bold">{{ $item->nama }}</div>
                    <i class="fas fa-wifi"></i> <i class="fab fa-usb"></i> <i class="fas fa-utensils"></i>
                </div>
                <div class="col-md-2">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <div class="teks">
                        Foto | Info Lebih Lanjut
                    </div>
                </div>
                <div class="col-md-2">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="alert alert-danger" role="alert">
        Maaf, data yang anda cari tidak tersedia
      </div>
    @endforelse



</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{ url('add-cart')}}" method="POST">
        @csrf
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Pilih Kursi Keberangkatan | </h1>
            <img class="gambar-dot-putih" src="{{asset('images/record.png')}}" alt="">Tersedia
            <img class="gambar-dot" src="{{asset('images/record-button.png')}}" alt="">Terisi
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="number" hidden name="id_bus" id="id_bus">
                <input type="text" hidden name="tgl_berangkat" value="{{ request()->query('tgl-berangkat') }}">

                <div class="seat" id="seat"></div>
                <div id="loading-screen" style="display: none;position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1000; text-align: center; padding: 20px 0px;">
                    <div class="spinner-border text-dark" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-md-12 text-center">
                    <div>Kursi anak dikenakan harga tiket dewasa</div>
                    <div>Anak duduk dengan orang tua tidak di kenakan biaya.</div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                            Kursi yang di pilih bisa jadi akan berbeda pada saat keberangkatan.
                            </div>
                        </div>
                    </div>
                </div>
            @if (Auth::user())
            <button type="submit" class="btn btn-dark" id="continue-button">Lanjutkan</button>
            @else
            <a href="login" class="btn btn-dark" id="continue-button">Lanjutkan</a>
            @endif
            </div>

        </div>
        </div>
    </form>

</div>
@endsection
@push('after-script')
<script>
    var url_string = window.location.search;
    var url = new URLSearchParams(url_string);
    var c = url.get("tgl-kembali");
    console.log(c);

    if (c) {
        console.log('ada tanggal kembali');
        document.getElementById("radio2").checked = true;
    }else {
        console.log('tidak ada tanggal kembali');
        document.getElementById("radio1").checked = true;
    }

    function updateLink() {
        var inputValAsal = document.getElementById('asal').value;
        var inputValKe = document.getElementById('ke').value;
        var inputValTglBerangkat = document.getElementById('tgl_berangkat').value;
        var inputValTglKembali = document.getElementById('tgl_kembali').value;
        var inputValJumlahPax = document.getElementById('pax').value;

        var parmBerangkat =  '&tgl-berangkat=' + encodeURIComponent(inputValTglBerangkat);
        var parmKembali =  '&tgl-kembali=' + encodeURIComponent(inputValTglKembali);
        console.log('tgl kembali :' +inputValTglKembali);

        baseUrl = '{{ url("list-bus") }}';
        // newUrl = baseUrl + '?asal=' + encodeURIComponent(inputValAsal) + '&ke=' + encodeURIComponent(inputValKe) + '&tgl-berangkat=' + encodeURIComponent(inputValTglBerangkat) + '&jumlah-pax=' + encodeURIComponent(inputValJumlahPax);
        newUrl = `${baseUrl}?asal=${encodeURIComponent(inputValAsal)}&ke=${encodeURIComponent(inputValKe)}&jumlah-pax=${encodeURIComponent(inputValJumlahPax)}${inputValTglKembali != '' ? parmBerangkat + parmKembali : parmBerangkat}`;
            document.getElementById('link').href = newUrl;
    }

    document.getElementById('asal').addEventListener('change', updateLink);
    document.getElementById('ke').addEventListener('change', updateLink);
    document.getElementById('tgl_berangkat').addEventListener('change', updateLink);
    document.getElementById('tgl_kembali').addEventListener('change', updateLink);
    document.getElementById('pax').addEventListener('change', updateLink);

    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('exampleModal');
        const seatContainer = modal.querySelector('.seat');
        const formIdBus = document.getElementById('id_bus');
        const continueButton = document.getElementById('continue-button'); // Tombol Lanjutkan
        continueButton.disabled = true;

        function checkSeatSelection() {
        const selectedSeats = document.querySelectorAll('input[name="seat[]"]:checked');
        continueButton.disabled = selectedSeats.length === 0;
        console.log('ok');
        }




        modal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const idBus = button.getAttribute('data-id');
            const seatCount = button.getAttribute('data-seat');

            formIdBus.value = idBus;

            document.getElementById('loading-screen').style.display = 'block';

            fetch ('cek-seat/'+ idBus)
            .then(response => {
                response.json().then(data => {

                // Menggunakan data dari server untuk menentukan seat layout
                let seatType = seatCount; // Ini bisa dinamis berdasarkan data yang ada
                let seatDetails = data.map(order => order.details).flat(); // Menggabungkan semua detail seat
                let seatLayout = '';
                seatLayout = createSeatLayout(seatType, seatDetails);

                // Menampilkan seat layout di elemen dengan id 'seat'
                seatContainer.innerHTML = seatLayout;

                const seatCheckboxes = document.querySelectorAll('input[name="seat[]"]');
                seatCheckboxes.forEach(checkbox => {
                    checkbox.addEventListener('change', checkSeatSelection);
                });

                // Call the function initially in case there's any pre-selected seat
                checkSeatSelection();

                document.getElementById('loading-screen').style.display = 'none';

            });
        });



    });

    function createSeatRow(rowNumber, seatType, seatDetails) {
        let seatsHTML = '';
        let seatsPerRow = 4; // Misal, tipe 24 dan 28 memiliki 4 seat per baris, lainnya 5

        for (let i = 0; i < seatsPerRow; i++) {
            let seatLetter = String.fromCharCode(65 + i); // Menghasilkan A, B, C, D, dst.
            let seatNumber = rowNumber + seatLetter;
            let isBooked = seatDetails.some(detail => detail.nomor_kursi === seatNumber);

            seatsHTML += `
                <div class="col-md-1 ${i == 1 ? 'me-4' : 'me-2'} mb-2 ps-0">
                    <input type="checkbox" ${isBooked ? 'disabled' : ''} class="btn-check" name="seat[]" id="btn-check-${seatNumber.toLowerCase()}" autocomplete="off" value="${seatNumber}">
                    <label class="btn ${isBooked ? 'btn-danger' : 'btn-outline-success'} btn-sm" for="btn-check-${seatNumber.toLowerCase()}">${seatNumber}</label>
                </div>
            `;
        }

        return `
            <div class="row d-flex justify-content-center">
                ${seatsHTML}
            </div>
        `;
    }

    function createSeatLayout(seatType, seatDetails) {
        let layoutHTML = `
            <div class="container">
                <div class="row">
                    <div class="col-md-9 text-end p-0">
                        <img class="gambar" src="{{asset('images/steering-wheel.png')}}" alt="steering-wheel.png">
                    </div>
                </div>
                <div class="row ps-1 d-flex justify-content-center">
                    <div class="col-md-6 text-bg-dark text-center my-2">
                        <h6>Depan</h6>
                    </div>
                </div>
        `;

        let rows = 0;
        console.log(seatType); // Sesuaikan jumlah baris per tipe

        if(seatType == 24){
            rows = 6;
        } else if(seatType == 32){
            rows = 8;
        } else if (seatType == 28) {
            rows = 7;
        } else {
            rows = 9
        }
        for (let i = 1; i <= rows; i++) {
            layoutHTML += createSeatRow(i, seatType, seatDetails);
        }

        layoutHTML += `
            <div class="row ps-1 d-flex justify-content-center">
                <div class="col-md-6 text-bg-dark text-center mt-2">
                    <h6>Belakang</h6>
                </div>
            </div>
            </div>
        `;

        return layoutHTML;
    }

    const radio1 = document.getElementById('radio1');
    const radio2 = document.getElementById('radio2');
    const forHide = document.querySelector('.for-hide');

    function updateFieldVisibility() {
        if (radio1.checked) {
            forHide.style.display = 'none';
        } else if (radio2.checked) {
            forHide.style.display = 'block';
        }
    }

    radio1.addEventListener('change', updateFieldVisibility);
    radio2.addEventListener('change', updateFieldVisibility);

    updateFieldVisibility();

});



</script>
@endpush
