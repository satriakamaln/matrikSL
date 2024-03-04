@extends('layout.layout')

@section('title', 'Beranda')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <h2 class="my-3">Matrik Shopping List</h2>
            <a href="{{ route('logout') }}" class="btn btn-md btn-danger my-3">LOG OUT</a>
        </div>
        <div>
            <a href="{{ route('admin.tambahData') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
            <a href="{{ route('admin.nomenklatur') }}" class="btn btn-md btn-primary mb-3">BIDANG URUSAN</a>
        </div>

        <table class="table table-striped text-center table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>SKDP</th>
                    <th>Bidang Urusan</th>
                    <th>program</th>
                    <th>Kegiatan</th>
                    <th>Kabupaten/Kota</th>
                    {{-- <th>Kecamatan</th> --}}
                    {{-- <th>Koordinat</th> --}}
                    <th>Rencana Biaya Anggaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($matriks as $matrik)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $matrik->SkpdProv->nama_skpd }}</td>
                        <td>{{ $matrik->Bidang->nama_bidang }}</td>
                        <td>{{ $matrik->kode_program }}</td>
                        <td>{{ $matrik->kode_kegiatan }}</td>
                        <td>{{ $matrik->kabupaten }}</td>
                        {{-- <td>{{ $matrik->kecamatan }}</td> --}}
                        {{-- <td class="koordinat">
                            <a class="tautan" target="_blank">{{ $matrik->koordinat }}</a>
                        </td> --}}
                        <td>{{ $matrik->biaya }}</td>
                        <td>
                            <forms>
                                <a href="{{ route('admin.detailData', $matrik->id) }}"
                                    class="btn btn-sm btn-warning">SHOW</a>&nbsp;
                                </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $matriks->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>
@endsection
