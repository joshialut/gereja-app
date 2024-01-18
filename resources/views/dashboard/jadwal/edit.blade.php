@extends('layouts.app')
@section('content')
    <form action="/jadwal/{{ $ibadah->id_ibadah }}" method="POST">
        @method('put')
        @csrf
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8 align-self-center">
                        <h3>Edit Jadwal</h3>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 offset-md-1">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jenis_ibadah">Jenis Ibadah :</label>
                                <input type="text" class="form-control" name="jenis_ibadah" id=""
                                    value="{{ $ibadah->jenis_ibadah }}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tempat_lahir">Tanggal Ibadah :</label>
                                <input type="date" class="form-control" name="tanggal_ibadah" id=""
                                    value="{{ $ibadah->tanggal_ibadah }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tempat_lahir">Jam Ibadah :</label>
                                <input type="time" class="form-control" name="jam_ibadah" id=""
                                    value="{{ $ibadah->jam_ibadah }}">
                            </div>
                        </div>
                        <br>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" value="update" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </form>
@endsection
