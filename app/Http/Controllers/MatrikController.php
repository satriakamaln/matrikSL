<?php

namespace App\Http\Controllers;

use App\Models\Goalsdgs;
use App\Models\Matrik;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Http\Request;

class MatrikController extends Controller
{
    public function index()
    {
        $matriks = Matrik::paginate(10);
        return view('index', compact('matriks'));
    }

    public function getKecamatan($kabupaten)
    {
        $kecamatan = Kecamatan::where('kabupaten', $kabupaten)->get();
        return response()->json($kecamatan);
    }

    public function getKelurahan($kelurahan)
    {
        $kelurahan = Kelurahan::where('kecamatan', $kelurahan)->get();
        return response()->json($kelurahan);
    }

    public function create()
    {
        return view('create', [
            'kabupaten' => Kabupaten::all(),
            'kelurahan' => Kelurahan::all(),
            'goal_sdgs' => Goalsdgs::all()
        ]);
    }

    public function store(Request $request)
    {
        // Validasi data jika diperlukan
        $request->validate([
            'pilar' => 'required|string',
            'goal_sdgs' => 'required|string',
            'misi_rpjmd' => 'required|string',
            'prioritas_daerah' => 'required|string',
            'program' => 'required|string',
            'kegiatan' => 'required|string',
            'subkegiatan' => 'required|string',
            'aktifitas' => 'required|string',
            'target' => 'required|string',
            'kabupaten' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
            'koordinat' => 'required|string',
            'biaya' => 'required|numeric',
            'dinas_pengampu' => 'required|string',
        ]);

        // Proses penyimpanan data ke dalam database
        // Misalnya:
        Matrik::create([
            'pilar' => $request->pilar,
            'goal_sdgs' => $request->goal_sdgs,
            'misi_rpjmd' => $request->misi_rpjmd,
            'prioritas_daerah' => $request->prioritas_daerah,
            'program' => $request->program,
            'kegiatan' => $request->kegiatan,
            'subkegiatan' => $request->subkegiatan,
            'aktifitas' => $request->aktifitas,
            'target' => $request->target,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'koordinat' => $request->koordinat,
            'biaya' => $request->biaya,
            'dinas_pengampu' => $request->dinas_pengampu
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
        $kecamatan = kecamatan::all();
        // dd($data);
        return view('edit', compact('data', 'kabupaten', 'kecamatan'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data permintaan jika diperlukan
        $request->validate([
            'program' => 'required|string',
            'kabupaten' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
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
            'kelurahan' => $request->kelurahan,
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
