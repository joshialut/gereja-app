@extends('layouts.app')

@section('content')
    <div class="mb-2">
        <a href="/pengurus/create" class="btn btn-primary">Tambah Data Pengurus</a>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8 align-self-center">
                    <h4>Data Pengurus</h4>
                </div>
            </div>
        </div>

        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Pengurus</th>
                        <th>Jabatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach ($pengurus as $dataPengurus)
                    <tr>
                        <td>{{ $dataPengurus->nama_pengurus }}</td>
                        <td>{{ $dataPengurus->jenis_jabatan }}</td>
                        <td>
                            <ul class="list-inline m-0">
                                <li class="list-inline-item">
                                    <a href="pengurus/{{ $dataPengurus->id_pengurus }}/edit"
                                        class="btn btn-primary">Edit</a>
                                </li>
                                <li class="list-inline-item">
                                    <form action="pengurus/{{ $dataPengurus->id_pengurus }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger " value="Delete">
                                    </form>
                                </li>
                            </ul>
                        </td>
                    <tr>
                @endforeach
            </table>
        </div>
    </div>
    {{ $pengurus->links() }}
@endsection
