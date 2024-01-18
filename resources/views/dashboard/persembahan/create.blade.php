@extends('layouts.app')
@section('content')
    <form action="/persembahan/store" method="POST">
        @csrf
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8 align-self-center">
                        <h3>Tambah Persembahan</h3>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 offset-md-1">

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tanggal_persembahan">Tanggal :</label>
                                <input type="date" class="form-control" name="tanggal_persembahan" id="">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jumlah_persembahan">Jumlah Persembahan :</label>
                                <input type="number" class="form-control" name="jumlah_persembahan" id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jenis_persembahan">Jenis Persembahan :</label>
                                <select name="jenis_persembahan" class="form-control" id="">
                                    <option value="Persembahan Kolekte">Persembahan Kolekte</option>
                                    <option value="Persembahan Khusus">Persembahan Khusus</option>
                                    <option value="Persembahan Persepuluhan">Persembahan Persepuluhan</option>
                                    <option value="Persembahan Ucapan Syukur">Persembahan Ucapan Syukur</option>
                                    <option value="dll">dll</option>
                                </select>
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
