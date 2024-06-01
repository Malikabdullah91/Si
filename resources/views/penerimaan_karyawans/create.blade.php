@extends('layout')

@section('content')
    <h1 class="mb-4">Create Karyawan</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('penerimaan_karyawans.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Nama">Nama:</label>
            <input type="text" id="Nama" name="Nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="TanggalLamar">Tanggal Lamar:</label>
            <input type="date" id="TanggalLamar" name="TanggalLamar" class="form-control">
        </div>
        <div class="form-group">
            <label for="TanggalPenerimaan">Tanggal Penerimaan:</label>
            <input type="date" id="TanggalPenerimaan" name="TanggalPenerimaan" class="form-control">
        </div>
        <div class="form-group">
            <label for="Jabatan">Jabatan:</label>
            <input type="text" id="Jabatan" name="Jabatan" class="form-control">
        </div>
        <div class="form-group">
            <label for="Gaji">Gaji:</label>
            <input type="number" id="Gaji" name="Gaji" step="0.01" class="form-control">
        </div>
        <div class="form-group">
            <label for="Departemen">Departemen:</label>
            <input type="text" id="Departemen" name="Departemen" class="form-control">
        </div>
        <div class="form-group">
            <label for="LokasiKerja">Lokasi Kerja:</label>
            <input type="text" id="LokasiKerja" name="LokasiKerja" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
