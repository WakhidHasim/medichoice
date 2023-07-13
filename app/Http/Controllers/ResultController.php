<?php

namespace App\Http\Controllers;

use App\Models\Alternative;

class ResultController extends Controller
{
    public function index() {
        $penilaian_alternatif = Alternative::with('hospital')->get();
        $normalisasi = [];
        $proses_penentuan = [];
        $data_ranking = [];
        $dt_quality = [];
        $dt_facilities = [];
        $dt_cost = [];
        $dt_location = [];
        $r_quality = 0;
        $r_facilities = 0;
        $r_cost = 0;
        $r_location = 0;
        foreach ($penilaian_alternatif as $list) {
            $dt_quality[] = $list->quality;
            $dt_facilities[] = $list->facilities;
            $dt_cost[] = $list->cost;
            $dt_location[] = $list->location;
        }
        foreach ($penilaian_alternatif as $list) {
            $row = [];
            $row['hospital_name'] = $list->hospital->hospital_name;
            $row['quality'] = floatval(number_format($list->quality / max($dt_quality),2));
            $row['facilities'] = floatval(number_format($list->facilities / max($dt_facilities),2));
            $row['cost'] = floatval(number_format(min($dt_cost) / $list->cost,2));
            $row['location'] = floatval(number_format(min($dt_location) / $list->location,2));
            $normalisasi[] = $row;
        }
        foreach ($penilaian_alternatif as $list) {
            $r_quality = floatval(number_format($list->quality / max($dt_quality),2));
            $r_facilities = floatval(number_format($list->facilities / max($dt_facilities),2));
            $r_cost = floatval(number_format(min($dt_cost) / $list->cost,2));
            $r_location = floatval(number_format(min($dt_location) / $list->location,2));
            $row = [];
            $row['hospital_name'] = $list->hospital->hospital_name;
            $row['quality'] = $r_quality;
            $row['facilities'] = $r_facilities;
            $row['cost'] = $r_cost;
            $row['location'] = $r_location;
            $row['hasil'] = floatval(number_format(($r_quality*(30/100)) + ($r_facilities*(40/100)) + ($r_cost*(10/100)) + ($r_location*(20/100)),2));
            $proses_penentuan[] = $row;
            $data_ranking[] = $row;
        }
        usort($data_ranking, function ($a, $b) {
            return $b['hasil'] <=> $a['hasil'];
        });

        return view('pages.result.index', [
            'alternatives' => Alternative::with('hospital')->get(),
            'normalisasi' => $normalisasi,
            'proses_penentuan' => $proses_penentuan,
            'data_ranking' => $data_ranking,
        ]);
    }
}
