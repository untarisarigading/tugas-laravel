@extends('layouts.master')
@section('title','anggota')
@section('content') 
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">DATA ANGGOTA</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Anggota</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
{{-- {{dd($anggota)}} --}}
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Form Anggota</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('anggota.store')}}" method="POST">
                            @csrf 
                            @method ('PUT') 
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="id">ID Anggota</label>
                                    <input disabled value="{{ $anggota[0]->id }}" name="id" type="text" class="form-control" id="id" placeholder="Masukkan ID">
                                </div>
                                <div class="form-group">
                                     <label for="kode_anggota">Kode Anggota</label>
                                    <input name="kode" class="form-control @error('kode') is-invalid @enderror" name="kode" id="kode_anggota" placeholder="Masukan Kode" value="{{ $anggota[0]->kode_anggota }}">
                                    @error('kode')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror 
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input value="{{ $anggota[0]->nama_anggota }}" name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Masukan nama" >
                                    @error('nama')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="jk_anggota">Jenis Kelamin</label>
                                    @if ($anggota[0]->jk_anggota == 'L')
                                    <div class="custom-control custom-radio">
                                        <input value="L" class="custom-control-input" type="radio" id="l"
                                            name="jk_anggota" @error('jk_anggota') is-invalid @enderror name="jk_anggota" value="{{ $anggota[0]->jk_anggota }}">
                                        <label for="l" class="custom-control-label">Laki-laki</label>
                                    </div>
                                    @else 
                                    <div class="custom-control custom-radio">
                                        <input value="P" class="custom-control-input" type="radio" id="p"
                                            name="jk">
                                        <label for="p" class="custom-control-label">Perempuan</label>
                                          @error('jk')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <select name="jurusan" class="custom-select @error('jurusan') is-invalid @enderror"> 
                                    <option selected>{{ $anggota[0]->jurusan_anggota }}</option>
                                    <option value="RPL" >RPL</option>
                                    <option value="DPIB" >DPIB</option>
                                    <option value="TP" >TP</option>
                                    <option value="TFLM" >TFLM</option>
                                    <option value="TEI" >TEI</option>
                                    <option value="TITL" >TITL</option>
                                    <option value="TKJ" >TKJ</option>
                                    </select>
                                     @error('jurusan')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                   <label>No. Telepon</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                        </div>
                                        <input value="{{ $anggota[0]->no_telp_anggota }}" type="number" class="form-control" name="no_telp_anggota" placeholder="Masukan Angka" >
                                    @error('no_telp_anggota')
                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label>Alamat</label>
                                        <textarea name="alamat" class="form-control" rows="3" placeholder="Masukan alamat"></textarea>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>
                            <!-- /.content -->
                        </form>
                    </div> 
