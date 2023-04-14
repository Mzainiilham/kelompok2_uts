@extends('dashboard.layouts.main')

@section('container')

<form enctype="multipart/form-data" method="post" action="{{route('transaction.store')}}">
  @csrf
    <div class="mt-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="customer_name">
      </div>
      <div class="mt-3">
        <label for="exampleInputEmail1" class="form-label">Total</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="total">
      </div>
        <div class="mt-3">
        <label for="exampleInputEmail1" class="form-label">User ID</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user_id">
      </div>
     
      
      
      <button type="submit" class="btn btn-primary mt-3">Tambah dong</button>
      
    </form>
  </div>

  @endsection
