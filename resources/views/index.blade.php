@extends('layout.layout')

@section('title', 'Beranda')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <h2 class="my-3">Matrik Shopping List</h2>
            <a href="{{ route('logout') }}" class="btn btn-md btn-danger my-3">LOG OUT</a>
        </div>
        <div class="d-flex mt-5">
            <div class="col">
                <a href="{{ route('admin.tambahData') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                <a href="{{ route('admin.nomenklatur') }}" class="btn btn-md btn-primary mb-3">BIDANG URUSAN</a>
            </div>

            <div class="col-md-">
                <div class="form-group">
                    <form method="get" action="{{ url('/admin') }}">
                        <div class="input-group">
                            <input class="form-control" name="search" placeholder="Search..."
                                value="{{ isset($search) ? $search : '' }}">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <table class="table table-striped text-center table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th class="col-2">Aktifitas</th>
                    <th class="col-1">Kabupaten/Kota</th>
                    <th class="col-1">Kecamatan</th>
                    <th class="col-2">Koordiant</th>
                    <th>Target</th>
                    <th>Rencana Biaya Anggaran</th>
                    <th>SKDP Pengampu</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($matriks as $matrik)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td class="text-start">{{ $matrik->aktifitas }}</td>
                        <td>{{ $matrik->kabupaten }}</td>
                        <td>{{ $matrik->kecamatan }}</td>
                        <td class="koordinat">
                            <a class="tautan" target="_blank">{{ $matrik->koordinat }}</a>
                        </td>
                        <td>{{ $matrik->target }}</td>
                        <td>{{ $matrik->biaya }}</td>
                        <td>{{ $matrik->SkpdProv->nama_skpd }}</td>
                        <td>
                            <a href="{{ route('admin.detailData', $matrik->id) }}"
                                class="btn btn-sm btn-warning">SHOW</a>&nbsp;
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $matriks->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>
@endsection
