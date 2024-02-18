@extends('layout.layout')

@section('title', 'Detail')
@section('content')


    <div class="container">
        <h2 class="my-3">Program {{ $id->program }}</h2>
        <div class="row">
            <div class="col">
                <label class="form-label card-text">Kabupaten/Kota</label>
                <p class="card-text">{{ $id->kabupaten }}</p>
            </div>
            <div class="col">
                <label class="form-label card-text">Kecamatan</label>
                <p class="card-text">{{ $id->kecamatan }}</p>
            </div>
            <div class="col">
                <label class="form-label card-text">Koordinat</label>
                <p class="koordinat">
                    <a class="tautan card-text" target="_blank">{{ $id->koordinat }}</a>
                </p>
            </div>
        </div>
    </div>
@endsection
