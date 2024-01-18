@extends('layouts.app')
@section('content')
    <form action="/jemaat/{{ $jemaat->id_jemaat }}" method="POST">
        @method('put')
        @csrf
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-8 align-self-center">
                        <h3>Tambah Jemaat</h3>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 offset-md-1">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama">Nama :</label>
                                <input type="text" value="{{ $jemaat->nama }}" class="form-control" name="nama"
                                    id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nik">NIK :</label>
                                <input type="number" value="{{ $jemaat->nik }}" class="form-control" name="nik"
                                    id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir :</label>
                                <input type="text" value="{{ $jemaat->tempat_lahir }}" class="form-control"
                                    name="tempat_lahir" id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir :</label>
                                <input type="date" value="{{ $jemaat->tanggal_lahir }}" class="form-control"
                                    name="tanggal_lahir" id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="gol_darah">Golongan Darah :</label>
                                <select name="gol_darah" class="form-control" id="">
                                    <option value="{{ $jemaat->gol_darah }}" selected>{{ $jemaat->gol_darah }}</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin :</label>
                                <br>
                                @if ($jemaat->jenis_kelamin == 'Pria')
                                    <input class="form-check-input" type="radio" id="pria" name="jenis_kelamin"
                                        value="pria" checked>
                                    <label for="pria">Pria</label><br>
                                    <input class="form-check-input" type="radio" id="wanita" name="jenis_kelamin"
                                        value="wanita">
                                    <label for="wanita">Wanita</label><br>
                                @else
                                    <input class="form-check-input" type="radio" id="pria" name="jenis_kelamin"
                                        value="pria">
                                    <label for="pria">Pria</label><br>
                                    <input class="form-check-input" type="radio" id="wanita" name="jenis_kelamin"
                                        value="wanita" checked>
                                    <label for="wanita">Wanita</label><br>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="alamat_jemaat">Alamat :</label>
                                <textarea name="alamat_jemaat" value="{{ $jemaat->alamat_jemaat }}" id="alamat_jemaat" cols="25" rows="2"
                                    class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="no_telepon">Nomor Telepon :</label>
                                <input type="number" value="{{ $jemaat->no_telepon }}" class="form-control"
                                    name="no_telepon" id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama">Pelayanan :</label>
                                <input type="text" value="{{ $jemaat->jenis_pelayanan }}" class="form-control"
                                    name="jenis_pelayanan" id="">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nama_wilayah">Wilayah:</label>
                                <br>
                                <select name="nama_wilayah" id="nama_wilayah" class="form-control">
                                    @foreach ($wilayah as $item)
                                        @if ($item->id_wilayah == $jemaat->id_wilayah)
                                            <option value="{{ $item->id_wilayah }}" selected>{{ $item->nama_wilayah }}
                                            </option>
                                        @endif
                                        <option value="{{ $item->id_wilayah }}">{{ $item->nama_wilayah }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" value="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
@endsection
