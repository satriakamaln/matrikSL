@extends('layout.layout')

@section('title', 'Edit Matrik')

@section('content')
    <div class="container">
        <h2 class="my-3">Edit Data</h2>
        <form action="{{ route('admin.updateData', $matriks->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row mb-3">
                <div class="col-4">
                    <label class="form-label fw-bold">Pilar</label>
                    <select name="pilar" id="pilar" class="form-select input" required>
                        <option value="{{ old('pilar', $matriks->pilar) }}">
                            {{ old('pilar', $matriks->pilar) }}</option>
                        @foreach ($pilars as $pilar)
                            <option value="{{ $pilar->pilar }}">{{ $pilar->pilar }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label class="form-label fw-bold">Goal SDGs</label>
                    <select name="goal_sdgs" id="goal_sdgs" class="form-select input" required>
                        <option value="{{ old('goal_sdgs', $matriks->goal_sdgs) }}">
                            {{ old('goal_sdgs', $matriks->goal_sdgs) }}
                        </option>
                        @foreach ($goal_sdgs as $goal)
                            <option value="{{ $goal->goal_sdgs }}">{{ $goal->goal_sdgs }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col mb-3">
                <label class="form-label fw-bold">Misi RPJMD</label>
                <select name="misi_rpjmd" id="misi_rpjmd" class="form-select input" required>
                    <option value="{{ old('misi_rpjmd', $matriks->misi_rpjmd) }}">
                        {{ old('misi_rpjmd', $matriks->misi_rpjmd) }}
                    </option>
                    @foreach ($misi_rpjmd as $misi)
                        <option value="{{ $misi->misi_rpjmd }}">{{ $misi->misi_rpjmd }}</option>
                    @endforeach
                </select>
            </div>
            <div class="row mb-3">
                <div class="col-2">
                    <label class="form-label fw-bold">Tahun PD</label>
                    <select name="tahunpd" id="tahunpd" class="form-select input" required>
                        <option value="{{ old('tahunpd', $matriks->tahunpd) }}">
                            {{ old('tahunpd', $matriks->tahunpd) }}
                        </option>
                        @foreach ($tahunpd as $pd)
                            <option value="{{ $pd->tahunpd }}">{{ $pd->tahunpd }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label class="form-label fw-bold">Prioritas Daerah</label>
                    <select name="prioritas_daerah" id="prioritas_daerah" class="form-select input" required>
                        <option value="{{ old('prioritas_daerah', $matriks->prioritas_daerah) }}">
                            {{ old('prioritas_daerah', $matriks->prioritas_daerah) }}
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label fw-bold">Pilih SKPD</label>
                    <select name="skpd_prov_id" id="skpd_prov_id" class="form-select" required>
                        <option value="{{ old('skpd_prov_id', $matriks->skpd_prov_id) }}">
                            {{ old('skpd_prov_id', $matriks->SkpdProv->nama_skpd) }}
                            @foreach ($skpd as $sk)
                        <option value="{{ $sk->id }}">{{ $sk->nama_skpd }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label class="form-label fw-bold">Select Bidang Urusan</label>
                    <select name="kode_bidang" id="bidang_id" class="form-select">
                        <option value="{{ old('kode_bidang', $matriks->kode_bidang) }}">
                            {{ old('tahunpd', $matriks->Bidang->nama_bidang) }}
                        </option>
                    </select>

                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label fw-bold">Pilih Program</label>
                    <select name="kode_program" id="program" class="form-select">
                        <option value="{{ old('kode_program', $matriks->kode_program) }}">
                            {{ old('tahunpd', $matriks->Program->nama_program) }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label fw-bold">Pilih Kegiatan</label>
                    <select name="kode_kegiatan" id="kegiatan" class="form-select">
                        <option value="{{ old('kode_kegiatan', $matriks->kode_kegiatan) }}">
                            {{ old('tahunpd', $matriks->Kegiatan->nama_kegiatan) }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label fw-bold">Pilih Sub-Kegiatan</label>
                    <select name="kode_subkegiatan" id="subkegiatan" class="form-select">
                        <option value="{{ old('kode_kegiatan', $matriks->kode_subkegiatan) }}">
                            {{ old('tahunpd', $matriks->Subkegiatan->nama_subkegiatan) }}
                        </option>
                    </select>
                </div>
            </div>
            <div class="col mb-3">
                <label class="form-label fw-bold">Aktifitas</label>
                <input type="text" name="aktifitas" class="form-control"
                    value="{{ old('aktifitas', $matriks->aktifitas) }}">
            </div>
            <div class="col mb-3">
                <label class="form-label fw-bold">Target</label>
                <input type="text" name="target" class="form-control" value="{{ old('target', $matriks->target) }}">
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label fw-bold">Kabupaten/Kota</label>
                    <select name="kabupaten" id="kabupaten" class="form-select input">
                        <option value="{{ old('kabupaten', $matriks->kabupaten) }}">
                            {{ old('kabupaten', $matriks->kabupaten) }}</option>
                        @foreach ($kabupaten as $kab)
                            <option value="{{ $kab->kabupaten }}">{{ $kab->kabupaten }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="col">
                    <label class="form-label fw-bold">Kecamatan</label>
                    <select name="kecamatan" id="kecamatan" class="form-select input">
                        <option value="{{ old('kecamatan', $matriks->kecamatan) }}">
                            {{ old('kecamatan', $matriks->kecamatan) }}</option>
                    </select>
                </div>
                <div class="col">
                    <label class="form-label fw-bold">Kelurahan</label>
                    <select name="kelurahan" id="kelurahan" class="form-select input">
                        <option value="{{ old('kelurahan', $matriks->kelurahan) }}">
                            {{ old('kelurahan', $matriks->kelurahan) }}</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-4 mb-3">
                    <label class="form-label fw-bold">Koordinat</label>
                    <input type="text" name="koordinat" class="form-control"
                        value="{{ old('koordinat', $matriks->koordinat) }}">
                </div>
                <div class="col mb-3">
                    <label class="form-label fw-bold">Rencana Biaya Anggaran</label>
                    <input type="number" name="biaya" class="form-control"
                        value="{{ old('biaya', $matriks->biaya) }}">
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.detailData', $matriks->id) }}" class="btn btn-md btn-warning mb-3">
                    BACK</a>
                <button type="submit" class="btn btn-md btn-primary mb-3">SIMPAN</button>
            </div>
        </form>
    </div>
@endsection
