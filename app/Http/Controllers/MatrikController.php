<?php

namespace App\Http\Controllers;

use App\Models\Matrik;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use Illuminate\Http\Request;

class MatrikController extends Controller
{
    public function index()
    {
        $matriks = Matrik::paginate(5);
        return view('index', compact('matriks'));
    }

    public function getKecamatan($nama)
    {
        $kecamatan = Kecamatan::where('kabupaten', $nama)->get();
        return response()->json($kecamatan);
    }

    public function create()
    {
        return view('create', [
            'kabupaten' => Kabupaten::all()
        ]);
    }

    public function store(Request $request)
    {
        // Validasi data jika diperlukan
        $request->validate([
            'program' => 'required|string',
            'kabupaten' => 'required|string',
            'kecamatan' => 'required|string',
            'koordinat' => 'required|string',
            'biaya' => 'required|numeric',
        ]);

        // Proses penyimpanan data ke dalam database
        // Misalnya:
        Matrik::create([
            'program' => $request->program,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'koordinat' => $request->koordinat,
            'biaya' => $request->biaya
        ]);

        // Redirect atau berikan respons sesuai kebutuhan Anda
        return redirect()->route('beranda')->with('success', 'Data berhasil disimpan.');
    }

    public function show(Matrik $id)
    {
        // dd($id);

        return view('show', compact('id'));
    }
}
