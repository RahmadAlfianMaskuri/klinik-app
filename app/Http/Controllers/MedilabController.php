<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedilabController extends Controller
{
    public function index(){
        // Count the number of Poli and Dokter records
        $doctorCount = \App\Models\Dokter::count();
        $dokter = \App\Models\Dokter::all();
        $poliCount = \App\Models\Poli::count(); // This will return the total count of doctors
        $poli = \App\Models\Poli::all();

        // Pass the counts to the view
        return view('layouts.medilab', compact('dokter', 'poli', 'doctorCount', 'poliCount'));
   }
}
