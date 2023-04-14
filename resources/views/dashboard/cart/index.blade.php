@extends('app')

@section('title', 'Cart | Index')

@section('content')
    <div class="d-flex row gap-4 justify-content-center">
        @foreach ($carts as $cart)
        <div class="col-3 mt-2 mb-1">
            <div class="card" style="min-width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"> Nama Produk : {{ $cart->$product->name }} </h5>
                    <p class="card-text my-1"> Kategori Produk : {{$cart->$product->name}}</p>
                    <p class="card-text text-muted my-1">{{$cart->$product->price}}</p>
                    <p class="card-text text-muted my-1"> Kuantitas Produk : {{$cart->qty}}</p>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Deskripsi</h5>
                    <p class="card-text">{{ $cart->$product->description }}</p>
                </div>
        </div>
    </div>
    @endforeach

  </div>
@endsection