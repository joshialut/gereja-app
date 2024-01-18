@extends('layouts.app')
@section('content')
    <form action="/pengurus/store" method="POST">
        @csrf
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8 align-self-center">
                        <h3>Tambah Pengurus</h3>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 offset-md-1">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama_pengurus">Nama :</label>
                                <input type="text" class="form-control" name="nama_pengurus" id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jenis_jabatan">Jabatan :</label>
                                <input type="text" class="form-control" name="jenis_jabatan" id="">
                            </div>
                        </div>
                        <br>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
