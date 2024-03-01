@extends('layout.layout')

@section('title', 'Detail')
@section('content')

    <div class="container mt-2">
        <h2 class="my-3">Detail Matrik</h2>
        <div class="row">
            <div class="col-3 border p-2 bold">Pilar</div>
            <div class="col-9 border p-2"><b>{{ $id->pilar }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Goals SDGs</div>
            <div class="col-9 border p-2"><b>{{ $id->goal_sdgs }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Misi RPJMD</div>
            <div class="col-9 border p-2"><b>{{ $id->misi_rpjmd }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Prioritas Daerah</div>
            <div class="col-9 border p-2"><b>{{ $id->prioritas_daerah }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Dinas Pengampu</div>
            <div class="col-9 border p-2"><b>{{ $id->skpd_prov_id }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Bidang Urusan</div>
            <div class="col-9 border p-2"><b>{{ $id->kode_bidang }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Program</div>
            <div class="col-9 border p-2"><b>{{ $id->kode_program }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Kegiatan</div>
            <div class="col-9 border p-2"><b>{{ $id->kode_kegiatan }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Sub Kegiatan</div>
            <div class="col-9 border p-2"><b>{{ $id->kode_subkegiatan }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Aktifitas</div>
            <div class="col-9 border p-2"><b>{{ $id->aktifitas }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Target</div>
            <div class="col-9 border p-2"><b>{{ $id->target }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Kabupaten/Kota</div>
            <div class="col-9 border p-2"><b>{{ $id->kabupaten }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Kecamatan</div>
            <div class="col-9 border p-2"><b>{{ $id->kecamatan }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Kelurahan</div>
            <div class="col-9 border p-2"><b>{{ $id->kelurahan }}</b></div>
        </div>
        <div class="row">
            <div class="col-3 border p-2 bold">Koordinat</div>
            <div class="col-9 border p-2">
                <p class="koordinat m-0">
                    <b>
                        <a class="tautan card-text" target="_blank">{{ $id->koordinat }}</a>
                    </b>
                </p>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3 border p-2 bold">Rencana Biaya Anggaran</div>
            <div class="col-9 border p-2"><b>{{ $id->biaya }}</b></div>
        </div>

        <a href="{{ route('beranda') }}" style="text-decoration: none">
            << Back</a>
    </div>

@endsection
