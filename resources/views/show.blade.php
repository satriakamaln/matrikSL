@extends('layout.layout')

@section('title', 'Detail')
@section('content')

    <div class="container mt-2">
        <h2 class="my-3">Detail Matrik</h2>
        <div class="row">
            <div class="col-3 border p-2 bold">Pilar</div>
            <div class="col-9 border p-2"><b>{{ $matriks->pilar }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Goals SDGs</div>
            <div class="col-9 border p-2"><b>{{ $matriks->goal_sdgs }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Misi RPJMD</div>
            <div class="col-9 border p-2"><b>{{ $matriks->misi_rpjmd }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Prioritas Daerah</div>
            <div class="col-9 border p-2"><b>{{ $matriks->prioritas_daerah }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Dinas Pengampu</div>
            <div class="col-9 border p-2"><b>{{ $matriks->skpdProv->nama_skpd }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Bidang Urusan</div>
            <div class="col-9 border p-2"><b>{{ $matriks->Bidang->nama_bidang }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Program</div>
            <div class="col-9 border p-2"><b>{{ $matriks->Program->nama_program }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Kegiatan</div>
            <div class="col-9 border p-2"><b>{{ $matriks->Kegiatan->nama_kegiatan }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Sub Kegiatan</div>
            <div class="col-9 border p-2"><b>{{ $matriks->Subkegiatan->nama_subkegiatan }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Aktifitas</div>
            <div class="col-9 border p-2"><b>{{ $matriks->aktifitas }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Target</div>
            <div class="col-9 border p-2"><b>{{ $matriks->target }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Kabupaten/Kota</div>
            <div class="col-9 border p-2"><b>{{ $matriks->kabupaten }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Kecamatan</div>
            <div class="col-9 border p-2"><b>{{ $matriks->kecamatan }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Kelurahan</div>
            <div class="col-9 border p-2"><b>{{ $matriks->kelurahan }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Koordinat</div>
            <div class="col-9 border p-2">
                <p class="koordinat m-0">
                    <b>
                        <a class="tautan card-text" target="_blank">{{ $matriks->koordinat }}</a>
                    </b>
                </p>
            </div>
        </div>
        <div class="row"></div>
        <div class="row mb-3">
            <div class="col-3 border p-2 bold">Rencana Biaya Anggaran</div>
            <div class="col-9 border p-2"><b>{{ $matriks->biaya }}</b></div>
        </div>

        <a href="{{ route('beranda') }}" style="text-decoration: none">
            << Back</a>
    </div>

@endsection
