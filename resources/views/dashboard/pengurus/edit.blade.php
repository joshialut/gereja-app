@extends('layouts.app')
@section('content')
    <form action="/pengurus/{{ $pengurus->id_pengurus }}" method="POST">
        @method('put')
        @csrf
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8 align-self-center">
                        <h3>Edit Pengurus</h3>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 offset-md-1">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama_pengurus">Nama :</label>
                                <input type="text" class="form-control" name="nama_pengurus" id=""
                                    value="{{ $pengurus->nama_pengurus }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jenis_jabatan">Jabatan :</label>
                                <input type="text" class="form-control" name="jenis_jabatan" id=""
                                    value="{{ $pengurus->jenis_jabatan }}">
                            </div>
                        </div>
                        <br>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" value="update" class=" btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
