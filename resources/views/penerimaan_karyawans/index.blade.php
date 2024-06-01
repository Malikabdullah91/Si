@extends('layout')

@section('content')
    <h1 class="mb-4">Penerimaan Karyawan</h1>
    <a href="{{ route('penerimaan_karyawans.create') }}" class="btn btn-primary mb-3">Create New Karyawan</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Tanggal Lamar</th>
                <th>Tanggal Penerimaan</th>
                <th>Jabatan</th>
                <th>Gaji</th>
                <th>Departemen</th>
                <th>Lokasi Kerja</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawans as $karyawan)
            <tr>
                <td>{{ $karyawan->id }}</td>
                <td>{{ $karyawan->Nama }}</td>
                <td>{{ $karyawan->TanggalLamar }}</td>
                <td>{{ $karyawan->TanggalPenerimaan }}</td>
                <td>{{ $karyawan->Jabatan }}</td>
                <td>{{ $karyawan->Gaji }}</td>
                <td>{{ $karyawan->Departemen }}</td>
                <td>{{ $karyawan->LokasiKerja }}</td>
                <td>
                    <a href="{{ route('penerimaan_karyawans.show', $karyawan->id) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('penerimaan_karyawans.edit', $karyawan->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('penerimaan_karyawans.destroy', $karyawan->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
