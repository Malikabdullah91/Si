<?php

namespace App\Http\Controllers;

use App\Models\PenerimaanKaryawan;
use Illuminate\Http\Request;

class PenerimaanKaryawanController extends Controller
{
    public function index()
    {
        $karyawans = PenerimaanKaryawan::all();
        return view('penerimaan_karyawans.index', compact('karyawans'));
    }

    public function create()
    {
        return view('penerimaan_karyawans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
            'TanggalLamar' => 'required|date',
            'TanggalPenerimaan' => 'required|date',
            'Jabatan' => 'required',
            'Gaji' => 'required|numeric',
            'Departemen' => 'required',
            'LokasiKerja' => 'required',
        ]);

        PenerimaanKaryawan::create($request->all());

        return redirect()->route('penerimaan_karyawans.index')
                         ->with('success', 'Karyawan created successfully.');
    }

    public function show(PenerimaanKaryawan $penerimaanKaryawan)
    {
        return view('penerimaan_karyawans.show', compact('penerimaanKaryawan'));
    }

    public function edit(PenerimaanKaryawan $penerimaanKaryawan)
    {
        return view('penerimaan_karyawans.edit', compact('penerimaanKaryawan'));
    }

    public function update(Request $request, PenerimaanKaryawan $penerimaanKaryawan)
    {
        $request->validate([
            'Nama' => 'required',
            'TanggalLamar' => 'required|date',
            'TanggalPenerimaan' => 'required|date',
            'Jabatan' => 'required',
            'Gaji' => 'required|numeric',
            'Departemen' => 'required',
            'LokasiKerja' => 'required',
        ]);

        $penerimaanKaryawan->update($request->all());

        return redirect()->route('penerimaan_karyawans.index')
                         ->with('success', 'Karyawan updated successfully.');
    }

    public function destroy(PenerimaanKaryawan $penerimaanKaryawan)
    {
        $penerimaanKaryawan->delete();

        return redirect()->route('penerimaan_karyawans.index')
                         ->with('success', 'Karyawan deleted successfully.');
    }
}
