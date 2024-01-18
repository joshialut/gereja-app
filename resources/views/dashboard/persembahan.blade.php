@extends('layouts.app')

@section('content')
    <div class="mb-2">
        <a href="persembahan/create" class="btn btn-primary">Tambah Data Persembahan</a>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8 align-self-center">
                    <h4>Data Persembahan</h4>
                </div>
            </div>
        </div>

        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr style="">
                        {{-- <th>#</th> --}}
                        <th>Tanggal</th>
                        <th>Jenis Persembahan</th>
                        <th>Jumlah Persembahan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach ($persembahan as $dataPersembahan)
                    <tbody>
                        <tr>
                            {{-- <td>{{ $dataPersembahan->id_persembahan }}</td> --}}
                            <td>{{ \Carbon\Carbon::parse($dataPersembahan->tanggal_persembahan)->translatedFormat('D, d-F-Y') }}
                            </td>
                            <td>{{ $dataPersembahan->jenis_persembahan }}</td>
                            <td>@currency($dataPersembahan->jumlah_persembahan)</td>
                            <td>
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <a
                                            href="persembahan/{{ $dataPersembahan->id_persembahan }}/edit"class="btn btn-primary">
                                            Edit</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <form action="persembahan/{{ $dataPersembahan->id_persembahan }}" method="POST">
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
        {{ $persembahan->links() }}
    @endsection
