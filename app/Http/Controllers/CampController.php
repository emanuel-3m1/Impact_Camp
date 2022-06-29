<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CampZones;

class CampController extends Controller
{
    public function index()
    {
        $campzones = CampZones::get();
        return view('index' , compact ('campzones'));
    }

    public function show(int $campZone_id)
    {
        $campZone = CampZones::find($campZone_id);
        return view('show', [
           'campZone' => $campZone,
        ]);
    }
}
