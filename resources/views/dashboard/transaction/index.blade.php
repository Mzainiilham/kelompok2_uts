@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Transaksi</h1>
</div>

<body>

    <div class="row my-3">
        <table class="table table-bordered table-striped mx-6">
            <thead class="table-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col">Kuantitas</th>
                <th scope="col">Subtotal</th>
                
                
              </tr>
            </thead>
            <tbody>
             
            
             @foreach ($dataTransaction as $item)
              <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{ $item->product_name }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->qty }}</td>
                <td>{{ $item->subtotal }}</td>
                
                </tr>
      </div>
      @endforeach
      </tbody>
</body>



@endsection
