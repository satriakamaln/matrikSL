@extends('layout.layout')

@section('title', 'Programs')
@section('content')

    <div class="container">
        <h3>Programs</h3>

        <table class="table">
            <thead>
                <tr>
                    <th>Program Id</th>
                    <th>Urusan Code</th>
                    <th>Program Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($programs as $item)
                    <tr>
                        <td>{{ $item->program_id }}</td>
                        <td>{{ $item->urusan_code }}</td>
                        <td>{{ $item->program_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {!! $programs->withQueryString()->links('pagination::bootstrap-5') !!}
    </div>

@endsection
