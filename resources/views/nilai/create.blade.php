@extends('layouts.app') 

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Mahasiswa</div>

                <div class="card-body">
                    <form action="{{ route('simpan.nilai') }}" method="post">
                        @csrf
                  
                        <div class="form-group">
                            <div class="form-row">

                                <div class="col">
                                    <label for="">Nama Mahasiswa</label>
                                <select name="mahasiswa_id" id="mahasiswa_id" class="form-control">
                                    <option value="" disabled selected>--Pilih Nama Mahasiswa--</option>
                                    @foreach ($mahasiswa as $mhs)
                                        <option value="{{ $mhs->id }}">{{$mhs->user->name}}</option>
                                    @endforeach                
                                </select>
                            </div>

                            <div class="col">
                                    <label for="makul">Nama Mata Kuliah</label>
                                <select name="makul_id" id="makul_id" class="form-control">
                                    <option value="" disabled selected>--Pilih Nama Mata Kuliah--</option>
                                    @foreach ($makul as $mk)
                                        <option value="{{ $mk->id }}">{{$mk->nama_makul}}</option>
                                    @endforeach
                                </select>
                            </div>
                                <div class="col">
                                    <label for="nilai">Nilai</label>
                                    <input type="number" name="nilai" class="form-control" placeholder="Tambahkan Nilai" > 
                                </div>  
                            </div>

                            <div>
                            <div class="form-group">
                                <div class="form-row float-right">
                                    <div class="col">
                                        <button type="submit" class="btn btn-md btn-primary">Simpan</button>
                                        <a href="{{ route('nilai') }}" class="btn btn-md btn-danger">Batal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
