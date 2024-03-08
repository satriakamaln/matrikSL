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

<body class="font-monospace">

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

        let base_url = "{{ url('/') }}"

        tdKoordinat.forEach(function(td) {

            const tautan = td.querySelector(".tautan");
            const koordinat = tautan.innerText;
            const urlGoogleMaps = "https://www.google.com/maps/search/" + koordinat;

            tautan.href = urlGoogleMaps;
        });
    </script>

    <script>
        function getUrl() {
            return base_url
        }

        $('#kabupaten').on('change', function() {
            var kabupaten = $(this).val();
            console.log(kabupaten);
            if (kabupaten) {
                $.ajax({
                    url: base_url + '/admin/kecamatan/' + kabupaten,
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
                            $('#kecamatan').append(
                                '<option value="">-Pilih-</option>');
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
                    url: base_url + '/admin/kelurahan/' + kecamatan,
                    type: 'GET',
                    data: {
                        '_token': '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        if (data) {
                            $('#kelurahan').empty();
                            $('#kelurahan').append(
                                '<option value="">-Pilih-</option>');
                            $.each(data, function(key, kelurahan) {
                                $('select[name="kelurahan"]').append(
                                    '<option value="' + kelurahan.kelurahan +
                                    '" >' +
                                    kelurahan.kelurahan + '</option>'
                                )
                            });
                        } else {
                            $('#kelurahan').empty();
                        }
                    }
                });
            } else {
                $('#kelurahan').empty();
            }
        });

        $('#tahunpd').on('change', function() {
            var tahunpd = $(this).val();
            console.log(tahunpd);
            if (tahunpd) {
                $.ajax({
                    url: base_url + '/admin/prioritas/' + tahunpd,
                    type: 'GET',
                    data: {
                        '_token': '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        if (data) {
                            $('#prioritas_daerah').empty();
                            $('#prioritas_daerah').append(
                                '<option value="">-Pilih-</option>');
                            $.each(data, function(key, prioritas_daerah) {
                                $('select[name="prioritas_daerah"]').append(
                                    '<option value="' + prioritas_daerah
                                    .prioritas_daerah +
                                    '" >' +
                                    prioritas_daerah.prioritas_daerah +
                                    '</option>'
                                )
                            });
                        } else {
                            $('#prioritas_daerah').empty();
                        }
                    }
                });
            } else {
                $('#prioritas_daerah').empty();
            }
        });

        $('#skpd_prov_id').on('change', function() {
            var skpdId = $(this).val();
            console.log(skpdId);
            if (skpdId) {
                $.ajax({
                    url: base_url + '/admin/get-bidangs/' + skpdId, // Ganti dengan URL yang benar
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        $('#bidang_id').empty();
                        $('#program').empty();
                        $('#kegiatan').empty();
                        $('#subkegiatan').empty();
                        $('#bidang_id').append(
                            '<option value="">-Pilih-</option>');
                        $.each(data, function(key, value) {
                            $('#bidang_id').append('<option value="' + key + '">' +
                                value + '</option>');
                        });
                    }
                });
            } else {
                $('#bidang_id').empty();
                $('#program').empty();
                $('#kegiatan').empty();
                $('#subkegiatan').empty();
            }
        });

        $('#bidang_id').on('change', function() {
            var kodeBidang = $(this).val();
            console.log(kodeBidang);
            if (kodeBidang) {
                $.ajax({
                    url: base_url + '/admin/get-programs/' + kodeBidang, // Ganti dengan URL yang benar
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        $('#program').empty();
                        $('#kegiatan').empty();
                        $('#subkegiatan').empty();
                        $('#program').append(
                            '<option selected disabled value="">-Pilih-</option>');
                        $.each(data, function(key, value) {
                            $('#program').append('<option value="' + key + '">' +
                                value + '</option>');
                        });
                    }
                });
            } else {
                $('#program').empty();
                $('#kegiatan').empty();
                $('#subkegiatan').empty();
            }
        });

        $('#program').on('change', function() {
            var kodeProgram = $(this).val();
            console.log(kodeProgram);
            if (kodeProgram) {
                $.ajax({
                    url: base_url + '/admin/get-kegiatans/' + kodeProgram, // Ganti dengan URL yang benar
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        $('#kegiatan').empty();
                        $('#subkegiatan').empty();
                        $('#kegiatan').append(
                            '<option selected disabled value="">-Pilih-</option>');
                        $.each(data, function(key, value) {
                            $('#kegiatan').append('<option value="' + key + '">' +
                                value + '</option>');
                        });
                    }
                });
            } else {
                $('#kegiatan').empty();
                $('#subkegiatan').empty();
            }
        });

        $('#kegiatan').on('change', function() {
            var kodeKegiatan = $(this).val();
            console.log(kodeKegiatan);
            if (kodeKegiatan) {
                $.ajax({
                    url: base_url + '/admin/get-subkegiatans/' +
                        kodeKegiatan, // Ganti dengan URL yang benar
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);
                        $('#subkegiatan').empty();
                        $('#subkegiatan').append(
                            '<option selected disabled value="">-Pilih-</option>');
                        $.each(data, function(key, value) {
                            $('#subkegiatan').append('<option value="' + key +
                                '">' +
                                value + '</option>');
                        });
                    }
                });
            } else {
                $('#subkegiatan').empty();
            }
        });
    </script>
</body>

</html>
