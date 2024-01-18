@extends('layouts.app')

@section('content')
    <div class="mb-2">
        <a href="jemaat/create" class="btn btn-primary">Tambah Data Jemaat</a>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8 align-self-center">
                    <h4>Data Jemaat</h4>
                </div>
            </div>
        </div>

        <div class="card-body p-0">
            <table class="table table-sm">
                <thead>
                    <tr>
                        {{-- <th>#</th> --}}
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        {{-- <th>Kelompok Wilayah</th> --}}
                        <th>NIK</th>
                        <th>Nomor Telepon</th>
                        <th>Golongan Darah</th>
                        <th>Alamat</th>
                        {{-- <th>Pelayanan</th> --}}
                        <th>Pelayanan</th>
                        <th>Wilayah</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                @foreach ($jemaat as $dataJemaat)
                    <tbody>
                        <tr>
                            <td>{{ $dataJemaat->nama }}</td>
                            <td>{{ \Carbon\Carbon::parse($dataJemaat->tanggal_lahir)->translatedFormat('d-F-Y') }}</td>
                            <td>{{ $dataJemaat->jenis_kelamin }}</td>
                            {{-- <td>{{ $dataJemaat->nama_wilayah }} </td> --}}
                            <td>{{ $dataJemaat->nik }}</td>
                            <td>{{ $dataJemaat->no_telepon }}</td>
                            <td>{{ $dataJemaat->gol_darah }}</td>
                            <td>{{ $dataJemaat->alamat_jemaat }}</td>
                            <td>
                                <ul>
                                    <li>
                                        {{ $dataJemaat->jenis_pelayanan }}
                                    </li>
                                </ul>

                            </td>
                            </td>
                            <td>{{ $dataJemaat->nama_wilayah }}</td>
                            <td>
                                <a href="jemaat/{{ $dataJemaat->id_jemaat }}/edit" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <form action="jemaat/{{ $dataJemaat->id_jemaat }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" class="btn btn-danger " value="Delete">
                                </form>
                            </td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $jemaat->links() }}
    @endsection
