@extends('layout.layout')

@section('title', 'Tambah Matrik')

@section('content')
    <div class="container">
        <h2 class="my-3">Tambah Data</h2>
        <form action="{{ route('storeData') }}" method="POST">
            @csrf
            <div class="col-md-6 mb-3">
                <label class="form-label">Program</label>
                <input type="text" name="program" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Kabupaten/Kota</label>
                <select name="kabupaten" id="kabupaten" class="form-select input">
                    <option value="">-Pilih-</option>
                    @foreach ($kabupaten as $kab)
                        <option value="{{ $kab->kabupaten }}">{{ $kab->kabupaten }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Kecamatan</label>
                <select name="kecamatan" id="kecamatan" class="form-select input"></select>
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Koordinat</label>
                <input type="text" name="koordinat" class="form-control">
            </div>

            <div class="col-md-6 mb-3">
                <label class="form-label">Rencana Biaya Anggaran</label>
                <input type="number" name="biaya" class="form-control">
            </div>

            <button type="submit" class="btn btn-md btn-primary mb-3">SIMPAN</button>
        </form>
        <a href="{{ route('beranda') }}" style="text-decoration: none">
            << Back</a>
    </div>
@endsection
