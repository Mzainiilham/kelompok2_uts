@extends('dashboard.layouts.main')

@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Produk</h1>
</div>

<body>
  
  <div class="container my-3">
    <a href="{{ route('product.create') }}" class="btn btn-primary my-3">+ Tambah Produk</a>
    {{-- <button class="btn btn-primary">Tambah Produk</button> --}}
    <div class="row my-3">
      @foreach ( $dataProduct as $item )
          
      <div class="col-md-3">
        <div class="card">
          <img
            src="{{ asset('storage/'.$item->image) }}"
            alt="gambar_produk" style="width: 200px; margin: 10px auto;">
          <div class="card-body">
            <h5 class="card-title M-1">{{ $item->name }}</h5>
            <p class="card-text M-1">{{ $item->description }}</p>
            <p class="card-text M-1">{{ $item->category->name }}</p>
            <p class="card-text M-1">{{ $item->price }}</p>
            <a href="{{ url('dashboard/product/'.$item->id.'/edit') }}" class="btn btn-warning">Edit</a>

            <form action="{{ url('/dashboard/product/'.$item->id) }}" method="post">
              @method('DELETE')
              @csrf
              <button class="btn btn-danger my-2">Delete</button>
            </form>
            <form action="{{ url('/dashboard/cart/') }}" method="post">
              @csrf
              <button class="btn btn-primary my-2">add to Cart</button>
            </form>
          
        
            
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  
</body>



@endsection


    
