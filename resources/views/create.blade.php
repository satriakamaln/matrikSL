@extends('layout.layout')

@section('title', 'Tambah Matrik')

@section('content')
    <div class="container">
        <h2 class="my-3">Tambah Data</h2>
        <form action="{{ route('storeData') }}" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col-4">
                    <label class="form-label fw-bold">Pilar</label>
                    <select name="pilar" id="pilar" class="form-select input">
                        <option value="">-Pilih-</option>
                        @foreach ($pilars as $pilar)
                            <option value="{{ $pilar->pilar }}">{{ $pilar->pilar }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label class="form-label fw-bold">Goal SDGs</label>
                    <select name="goal_sdgs" id="goal_sdgs" class="form-select input">
                        <option value="">-Pilih-</option>
                        @foreach ($goal_sdgs as $goal)
                            <option value="{{ $goal->goal_sdgs }}">{{ $goal->goal_sdgs }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col mb-3">
                <label class="form-label fw-bold">Misi RPJMD</label>
                <select name="misi_rpjmd" id="misi_rpjmd" class="form-select input">
                    <option value="">-Pilih-</option>
                    @foreach ($misi_rpjmd as $misi)
                        <option value="{{ $misi->misi_rpjmd }}">{{ $misi->misi_rpjmd }}</option>
                    @endforeach
                </select>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label class="form-label fw-bold">Tahun PD</label>
                    <select name="tahunpd" id="tahunpd" class="form-select input">
                        <option value="">-Pilih-</option>
                        @foreach ($tahunpd as $pd)
                            <option value="{{ $pd->tahunpd }}">{{ $pd->tahunpd }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label class="form-label fw-bold">Prioritas Daerah</label>
                    <select name="prioritas_daerah" id="prioritas_daerah" class="form-select input">
                    </select>
                </div>
            </div>
            <div class="col mb-3">
                <label class="form-label fw-bold">Program</label>
                <select name="program" id="program" class="form-select input">
                    <option value="program">program</option>
                </select>
            </div>
            <div class="col mb-3">
                <label class="form-label fw-bold">Kegiatan</label>
                <input type="text" name="kegiatan" class="form-control" placeholder="Masukan Kegiatan">
            </div>
            <div class="col mb-3">
                <label class="form-label fw-bold">Sub Kegiatan</label>
                <input type="text" name="subkegiatan" class="form-control" placeholder="Masukan Sub Kegiatan">
            </div>
            <div class="col mb-3">
                <label class="form-label fw-bold">Aktifitas</label>
                <input type="text" name="aktifitas" class="form-control" placeholder="Masukan Aktifitas">
            </div>
            <div class="col mb-3">
                <label class="form-label fw-bold">Target</label>
                <input type="text" name="target" class="form-control" placeholder="Masukan Target">
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label fw-bold">Kabupaten/Kota</label>
                    <select name="kabupaten" id="kabupaten" class="form-select input">
                        <option value="">-Pilih-</option>
                        @foreach ($kabupaten as $kab)
                            <option value="{{ $kab->kabupaten }}">{{ $kab->kabupaten }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col">
                    <label class="form-label fw-bold">Kecamatan</label>
                    <select name="kecamatan" id="kecamatan" class="form-select input"></select>
                </div>
                <div class="col">
                    <label class="form-label fw-bold">Kelurahan</label>
                    <select name="kelurahan" id="kelurahan" class="form-select input"></select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-2 mb-3">
                    <label class="form-label fw-bold">Koordinat</label>
                    <input type="text" name="koordinat" class="form-control" placeholder="Masukan Koordinat...">
                </div>
                <div class="col mb-3">
                    <label class="form-label fw-bold">Rencana Biaya Anggaran</label>
                    <input type="number" name="biaya" class="form-control"
                        placeholder="Masukan Rencana Biaya Anggaran...">
                </div>
                <div class="col mb-3">
                    <label class="form-label fw-bold">Dinas Pengampu</label>
                    <input type="text" name="dinas_pengampu" class="form-control"
                        placeholder="Masukan Rencana Biaya Anggaran...">
                </div>
            </div>
            <button type="submit" class="btn btn-md btn-primary mb-3">SIMPAN</button>
        </form>
        <a href="{{ route('beranda') }}" style="text-decoration: none">
            << Back</a>
    </div>
@endsection
