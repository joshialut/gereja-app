@extends('layouts.app')

@section('content')
    <div class="mb-2">
        <a href="/khotbah/create" class="btn btn-primary">Tambah Data Khotbah</a>
    </div>
    <div class="mb-2">
        <a href="/khotbahPdf" class="btn btn-primary">Cetak</a>
    </div>

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-8 align-self-center">
                    <h4>Data Khotbah</h4>
                </div>
            </div>
        </div>

        <div class="card-body p-0">
            <table class="table">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Pembicara</th>
                        <th>Judul Khotbah</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($khotbah as $dataKhotbah)
                        <tr>
                            <td>{{ $dataKhotbah->tanggal_khotbah }}</td>
                            <td>{{ $dataKhotbah->pembicara }}</td>
                            <td>{{ $dataKhotbah->judul_khotbah }}</td>
                            <td>
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <a href="khotbah/{{ $dataKhotbah->id_khotbah }}/edit"
                                            class="btn btn-primary">Edit</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <form action="khotbah/{{ $dataKhotbah->id_khotbah }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" class="btn btn-danger " value="Delete">
                                        </form>
                                    </li>

                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    @endsection
