@extends('layout.layout')

@section('title', 'Edit Matrik')

@section('content')
    <div class="container">
        <h2 class="my-3">Edit Data</h2>
        <form action="{{ route('updateData', $data->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col-4">
                    <label class="form-label fw-bold">Pilar</label>
                    <select name="pilar" id="pilar" class="form-select input">
                        <option value="{{ old('pilar', $data->pilar) }}">{{ old('pilar', $data->pilar) }}</option>
                    </select>
                </div>
                <div class="col">
                    <label class="form-label fw-bold">Goal SDGs</label>
                    <select name="goal_sdgs" id="goal_sdgs" class="form-select input">
                        <option value="{{ old('pilar', $data->goal_sdgs) }}">{{ old('pilar', $data->goal_sdgs) }}</option>
                    </select>
                </div>
            </div>
            <div class="col mb-3">
                <label class="form-label fw-bold">Misi RPJMD</label>
                <select name="misi_rpjmd" id="misi_rpjmd" class="form-select input">
                    <option value="{{ old('pilar', $data->misi_rpjmd) }}">{{ old('pilar', $data->misi_rpjmd) }}</option>
                </select>
            </div>
            <div class="col mb-3">
                <label class="form-label fw-bold">Prioritas Daerah</label>
                <select name="prioritas_daerah" id="prioritas_daerah" class="form-select input">
                    <option value="{{ old('pilar', $data->prioritas_daerah) }}">{{ old('pilar', $data->prioritas_daerah) }}
                    </option>
                </select>
            </div>
            <div class="col mb-3">
                <label class="form-label fw-bold">Program</label>
                <input type="text" name="program" class="form-control" value="{{ old('program', $data->program) }}">
            </div>
            <div class="col mb-3">
                <label class="form-label fw-bold">Kegiatan</label>
                <input type="text" name="kegiatan" class="form-control" placeholder="Masukan Kegiatan"
                    value="{{ old('koordinat', $data->kegiatan) }}">
            </div>
            <div class="col mb-3">
                <label class="form-label fw-bold">Sub Kegiatan</label>
                <input type="text" name="subkegiatan" class="form-control" placeholder="Masukan Sub Kegiatan"
                    value="{{ old('koordinat', $data->subkegiatan) }}">
            </div>
            <div class="col mb-3">
                <label class="form-label fw-bold">Aktifitas</label>
                <input type="text" name="aktifitas" class="form-control" placeholder="Masukan Aktifitas"
                    value="{{ old('koordinat', $data->aktifitas) }}">
            </div>
            <div class="col mb-3">
                <label class="form-label fw-bold">Target</label>
                <input type="text" name="target" class="form-control" placeholder="Masukan Target"
                    value="{{ old('koordinat', $data->target) }}">
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
                <div class="col-2 mb-3">
                    <label class="form-label fw-bold">Koordinat</label>
                    <input type="text" name="koordinat" class="form-control"
                        value="{{ old('koordinat', $data->koordinat) }}">
                </div>
                <div class="col mb-3">
                    <label class="form-label fw-bold">Rencana Biaya Anggaran</label>
                    <input type="number" name="biaya" class="form-control" value="{{ old('biaya', $data->biaya) }}">
                </div>
                <div class="col mb-3">
                    <label class="form-label fw-bold">Dinas Pengampu</label>
                    <input type="text" name="dinas_pengampu" class="form-control"
                        value="{{ old('dinas_pengampu', $data->dinas_pengampu) }}">
                </div>
            </div>

            <button type="submit" class="btn btn-md btn-primary mb-3">SIMPAN</button>
        </form>
        <a href="{{ route('beranda') }}" style="text-decoration: none">
            << Back</a>
    </div>
@endsection
