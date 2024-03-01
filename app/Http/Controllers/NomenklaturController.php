<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\Program;
use App\Models\Kegiatan;
use App\Models\SkpdProv;
use App\Models\RefProgram;
use App\Models\Subkegiatan;
use Illuminate\Http\Request;
use App\Models\BidangUrusanSkpd;

class NomenklaturController extends Controller
{
    public function getBidangsBySkpd($skpdId)
    {
        $skpd = SkpdProv::find($skpdId);

        if (!$skpd) {
            return response()->json([], 404); // SKPD tidak ditemukan
        }
        $nama_bidang = $skpd->bidangs()->pluck('nama_bidang', 'kode_bidang')->toArray();

        return response()->json($nama_bidang);
    }

    public function getPrograms($kodeBidang)
    {
        $programs = Program::where('kode_bidang', $kodeBidang)->get();
        $programOptions = [];
        foreach ($programs as $program) {
            $programOptions[$program->kode_program] = $program->kode_program . ' - ' . $program->nama_program;
        }
        return response()->json($programOptions);
    }

    public function getKegiatans($kodePrograms)
    {
        $kegiatans = Kegiatan::where('kode_program', $kodePrograms)->get();
        $kegiatanOptions = [];
        foreach ($kegiatans as $kegiatan) {
            $kegiatanOptions[$kegiatan->kode_kegiatan] = $kegiatan->kode_kegiatan . ' - ' . $kegiatan->nama_kegiatan;
        }
        return response()->json($kegiatanOptions);
    }

    public function getSubkegiatans($kodeKegiatan)
    {
        $subkegiatans = Subkegiatan::where('kode_kegiatan', $kodeKegiatan)->get();
        $subkegiatanOptions = [];
        foreach ($subkegiatans as $subkegiatan) {
            $subkegiatanOptions[$subkegiatan->kode_subkegiatan] = $subkegiatan->kode_kegiatan . ' - ' . $subkegiatan->nama_subkegiatan;
        }
        return response()->json($subkegiatanOptions);
    }

    public function indexProgram()
    {
        $programs = RefProgram::paginate(20);
        return view('nomenklatur.programs', compact('programs'));
    }
    public function indexBidang()
    {
        $skpd = SkpdProv::all();
        $bidangs = Bidang::all();
        $pivot = BidangUrusanSkpd::all();
        return view('nomenklatur.bidangs', compact('skpd', 'bidangs', 'pivot'));
    }

    public function storeBidang(Request $request)
    {
        $this->validate($request, [
            'skpd_prov_id' => 'required',
            'bidang_id' => 'required',

        ]);

        BidangUrusanSkpd::create([
            'skpd_prov_id' => $request->skpd_prov_id,
            'bidang_id' => $request->bidang_id,
        ]);

        return redirect()->route('nomenklatur')->with('success', 'Data berhasil disimpan.');
    }

    public function destroy($id)
    {
        $pivot = BidangUrusanSkpd::findOrFail($id);
        $pivot->delete();
        return redirect()->back()->with('success', 'Data pivot telah dihapus.');
    }
}
