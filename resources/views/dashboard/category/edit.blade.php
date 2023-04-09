@extends('dashboard.layouts.main')

@section('container')

<form action="{{  url('dashboard/category/'.$dataCategory->id) }}" method="post">
  @method('put')
  @csrf
    <div class="form-group mt-3">
      <label for="exampleInputEmail1">Nama</label>
      <input name='name' type="text" class="form-control" id="exampleInputEmail1" placeholder="nama" value="{{  $dataCategory->name }}">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Deskripsi</label>
      <input name='description' type="text" class="form-control" id="exampleInputPassword1" placeholder="Deskripsi" value="{{ $dataCategory->description }}">
    </div>

    <button type="submit" class="btn btn-primary mt-3">Edit Sekarang</button>
  </form>

  @endsection