<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubCriteriaRequest;
use App\Models\Criteria;
use App\Models\SubCriteria;

class SubCriteriaController extends Controller
{
    public function index()
    {
        return view('pages.sub_criteria.index', [
            'sub_criterias' => SubCriteria::with('criteria')->get()
        ]);
    }

    public function create()
    {
        return view('pages.sub_criteria.create', [
            'criterias' => Criteria::select('id', 'criteria_name')->get()
        ]);
    }

    public function store(SubCriteriaRequest $request)
    {
        SubCriteria::create([
            'criteria_id' => $request->criteria_id,
            'sub_criteria' => $request->sub_criteria,
            'parameter' => $request->parameter,
            'value' => $request->value
        ]);

        return redirect()->route('sub_criterias.index')->with(['success' => 'Data Sub Kriteria Berhasil Ditambahkan!']);
    }

    public function edit(string $id)
    {
        return view('pages.sub_criteria.edit', [
            'sub_criteria' => SubCriteria::findOrFail($id),
            'criterias' => Criteria::select('id', 'criteria_name')->get()
        ]);
    }

    public function update(SubCriteriaRequest $request, string $id)
    {
        $data = $request->all();
        $sub_criteria = SubCriteria::findOrFail($id);

        $sub_criteria->update([
            'criteria_id' => $data['criteria_id'],
            'sub_criteria' => $data['sub_criteria'],
            'parameter' => $data['parameter'],
            'value' => $data['value']
        ]);

        return redirect()->route('sub_criterias.index')->with(['success' => 'Data Sub Kriteria Berhasil Diedit!']);
    }

    public function destroy(string $id)
    {
        $sub_criteria = SubCriteria::findOrFail($id);
        $sub_criteria->delete();

        return redirect()->route('sub_criterias.index')->with(['success' => 'Data Sub Kriteria Berhasil Dihapus!']);
    }
}