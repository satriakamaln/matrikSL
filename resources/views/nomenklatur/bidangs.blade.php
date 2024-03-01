@extends('layout.layout')

@section('title', 'Programs')
@section('content')

    <div class="container mt-3">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="text-center my-4">Bidang Urusan SKPD</h5>

                <form action="{{ route('simpan') }}" class="mb-3">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-abel">Select SKPD</label>
                            <select name="skpd_prov_id" id="skpd" class="form-select">
                                <option value="">Pilih</option>
                                @foreach ($skpd as $sk)
                                    <option value="{{ $sk->id }}">{{ $sk->nama_skpd }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label class="form-abel">Select URUSAN</label>
                            <select name="bidang_id" id="bidang" class="form-select">
                                <option value="">Pilih</option>
                                @foreach ($bidangs as $bid)
                                    <option value="{{ $bid->id }}">{{ $bid->nama_bidang }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>

                {{-- <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>SKPD</th>
                            <th>Urusan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skpd as $sk)
                            <tr>
                                <td>{{ $sk->nama_skpd }}</td>
                                <td>
                                    @foreach ($sk->bidangs()->get() as $bidang)
                                        <button class="btn btn-sm btn-primary">{{ $bidang->nama_bidang }}</button>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table> --}}

                <table class="table">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>id</td>
                            <td>Nama SKPD</td>
                            <td>Bidang Urusan</td>
                            <td>Opsi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pivot as $piv)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $piv->id }}</td>
                                <td>{{ $piv->SkpdProv->nama_skpd }}</td>
                                <td><button class="btn btn-sm btn-primary">{{ $piv->Bidang->nama_bidang }}</button>
                                </td>
                                <td>
                                    <form onsubmit="return confirm('Hapus ?')"
                                        action="{{ route('hapusBidang', ['id' => $piv->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <a href="{{ route('beranda') }}" style="text-decoration: none">
            << Back</a>
    </div>

@endsection
