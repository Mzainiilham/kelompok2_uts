@extends('dashboard.layouts.main')

@section('container')

<form enctype="multipart/form-data" action="{{ url('dashboard/category') }}" method="post">
  @csrf
    <div class="form-group mt-3">
      <label for="exampleInputEmail1">Nama</label>
      <input name='nama' type="text" class="form-control" id="exampleInputEmail1" placeholder="nama">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Deskripsi</label>
      <input name='deskripsi' type="text" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi">
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Gambar</label>
        <input name='gambar' type="file" class="form-control" id="exampleFormControlFile1">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Tambah</button>
  </form>

  @endsection