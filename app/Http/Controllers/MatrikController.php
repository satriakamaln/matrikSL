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
        $matriks = Matrik::paginate(10);
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

    public function edit(Request $request, $id)
    {
        // return view('edit', [
        //     'kabupaten' => Kabupaten::all()
        // ]);

        $data = Matrik::find($id);
        $kabupaten = Kabupaten::all();
        // dd($data);
        return view('edit', compact('data', 'kabupaten'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data permintaan jika diperlukan
        $request->validate([
            'program' => 'required|string',
            'kabupaten' => 'required|string',
            'kecamatan' => 'required|string',
            'koordinat' => 'required|string',
            'biaya' => 'required|numeric',
        ]);

        // Temukan entri yang ingin diperbarui
        $matriks = Matrik::findOrFail($id);
        // Lakukan pembaruan pada entri
        $matriks->update([
            'program' => $request->program,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'koordinat' => $request->koordinat,
            'biaya' => $request->biaya
            // tambahkan atribut lain yang ingin Anda perbarui
        ]);

        // Redirect atau kembalikan respons yang sesuai
        return redirect()->route('beranda')->with(['success' => 'Data Berhasil Diubah']);
    }

    public function destroy($id)
    {
        //get post by ID
        $matriks = Matrik::findOrFail($id);
        $matriks->delete();
        return redirect()->route('beranda')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
