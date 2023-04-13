@extends('dashboard.layouts.main')

@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Transaksi</h1>
</div>

<body>
  
  <div class="container my-3">
    <a href="{{ route('transaction.create') }}" class="btn btn-primary my-3">+ Tambah Transaksi</a>
    {{-- <button class="btn btn-primary">Tambah Transaksi</button> --}}
    <div class="row my-3">
      @foreach ( $dataTransaction as $item )
          
      <div class="col-md-3">
        <div class="card">
          <img
            src="{{ asset('storage/'.$item->image) }}"
            alt="gambar_produk" style="width: 200px; margin: 10px auto;">
          <div class="card-body">
            <h5 class="card-title M-1">{{ $item->customer_name }}</h5>
            <p class="card-text M-1">{{ $item->total }}</p>
            
            <a href="{{ url('dashboard/transaction/'.$item->id.'/edit') }}" class="btn btn-warning">Edit</a>

            <form action="{{ url('/dashboard/transaction/'.$item->id) }}" method="post">
              @method('DELETE')
              @csrf
              <button class="btn btn-danger">Delete</button>
            </form>
            {{-- <a href="{{ url('dashboard/transaction/'.$item->id) }}"class="btn btn-danger">Delete</a> --}}
            
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  
</body>



@endsection