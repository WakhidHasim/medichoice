<?php

namespace App\Http\Controllers;

use App\Http\Requests\CriteriaRequest;
use App\Models\Criteria;

class CriteriaController extends Controller
{
    public function index()
    {
        return view('pages.criteria.index', [
            'criterias' => Criteria::orderBy('id', 'asc')->get()
        ]);
    }

    public function create()
    {
        return view('pages.criteria.create');
    }

    public function store(CriteriaRequest $request)
    {
        Criteria::create([
            'criteria_name' => $request->criteria_name,
            'weight' => $request->weight,
            'type' => $request->type
        ]);

        return redirect()->route('criterias.index')->with(['success' => 'Data Kriteria Berhasil Ditambahkan!']);
    }

    public function edit(string $id)
    {
        return view('pages.criteria.edit', [
            'criteria' => Criteria::findOrFail($id)
        ]);
    }

    public function update(CriteriaRequest $request, string $id)
    {
        $data = $request->all();
        $criteria = Criteria::findOrFail($id);

        $criteria->update([
            'criteria_name' => $data['criteria_name'],
            'weight' => $data['weight'],
            'type' => $data['type']
        ]);

        return redirect()->route('criterias.index')->with(['success' => 'Data Kriteria Berhasil Diedit!']);
    }

    public function destroy(string $id)
    {
        $criteria = Criteria::findOrFail($id);
        $criteria->delete();

        return redirect()->route('criterias.index')->with(['success' => 'Data Kriteria Berhasil Dihapus!']);
    }
}