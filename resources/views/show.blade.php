@extends('layout.layout')

@section('title', 'Detail')
@section('content')


    <div class="container mt-5">
        <div class="row">
            <div class="col-3 border p-2 bold">Program</div>
            <div class="col-9 border p-2"><b>{{ $id->program }}</b></div>
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
