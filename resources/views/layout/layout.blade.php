<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <title>Matriks | @yield('title')</title>
</head>

<body>

    @yield('content')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif (session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif

        const tdKoordinat = document.querySelectorAll(".koordinat");

        tdKoordinat.forEach(function(td) {

            const tautan = td.querySelector(".tautan");
            const koordinat = tautan.innerText;
            const urlGoogleMaps = "https://www.google.com/maps/search/" + koordinat;

            tautan.href = urlGoogleMaps;
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#kabupaten').on('change', function() {
                var kabupaten = $(this).val();
                console.log(kabupaten);
                if (kabupaten) {
                    $.ajax({
                        url: '/create/kecamatan/' + kabupaten,
                        type: 'GET',
                        data: {
                            '_token': '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(data) {
                            console.log(data);
                            if (data) {
                                $('#kecamatan').empty();
                                $('#kelurahan').empty();
                                $('#kecamatan').append('<option value="">-Pilih-</option>');
                                $.each(data, function(key, kecamatan) {
                                    $('select[name="kecamatan"]').append(
                                        '<option value="' + kecamatan.kecamatan +
                                        '" >' +
                                        kecamatan.kecamatan + '</option>'
                                    )
                                });
                            } else {
                                $('#kecamatan').empty();
                            }
                        }
                    });
                } else {
                    $('#kecamatan').empty();
                }
            });

            $('#kecamatan').on('change', function() {
                var kecamatan = $(this).val();
                console.log(kecamatan);
                if (kecamatan) {
                    $.ajax({
                        url: '/create/kelurahan/' + kecamatan,
                        type: 'GET',
                        data: {
                            '_token': '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(data) {
                            console.log(data);
                            if (data) {
                                $('#kelurahan').empty();
                                $('#kelurahan').append('<option value="">-Pilih-</option>');
                                $.each(data, function(key, kelurahan) {
                                    $('select[name="kelurahan"]').append(
                                        '<option value="' + kelurahan.kelurahan +
                                        '" >' +
                                        kelurahan.kelurahan + '</option>'
                                    )
                                });
                            } else {
                                $('#kecamatan').empty();
                            }
                        }
                    });
                } else {
                    $('#kecamatan').empty();
                }
            });
        });
    </script>
</body>

</html>
