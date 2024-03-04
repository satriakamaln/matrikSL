<?php

namespace App\Http\Controllers;

use App\Models\Pilar;
use App\Models\Bidang;
use App\Models\Matrik;
use App\Models\Tahunpd;
use App\Models\Goalsdgs;
use App\Models\SkpdProv;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Misirpjmd;
use App\Models\Prioritas;
use Illuminate\Http\Request;
use App\Models\BidangUrusanSkpd;

class MatrikController extends Controller
{
    public function index()
    {
        $matriks = Matrik::with('SkpdProv', 'Bidang')->orderBy('skpd_prov_id', 'asc')->paginate(10);
        return view('index', compact('matriks'));
    }

    public function getPrioritas($tahunpd)
    {
        $prioritas = Prioritas::where('tahunpd', $tahunpd)->get();
        return response()->json($prioritas);
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
            'goal_sdgs' => Goalsdgs::all(),
            'pilars' => Pilar::all(),
            'misi_rpjmd' => Misirpjmd::all(),
            'tahunpd' => Tahunpd::all(),
            'prioritas_daerah' => Prioritas::all(),
            'skpd' => SkpdProv::all(),
            'bidangs' => Bidang::all(),
            'pivot' => BidangUrusanSkpd::all(),
        ]);
    }

    public function store(Request $request)
    {
        // Validasi data jika diperlukan
        $request->validate([
            'pilar' => 'required|string',
            'goal_sdgs' => 'required|string',
            'misi_rpjmd' => 'required|string',
            'tahunpd' => 'required|string',
            'prioritas_daerah' => 'required|string',
            'skpd_prov_id' => 'required',
            'kode_bidang' => 'required',
            'kode_program' => 'required',
            'kode_kegiatan' => 'required',
            'kode_subkegiatan' => 'required',
            'aktifitas' => 'required|string',
            'target' => 'required|string',
            'kabupaten' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
            'koordinat' => 'required|string',
            'biaya' => 'required|numeric',
        ]);

        // Proses penyimpanan data ke dalam database
        // Misalnya:
        Matrik::create([
            'pilar' => $request->pilar,
            'goal_sdgs' => $request->goal_sdgs,
            'misi_rpjmd' => $request->misi_rpjmd,
            'tahunpd' => $request->tahunpd,
            'prioritas_daerah' => $request->prioritas_daerah,
            'skpd_prov_id' => $request->skpd_prov_id,
            'kode_bidang' => $request->kode_bidang,
            'kode_program' => $request->kode_program,
            'kode_kegiatan' => $request->kode_kegiatan,
            'kode_subkegiatan' => $request->kode_subkegiatan,
            'aktifitas' => $request->aktifitas,
            'target' => $request->target,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'koordinat' => $request->koordinat,
            'biaya' => $request->biaya
        ]);

        // Redirect atau berikan respons sesuai kebutuhan Anda
        return redirect()->route('admin.beranda')->with('success', 'Data berhasil disimpan.');
    }

    public function show($id)
    {
        $matriks = Matrik::with('skpdProv', 'Bidang', 'Program', 'Kegiatan', 'Subkegiatan')->findOrFail($id);

        return view('show', compact('matriks'));
    }

    // public function edit(Request $request, $id)
    // {
    //     // return view('edit', [
    //     //     'kabupaten' => Kabupaten::all()
    //     // ]);

    //     $data = Matrik::find($id);
    //     $kabupaten = Kabupaten::all();
    //     $kecamatan = kecamatan::all();
    //     // dd($data);
    //     return view('edit', compact('data', 'kabupaten', 'kecamatan'));
    // }

    public function edit(Request $request, $id)
    {
        $matriks = Matrik::find($id);
        $pilars = Pilar::all();
        $goal_sdgs = Goalsdgs::all();
        $misi_rpjmd = Misirpjmd::all();
        $tahunpd = Tahunpd::all();
        $prioritas_daerah = Prioritas::all();
        $skpd = SkpdProv::all();
        $kabupaten = Kabupaten::all();
        $kecamatan = kecamatan::all();
        return view('edit', compact('matriks', 'pilars', 'goal_sdgs', 'misi_rpjmd', 'tahunpd', 'prioritas_daerah', 'skpd', 'kabupaten', 'kecamatan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pilar' => 'required|string',
            'goal_sdgs' => 'required|string',
            'misi_rpjmd' => 'required|string',
            'tahunpd' => 'required|string',
            'prioritas_daerah' => 'required|string',
            'skpd_prov_id' => 'required',
            'kode_bidang' => 'required',
            'kode_program' => 'required',
            'kode_kegiatan' => 'required',
            'kode_subkegiatan' => 'required',
            'aktifitas' => 'required|string',
            'target' => 'required|string',
            'kabupaten' => 'required|string',
            'kecamatan' => 'required|string',
            'kelurahan' => 'required|string',
            'koordinat' => 'required|string',
            'biaya' => 'required|numeric',
        ]);


        $matriks = Matrik::findOrFail($id);
        $matriks->update([
            'pilar' => $request->pilar,
            'goal_sdgs' => $request->goal_sdgs,
            'misi_rpjmd' => $request->misi_rpjmd,
            'tahunpd' => $request->tahunpd,
            'prioritas_daerah' => $request->prioritas_daerah,
            'skpd_prov_id' => $request->skpd_prov_id,
            'kode_bidang' => $request->kode_bidang,
            'kode_program' => $request->kode_program,
            'kode_kegiatan' => $request->kode_kegiatan,
            'kode_subkegiatan' => $request->kode_subkegiatan,
            'aktifitas' => $request->aktifitas,
            'target' => $request->target,
            'kabupaten' => $request->kabupaten,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'koordinat' => $request->koordinat,
            'biaya' => $request->biaya
        ]);

        return redirect()->route('admin.detailData', ['id' => $id])->with(['success' => 'Data Berhasil Diubah']);
    }

    public function destroy($id)
    {

        $matriks = Matrik::findOrFail($id);
        $matriks->delete();
        return redirect()->route('admin.beranda')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
