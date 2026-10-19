<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Form Mahasiswa
    <div class="container text-center mt-4">

    <div class="row g-0">
        <div class="col border border-dark p-3">
            LEFT HEADER
        </div>
        <div class="col border border-dark p-3">
            RIGHT HEADER
        </div>
    </div>

    <div class="row g-0">
        <div class="col border border-dark p-3">
            LEFT NAVIGATION
        </div>

        <div class="col border border-dark p-3">
            <form action="/mahasiswa" method="POST">
        @csrf

        <div>
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" required>
        </div>
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>

        <button type="submit">Kirim</button>
    </form> 
        </div>

        <div class="col border border-dark p-3">
            RIGHT NAVIGATION
        </div>
    </div>

    <div class="row g-0">
        <div class="col border border-dark p-3">
            FOOTER
        </div>
    </div>
    </div>
    {{-- @if (isset($nim, $nama))
        <h2>Data yang Diterima</h2>
        <p>NIM: {{ $nim }}</p>
        <p>Nama: {{ $nama }}</p>
    @endif --}}
</body>
</html>