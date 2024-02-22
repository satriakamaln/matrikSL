@extends('layout.layout')

@section('title', 'Beranda')

@section('content')
    <div class="container">
        <h2 class="my-3">Matrik Shopping List</h2>
        <a href="{{ route('tambahData') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>

        <table class="table table-striped text-center table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Program</th>
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
                        <td>{{ $matrik->program }}</td>
                        <td>{{ $matrik->kegiatan }}</td>
                        <td>{{ $matrik->kabupaten }}</td>
                        {{-- <td>{{ $matrik->kecamatan }}</td> --}}
                        {{-- <td class="koordinat">
                            <a class="tautan" target="_blank">{{ $matrik->koordinat }}</a>
                        </td> --}}
                        <td>{{ $matrik->biaya }}</td>
                        <td>
                            <form onsubmit="return confirm('Apakah Ingin Menghapus Data ?')"
                                action="{{ route('hapusData', $matrik->id) }}" method="POST">
                                <a href="{{ route('detailData', $matrik->id) }}"
                                    class="btn btn-sm btn-warning">SHOW</a>&nbsp;
                                <a href="{{ route('ubahData', $matrik->id) }}" class="btn btn-sm btn-primary">EDIT</a>&nbsp;
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $matriks->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>
@endsection
