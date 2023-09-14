@extends('layouts.master')
@section('title','Petugas')
@section('content')
{{dd($petugas)}}
<div class="container">
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">No</th>
            <th>Id</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>No Telp</th>
            <th>Alamat</th>
          </tr>
        </thead>
        <tbody>
            
            @forelse ($petugas as $key=>$item)    
            <tr>
              <td>{{ $key + 1}}</td>
              <td>{{ $item->id }}</td>
              <td>{{ $item->nama_petugas}}</td>
              <td>{{ $item->jabatan_petugas}}</td>
              <td>{{ $item->no_telp_petugas}}</td>
              <td>{{ $item->alamat_petugas}}</td>
            </tr>
            @empty
                <tr>
                    Data is empty
                </tr>
            @endforelse
        </tbody>
      </table>
    </div>
</div>
@endsection