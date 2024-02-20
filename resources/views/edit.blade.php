@extends('layout.layout')

@section('title', 'Tambah Matrik')

@section('content')
    <div class="container">
        <h2 class="my-3">Edit Data</h2>
        <form action="{{ route('updateData', $data->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="col mb-3">
                <label class="form-label fw-bold">Program</label>
                <input type="text" name="program" class="form-control" value="{{ old('program', $data->program) }}">
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label class="form-label fw-bold">Kabupaten/Kota</label>
                    <select name="kabupaten" id="kabupaten" class="form-select input">
                        <option value="{{ old('kabupaten', $data->kabupaten) }}">{{ old('kabupaten', $data->kabupaten) }}
                        </option>
                        @foreach ($kabupaten as $kab)
                            <option value="{{ $kab->kabupaten }}">{{ $kab->kabupaten }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label class="form-label fw-bold">Kecamatan</label>
                    <select name="kecamatan" id="kecamatan" class="form-select input">
                        <option value="{{ old('kecamatan', $data->kecamatan) }}">{{ old('kecamatan', $data->kecamatan) }}
                        </option>
                    </select>
                </div>
                <div class="col">
                    <label class="form-label fw-bold">Kelurahan</label>
                    <select name="kelurahan" id="kelurahan" class="form-select input">
                        <option value="{{ old('kelurahan', $data->kelurahan) }}">{{ old('kelurahan', $data->kelurahan) }}
                        </option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col mb-3">
                    <label class="form-label fw-bold">Koordinat</label>
                    <input type="text" name="koordinat" class="form-control"
                        value="{{ old('koordinat', $data->koordinat) }}">
                </div>

                <div class="col mb-3">
                    <label class="form-label fw-bold">Rencana Biaya Anggaran</label>
                    <input type="number" name="biaya" class="form-control" value="{{ old('biaya', $data->biaya) }}">
                </div>
            </div>

            <button type="submit" class="btn btn-md btn-primary mb-3">SIMPAN</button>
        </form>
        <a href="{{ route('beranda') }}" style="text-decoration: none">
            << Back</a>
    </div>
@endsection
