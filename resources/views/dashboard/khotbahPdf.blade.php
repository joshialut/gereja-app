<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ringkasan Khotbah Ibadah Raya</title>
    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('build/assets/style.css') }}"> --}}

    <!-- Scripts -->
</head>
<style>
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 12pt "Tahoma";
    }

    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }

    div {
        text-align: justify;
        text-justify: inter-word;
    }

    .page {
        width: 210mm;
        min-height: 297mm;
        padding: 20mm;
        margin: 10mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .subpage {
        padding: 1cm;
        border: 5px red solid;
        height: 257mm;
        outline: 2cm #FFEAEA solid;
    }

    @page {
        size: A3;
        margin: 0;
    }

    @media print {

        html,
        body {
            width: 210mm;
            height: 297mm;
        }

        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
</style>

<body>
    @method('put')
    @csrf
    @foreach ($khotbah as $dataKhotbah)
        <div class="book">
            <div class="page">
                <div class="subpage">
                    <h1>Judul Khotbah : {{ $dataKhotbah->judul_khotbah }}</h1>
                    <h5>Tanggal : {{ $dataKhotbah->tanggal_khotbah }}</h5>
                    <h5>Pembicara : {{ $dataKhotbah->pembicara }}</h5>
                    <br>
                    <p>{{ $dataKhotbah->isi_khotbah }}</p>
                </div>
            </div>
        </div>
    @endforeach
</body>

</html>
