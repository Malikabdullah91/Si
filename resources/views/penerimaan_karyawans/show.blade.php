@extends('layout')

@section('content')
    <h1 class="mb-4">View Karyawan</h1>
    <div class="card">
        <div class="card-header">
            <strong>ID:</strong> {{ $penerimaanKaryawan->id }}
        </div>
        <div class="card-body">
            <p><strong>Nama:</strong> {{ $penerimaanKaryawan->Nama }}</p>
            <p><strong>Tanggal Lamar:</strong> {{ $penerimaanKaryawan->TanggalLamar }}</p>
            <p><strong>Tanggal Penerimaan:</strong> {{ $penerimaanKaryawan->TanggalPenerimaan }}</p>
            <p><strong>Jabatan:</strong> {{ $penerimaanKaryawan->Jabatan }}</p>
            <p><strong>Gaji:</strong> {{ $penerimaanKaryawan->Gaji }}</p>
            <p><strong>Departemen:</strong> {{ $penerimaanKaryawan->Departemen }}</p>
            <p><strong>Lokasi Kerja:</strong> {{ $penerimaanKaryawan->LokasiKerja }}</p>
            <a href="{{ route('penerimaan_karyawans.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@endsection
