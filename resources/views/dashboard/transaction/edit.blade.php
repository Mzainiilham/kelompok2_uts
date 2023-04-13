@extends('dashboard.layouts.main')

@section('container')

<form action="{{  url('dashboard/transaction/'.$dataTransaction->id) }}" method="post">
  @method('put')
  @csrf
    <div class="form-group mt-3">
      <label for="exampleInputEmail1">Nama</label>
      <input name='name' type="text" class="form-control" id="exampleInputEmail1" placeholder="nama" value="{{ $dataTransaction->customer_name }}">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Total</label>
      <input name='total' type="text" class="form-control" id="exampleInputEmail1" placeholder="total" value="{{ $dataTransaction->total }}">
    </div>
   
    <button type="submit" class="btn btn-primary mt-3">Edit Sekarang</button>
  </form>

  @endsection