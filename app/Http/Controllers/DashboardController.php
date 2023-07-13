<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use App\Models\Alternative;
use App\Models\Hospital;
use App\Models\SubCriteria;


class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('pages.dashboard.index', [
            'criterias' => Criteria::count(),
            'sub_criterias' => SubCriteria::count(),
            'alternatives' => Alternative::count(),
            'hospitals' => Hospital::count()
        ]);
    }
}