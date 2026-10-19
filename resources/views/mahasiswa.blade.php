@extends('base')

@section('content')
    <h2>Form Mahasiswa</h2>

    <form action="{{ url('/mahasiswa') }}" method="POST">
        @csrf

        <div class="form-group text-left">
            <label for="nim">NIM:</label>
            <input type="text" class="form-control" id="nim" name="nim" value="{{ $nim ?? '' }}" required>
        </div>

        <div class="form-group text-left">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $nama ?? '' }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>

    @if (isset($nim, $nama))
        <div class="mt-4 text-left">
            <h3>Data yang Diterima</h3>
            <p>NIM: {{ $nim }}</p>
            <p>Nama: {{ $nama }}</p>
        </div>
    @endif
@endsection
