@extends('layouts.app-home')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-5">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://images.pexels.com/photos/803940/pexels-photo-803940.jpeg?auto=compress&cs=tinysrgb&w=600" class="d-block w-100 img-thumbnail" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/3616652/pexels-photo-3616652.jpeg?auto=compress&cs=tinysrgb&w=600" class="d-block w-100 img-thumbnail" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/1224762/pexels-photo-1224762.jpeg?auto=compress&cs=tinysrgb&w=600" class="d-block w-100 img-thumbnail" alt="...">
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-7">
                <div class="bg text-bg-dark border border-light border-4 rounded">
                    <div class="container">
                        <div class="row pt-3">
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" checked value="sekali jalan" type="radio" name="radio" id="radio1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    Sekali Jalan
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" value="pulang pergi" type="radio" name="radio" id="radio2">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                    Pulang Pergi
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6">
                                <label for="from">Dari:</label>
                                <select class="form-select" id="asal" name="asal" aria-label="Default select example" required>
                                    <option value="">Bus/Travel: Asal</option>
                                    <option value="jakarta">Jakarta</option>
                                    <option value="bandung">Bandung</option>
                                    <option value="surabaya">Surabaya</option>
                                    <option value="lembang">Lembang</option>
                                    <option value="bali">Bali</option>
                                    <option value="purwokerto">Purwokerto</option>
                                    <option value="bekasi">Bekasi</option>
                                    <option value="jogjakarta">Jogjakarta</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="to">Ke:</label>
                                <select class="form-select" id="ke" name="ke" aria-label="Default select example" required>
                                    <option value="">Bus/Travel: Asal</option>
                                    <option value="jakarta">Jakarta</option>
                                    <option value="bandung">Bandung</option>
                                    <option value="surabaya">Surabaya</option>
                                    <option value="lembang">Lembang</option>
                                    <option value="bali">Bali</option>
                                    <option value="purwokerto">Purwokerto</option>
                                    <option value="bekasi">Bekasi</option>
                                    <option value="jogjakarta">Jogjakarta</option>
                                  </select>
                            </div>
                        </div>
                        <div class="row pt-2">
                            <div class="col-md-4">
                                <label for="date">Tanggal Berangkat:</label>
                            <input type="date" class="form-control" id="tgl_berangkat" value="" required>
                            </div>
                            <div  class="col-md-4">
                                <label for="date" class="d-none" id="label_kembali">Tanggal Kembali:</label>
                                <input type="date" class="form-control d-none " id="tgl_kembali" value="" required>
                            </div>
                            <div id="stay-field" class="col-md-4">
                                <label for="pax">Jumlah Pax:</label>
                                <select class="form-select" id="pax" name="pax" aria-label="Default select example" required>
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                  </select>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pt-3">
                                    <a id="link" href="#" type="button" class=" form-control btn btn-outline-warning">Cari Bus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('after-style')
<style>
    body {
    position: relative;
    margin: 0;
    padding: 0;
    height: 100vh; /* Ensures the body takes the full height of the viewport */
    overflow: hidden; /* Prevents scrollbars from appearing */
}

body::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url(https://images.pexels.com/photos/681335/pexels-photo-681335.jpeg?auto=compress&cs=tinysrgb&w=400);
    background-size: cover;
    background-repeat: no-repeat;
    opacity: 0.5; /* Adjust the opacity value as needed */
    z-index: -1; /* Ensures the pseudo-element is behind the body content */
}

.bg {
    background-color: black;
    opacity: 1;
    height: 300px;
}
</style>
@endpush

@push('after-script')
<script>
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

    const radio1 = document.getElementById('radio1');
    const radio2 = document.getElementById('radio2');
    const labelKembali = document.getElementById('label_kembali');
    const formKembali = document.getElementById('tgl_kembali');
    const stayField = document.getElementById('stay-field')

    function updateFieldVisibility() {
        if(radio1.checked) {
            labelKembali.classList.add('d-none');
            formKembali.classList.add('d-none');

        } else {
            labelKembali.classList.remove('d-none');
            formKembali.classList.remove('d-none');
        }
    }

    radio1.addEventListener('change', updateFieldVisibility);
    radio2.addEventListener('change', updateFieldVisibility);

    updateFieldVisibility();


</script>
@endpush

