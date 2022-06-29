<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CampZone;

class CampController extends Controller
{
    public function index()
    {
        $campzones = CampZone::get();
        return view('index' , compact ('campzones'));
    }

    public function show(int $campZone_id)
    {
        $campZone = CampZone::find($campZone_id);
        return view('show', [
           'campZone' => $campZone,
        ]);
    }
}
