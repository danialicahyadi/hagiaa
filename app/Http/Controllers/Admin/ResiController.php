<?php

namespace App\Http\Controllers\Admin;

use App\Models\Resi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResiController extends Controller
{
    public function index()
    {
        $data['resi'] = Resi::orderBy('id', 'desc')->get();
        return view('admin.resi.index', compact('data'));
    }
    public function create()
    {
        return view('admin.resi.components.create');
    }
    public function generateResiCode()
    {
        $companyCode = '303'; // Kode perusahaan
        $monthCode = date('m'); // Kode bulan (06)
        $defaultChar = 'A'; // Default huruf
        $counter = 1; // Perhitungan banyaknya kode

        // Get the last counter value from database or any other source if needed
        // ...

        $counterCode = str_pad($counter, 3, '0', STR_PAD_LEFT); // Angka 001
        $resiCode = $companyCode . $monthCode . $defaultChar . $counterCode;

        // Update the counter value in database or any other source if needed
        // ...

        return $resiCode;
    }
    public function store(Request $request, Resi $resi)
    {
        $resiCode = $this->generateResiCode();
        $request->merge(['no_resi' => $resiCode]);
        $resi->create($request->all());
        return redirect()->route('admin-resi')->with('success', 'Berhasil Membuat Resi Pengiriman !');
    }
    public function show($id)
    {
        $data['resi'] = Resi::where('id', $id)->first();
        // dd($data['resi']);
        return view('admin.resi.components.show', compact('data'));
    }
    public function destroy($id)
    {
        $data['resi'] = Resi::where('id', $id)->first();
        return view('admin.resi.components.show', compact('data'));
    }
}
