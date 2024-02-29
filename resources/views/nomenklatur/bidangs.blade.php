@extends('layout.layout');

@section('title', 'Programs')
@section('content')

    <div class="container">
        <h3>Programs</h3>

        <table class="table">
            <thead>
                <tr>
                    <th>Urusan Code</th>
                    <th>Bidang Code</th>
                    <th>Bidang Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bidangs as $item)
                    <tr>
                        <td>{{ $item->urusan_code }}</td>
                        <td>{{ $item->bidang_code }}</td>
                        <td>{{ $item->bidang_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $bidangs->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>

@endsection
