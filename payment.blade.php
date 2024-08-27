@extends('layouts.app-home')

@section('content')
<div class="card">
    <div class="card-body text-bg-dark">
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
            <div class="for-hide col-md-2">
                <label for="date">Tanggal Kembali</label>
                <input type="date" class="form-control" id="tgl_kembali" value="{{ request()->get('tgl-kembali')}}">
            </div>
            <div class="col-md-1 pt-4">
                <input type="text" hidden id="pax" value="{{ request()->get('jumlah-pax') }}">
                <a id="link" href="" type="button" class="btn btn-outline-light me-0">Cari</a>
            </div>
        </div>
    </div>
</div>

<div class="container mt-2">
    <a href="{{ url('/') }}">Halaman Utama</a> /<a href="{{ url('list-bus')}}"> Hasil Pencarian</a> / <a>Detil Penumpang</a>
    <form action="{{ url('payment')}}" method="POST">
        @csrf
        <div class="row mt-5">
            <div class="col-md-8 mt-2">
                <h5>Masukkan data pemesan tiket & lakukan pembayaran</h5>
                <div class="card shadow">
                    <div class="card-header">
                        <b>Info Pengambil Tiket</b>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label>Panggilan</label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-select" name="panggilan" aria-label="Default select example" required>
                                    <option value="mr" selected>Mr</option>
                                    <option value="ms">Ms</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label >Nama*</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="nama_pengambil" aria-label="default input example" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label >Alamat Email*</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" name="email" type="email" aria-label="default input example" required>
                                <label class="text" >e-ticket Anda akan terkirim ke email ini. *Silakan periksa <b class="email">inbox/spam/junk folder</b> di email Anda untuk mendapatkan e-ticket Anda.</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label >No.Handphone*</label>
                            </div>
                            <div class="col-md-8">
                                <div class="input-group md">
                                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><img class="gambar" src="{{asset('images/indonesia.png')}}" alt=""> +62</button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="#">Action</a></li>
                                      <li><a class="dropdown-item" href="#">Another action</a></li>
                                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                                      <li><hr class="dropdown-divider"></li>
                                      <li><a class="dropdown-item" href="#">Separated link</a></li>
                                    </ul>
                                    <input type="number" name="no.hp" class="form-control" aria-label="Text input with dropdown button" required>
                                    <label class="text" >Masukkan nomor telepon yang benar karena akan digunakan oleh staff kami untuk menghubungi anda jika terjadi hal penting mengenai pemesanan anda.</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label >Kewarganegaraan/Wilayah*</label>
                            </div>
                            <div class="col-md-8">
                                <select class="form-select" name="kewarganegaraan" aria-label="Default select example" required>
                                    <option selected disabled>Kewarganegaraan/Wilayah</option>
                                    <option value="indonesia">Indonesia</option>
                                    <option value="malaysia">Malaysia</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label >Jumlah Penumpang</label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control" name="jumlah_penumpang" type="text" disabled aria-label="default input example" placeholder="{{ Cart::content()->count()}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alert alert-primary shadow mt-3" role="alert">
                    Sebuah akun baru akan otomatis dibuat untuk anda nikmati lebih cepat layanan pemesanan tiket.
                  </div>
                <div class="alert alert-primary shadow mt-3" role="alert">
                    Untuk beberapa PO bus harga tiket bisa berubah-ubah tanpa adanya pemberitahuan sebelumnya ataupun mengenakan biaya tambahan (surcharge). Setiap biaya tambahan (surcharge) akan dibebankan kepada penumpang bus. Jika penumpang tidak menyetujui hal ini, kami akan mengembalikan pembayaran sejumlah yang telah dibayarkan. Pengembalian uang akan dilakukan melalui cara pembayaran yang sama dengan yang telah dilakukan oleh penumpang.
                </div>
                @foreach (Cart::content() as $row)
                    <div class="card shadow mt-3">
                        <div class="card-header fw-bold">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Informasi Penumpang {{ $loop->iteration }}</h6>
                                </div>
                                <div class="col-md-6 text-end">
                                    <h6>Kursi : {{ $row->options->seat }}</h6>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <input type="text" hidden name="seat[]" value="{{ $row->options->seat }}">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="nama_penumpang" class="col-sm-5 col-form-label text-end fw-bold">Nama*</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="nama_penumpang[]" class="form-control" id="nama_penumpang" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row mt-4">
                                        <label for="kewarganegaraan_penumpang" class="col-sm-5 col-form-label text-end fw-bold">Kewarganegaraan/Wilayah*</label>
                                        <div class="col-sm-7">
                                            <select class="form-select" name="kewarganegaraan_penumpang[]" aria-label="Default select example" id="kewarganegaraan_penumpang[]" required>
                                                <option selected disabled>Kewarganegaraan</option>
                                                <option value="indonesia">Indonesia</option>
                                                <option value="malaysia">Malaysia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row mt-4">
                                        <label for="tgl_lahir_penumpang" class="col-sm-5 col-form-label text-end fw-bold">Tanggal Lahir*</label>
                                        <div class="col-sm-7">
                                            <input type="date" name="tgl_lahir_penumpang[]" class="form-control" id="tgl_lahir_penumpang" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3 row">
                                        <label for="inputPassword" class="col-sm-5 col-form-label text-end fw-bold">No. Handphone*</label>
                                        <div class="col-sm-7">
                                        <input type="number" name="no_hp_penumpang[]" class="form-control" id="inputPassword" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row mt-4">
                                        <label for="inputPassword" class="col-sm-5 col-form-label text-end fw-bold">No.KTP / Passport(Pilih satu saja)*</label>
                                        <div class="col-sm-7">
                                            <input type="number" name="no_ktp_penumpang[]" class="form-control" id="inputPassword" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 row pt-0">
                                        <label for="inputPassword" class="col-sm-5 col-form-label text-end fw-bold">Alamat Email*</label>
                                        <div class="col-sm-7">
                                            <input type="email" name="email_penumpang[]" class="form-control" id="inputPassword" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="card shadow my-4">
                    <div class="card-header">
                        <span>Total: Rp {{ number_format(Cart::subtotal() + 20000,0,',','.') }}</span>
                    </div>
                    <div class="card-body">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="agreement">
                            <label class="form-check-label" for="flexCheckDefault">
                                Saya menyetujui kebijakan Harapan Jaya <a class="link-primary" href="">ticketing</a>. Harap berada di tempat pemberangkatan setidaknya <u>30 menit</u> sebelum jadwal keberangkatan. No Refund, No Reschedule.
                            </label>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12 fw-bold fs-5">
                                Pastikan untuk memeriksa hal berikut sebelum melakukan pembayaran
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <ol>
                                        <li>Tanggal berangkat dan Jumlah tiket.</li>
                                        <li>Jumlah yang harus dibayar.</li>
                                        <li>Matikan popup blocker jika Anda melakukan pembayaran dengan layanan internet banking. <a class="link-primary" href="">Klik di sini untuk mempelajari cara menonaktifkan popup blocker.</a></li>
                                    </ol>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 text-end">
                                    <button type="submit" id="btnBayar" class="btn btn-dark btn-lg">Bayar Sekarang</button>
                                </div>
                                <div class="col-md-6">
                                    <a href="{{ route('destroy-cart') }}" class="btn btn-danger btn-lg">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-1">
                <div class="card shadow pe-0" >
                    <div class="card-header">
                        <span class="fw-bold">Info Keberangkatan</span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label class="fw-bold">Tanggal Berangkat:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>{{ Cart::get(Cart::content()->keys()->first())->options->tgl_berangkat }}</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="fw-bold">Berangkat Dari:</label>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-12">
                                <label>{{ Cart::get(Cart::content()->keys()->first())->options->asal }}</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="fw-bold">Tiba Di:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>{{ Cart::get(Cart::content()->keys()->first())->options->tujuan }}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <label class="fw-bold">Bus:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                    <label>{{Cart::get(Cart::content()->keys()->first())->name}}</label>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="fw-bold">Nomor Kursi:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>
                                    @foreach(Cart::content() as $row)
                                       {{ $row->options->seat}}.
                                    @endforeach

                                </label>
                            </div>
                        </div>
                        <div class="row  mt-2">
                            <div class="col-md-12">
                                <label class="fw-bold">Harga Tiap Tiket:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>{{ Cart::content()->count()}} x {{ number_format(Cart::get(Cart::content()->keys()->first())->price,0,',','.')   }}</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mt-3">
                    <div class="card-header">
                        <h6>Informasi Pembayaran</h6>
                    </div>
                    <div class="card-body">
                        <div class="row mb-1">
                            <div class="col-md-7">
                                Harga Tiket Berangkat:
                            </div>
                            <div class="col-md-5 text-end">
                                <span>{{ number_format(Cart::subtotal() + 20000,0,',','.') }}</span>
                            </div>
                        </div>
                        {{-- <div class="row mb-1">
                            <div class="col-md-7">
                                Harga Tiket Pulang:
                            </div>
                            <div class="col-md-5 text-end">
                                <span>0,00</span>
                            </div>
                        </div> --}}
                        <div class="row mb-2">
                            <div class="col-md-7">
                                Biaya Layanan:
                            </div>
                            <div class="col-md-5 text-end">
                                <span>20.000</span>
                            </div>
                        </div>
                        {{-- <div class="row mb-1">
                            <div class="col-md-7">
                                Diskon:
                            </div>
                            <div class="col-md-5 text-end">
                                <span>-0,00</span>
                            </div>
                        </div> --}}
                        {{-- <div class="row mb-2">
                            <div class="col-md-7">
                                PPN:
                            </div>
                            <div class="col-md-5 text-end">
                                <span>0,00</span>
                            </div>
                        </div> --}}
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 fw-bold fs-5">
                                TOTAL BAYAR
                            </div>
                            <div class="col-md-6 text-end">
                                <span class="fw-bold fs-5 text-primary">Rp. {{ number_format(Cart::subtotal() + 20000,0,',','.') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="alert shadow alert-primary" role="alert">
                            <span>Harga sewaktu-waktu dapat berubah menurut masing-masing penyedia jasa.</span>
                          </div>
                    </div>
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
    const continueBtn = document.getElementById('btnBayar');
    const checkBox = document.getElementById('agreement');
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

    continueBtn.disabled = true;

    function check()
    {
        continueBtn.disabled = !checkBox.checked;
    }
    check();


    checkBox.addEventListener('change', check);
    document.getElementById('asal').addEventListener('change', updateLink);
    document.getElementById('ke').addEventListener('change', updateLink);
    document.getElementById('tgl_berangkat').addEventListener('change', updateLink);
    document.getElementById('tgl_kembali').addEventListener('change', updateLink);
    document.getElementById('pax').addEventListener('change', updateLink);



</script>
@endpush
