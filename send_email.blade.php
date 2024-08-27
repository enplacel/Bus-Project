<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Laravel: Send Email Via SMTP GMAIL @ qadrLabs.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .email-container {
            max-width: 700px;
            margin: 30px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            border: 4px solid #008cba;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #008cba;
            padding: 20px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
            text-align: center;
            color: #ffffff;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            letter-spacing: 1px;
        }
        .content {
            padding: 20px;
            color: #333333;
        }
        .content h2 {
            text-align: center;
            color: #008cba;
            font-size: 22px;
            margin-bottom: 20px;
        }
        .content .p-border {
            font-size: 16px;
            margin: 10px 0;
            border: 3px solid #008cba;
            padding: 10px;
            border-radius: 5px;
        }
        .details {
            background-color: #f9f9f9;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
            border-left: 5px solid #008cba;
        }
        .details p {
            margin: 8px 0;
            font-size: 15px;
        }
        .details strong {
            color: #008cba;
        }
        .footer {
            background-color: #008cba;
            padding: 15px;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
            text-align: center;
            color: #ffffff;
            font-size: 14px;
        }
        .footer a {
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <div class="email-container">
        <div class="header">
            <h1>E-Tiket</h1>
        </div>
        <div class="content">
            <h2>Detail Perjalanan Anda</h2>
            <p>Terima kasih telah memesan tiket bus melalui layanan kami. Berikut adalah detail perjalanan Anda:</p>
            <div class="details">
                <p><strong>Nama Pembeli:</strong> {{ $data->nama }}</p>
                <p><strong>Email:</strong> {{ $data->email }}</p>
                <p><strong>Nomor Telepon:</strong> {{ $data->no_hp }}</p>
                <p><strong>Tujuan:</strong> {{ $data->asal_tujuan }} - {{ $data->tiba_tujuan }}</p>
                <p><strong>Nomor Kursi:</strong>
                    @foreach($data->details as $item)
                        {{ $item->nomor_kursi }},
                    @endforeach
                </p>
                <p><strong>Tanggal Keberangkatan:</strong> {{ $data->tanggal_berangkat }}</p>
                <p><strong>Nama Bus:</strong> Bus {{ $data->bus->nama }}</p>
                <p><strong>Kelas:</strong> {{ $data->bus->tipe_seat }}</p>
                <p><strong>Nomor Tiket:</strong> {{ $data->no_pembelian }}</p>
                <p><strong>Harga Tiket:</strong> Rp {{ $data->total_harga }}</p>
            </div>
            <p class="p-border">Mohon tunjukkan E-Tiket ini kepada petugas saat check-in di terminal. Pastikan Anda tiba di terminal 30 menit sebelum waktu keberangkatan.</p>
            <p class="p-border">Selamat menikmati perjalanan Anda!</p>
        </div>
        <div class="footer">
            <p>&copy; 2024 Perusahaan Bus Sejahtera. Semua hak dilindungi undang-undang.</p>
            <p><a href="#">Kebijakan Privasi</a> | <a href="#">Syarat & Ketentuan</a></p>
        </div>
    </div>
{{-- <div class="row">
    <div class="col-md-6">
        <b>BUKTI PEMBELIAN (RECEIPT)</b>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        Nomor : {{ $data->no_pembelian }}
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        Tanggal : {{ \Carbon\Carbon::parse($data->tanggal)->translatedFormat('d F Y,') }}
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-6">
        <b >DATA PEMESAN</b>
        <div class="row">
            <div class="col-md-12">
                Nama : {{ $data->nama }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                Email : {{ $data->email }}
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <b>DETAIL PEMBAYARAN</b>
        <div class="row">
            <div class="col-md-12">
                No.PO : {{ $data->bus_id }}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                Detail Transaksi : Lunas
            </div>
        </div>
    </div>
</div> --}}
</body>

</html>
