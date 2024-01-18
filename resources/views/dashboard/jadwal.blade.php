@extends('layouts.app')

@section('content')
    <div class="mb-2">
        <a href="jadwal/create" class="btn btn-primary">Tambah Data Jadwal</a>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8 align-self-center">
                    <h4>Data Jadwal</h4>
                </div>
            </div>
        </div>

        <div class="card-body p-0">
            <table class="table ">
                <thead>
                    <tr>
                        {{-- <th>#</th> --}}
                        <th>Tanggal</th>
                        <th>Jenis Ibadah</th>
                        <th>Jam</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach ($ibadah as $dataIbadah)
                    <tbody>
                        <tr>
                            {{-- <td>{{ $dataIbadah->id_ibadah }}</td> --}}
                            <td>{{ \Carbon\Carbon::parse($dataIbadah->tanggal_ibadah)->translatedFormat('d-F-Y') }}</td>
                            <td>{{ $dataIbadah->jenis_ibadah }}</td>
                            <td>{{ \Carbon\Carbon::parse($dataIbadah->jam_ibadah)->translatedFormat('h:i') }} WIB</td>
                            <td>
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <a href="jadwal/{{ $dataIbadah->id_ibadah }}/edit" class="btn btn-primary">Edit</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <form action="jadwal/{{ $dataIbadah->id_ibadah }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" class="btn btn-danger " value="Delete">
                                        </form>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $ibadah->links() }}
    @endsection
