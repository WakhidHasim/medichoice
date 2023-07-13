<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlternativeRequest;
use App\Models\Alternative;
use App\Models\Hospital;
use Illuminate\Http\Request;

class AlternativeController extends Controller
{
    public function index()
    {
        return view('pages.alternative.index', [
            'alternatives' => Alternative::with('hospital')->get()
        ]);
    }

    public function create()
    {
        return view('pages.alternative.create', [
            'hospitals' => Hospital::select('id', 'hospital_name')->get()
        ]);
    }

    public function store(AlternativeRequest $request)
    {
        Alternative::create([
            'hospital_id' => $request->hospital_id,
            'quality' => $request->quality,
            'facilities' => $request->facilities,
            'cost' => $request->cost,
            'location' => $request->location
        ]);

        return redirect()->route('alternatives.index')->with(['success' => 'Data Alternatif Berhasil Ditambahkan!']);
    }

    public function edit(string $id)
    {
        return view('pages.alternative.edit', [
            'alternative' => Alternative::findOrFail($id),
            'hospitals' => Hospital::select('id', 'hospital_name')->get()
        ]);
    }

    public function update(AlternativeRequest $request, string $id)
    {
        $data = $request->all();
        $alternative = Alternative::findOrFail($id);

        $alternative->update([
            'hospital_id' => $data['hospital_id'],
            'quality' => $data['quality'],
            'facilities' => $data['facilities'],
            'cost' => $data['cost'],
            'location' => $data['location']
        ]);

        return redirect()->route('alternatives.index')->with(['success' => 'Data Alternatif Berhasil Diedit!']);
    }


    public function destroy(string $id)
    {
        $alternative = Alternative::findOrFail($id);
        $alternative->delete();

        return redirect()->route('alternatives.index')->with(['success' => 'Data Alternatif Berhasil Dihapus!']);
    }
}
