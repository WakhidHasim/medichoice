<?php

namespace App\Http\Controllers;

use App\Http\Requests\HospitalRequest;
use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index()
    {
        return view('pages.hospital.index', [
            'hospitals' => Hospital::orderBy('id', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('pages.hospital.create');
    }

    public function store(HospitalRequest $request)
    {
        Hospital::create([
            'hospital_name' => $request->hospital_name,
            'address' => $request->address
        ]);

        return redirect()->route('hospitals.index')->with(['success' => 'Data Rumah Sakit Berhasil Ditambahkan!']);
    }

    public function edit(string $id)
    {
        return view('pages.hospital.edit', [
            'hospital' => Hospital::findOrFail($id)
        ]);
    }

    public function update(HospitalRequest $request, string $id)
    {
        $data = $request->all();
        $hospital = Hospital::findOrFail($id);

        $hospital->update([
            'hospital_name' => $data['hospital_name'],
            'address' => $data['address']
        ]);

        return redirect()->route('hospitals.index')->with(['success' => 'Data Rumah Sakit Berhasil Diedit!']);
    }

    public function destroy(string $id)
    {
        $hospital = Hospital::findOrFail($id);
        $hospital->delete();

        return redirect()->route('hospitals.index')->with(['success' => 'Data Rumah Sakit Berhasil Dihapus!']);
    }
}