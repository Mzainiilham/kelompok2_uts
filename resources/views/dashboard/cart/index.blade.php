@extends('dashboard.layouts.main')

@section('title', 'Cart | Index')

@section('container')
    <div class="d-flex row gap-4 justify-content-center">
        @foreach ($carts as $cart)
            <div class="col-3 mt-2 mb-1">
                <div class="card" style="min-width: 18rem;">
                    <form action="{{ url('/dashboard/transaction') }}" method="post">
                        @csrf
                        <div class="card-body">

                            <h5 class="card-title"> Nama Produk : {{ App\Models\Product::find($cart['product_id'])->name }}
                            </h5>
                            <p class="card-text my-1"> Kategori Produk :
                                {{ App\Models\Product::find($cart['product_id'])->category->name }}</p>
                            <p class="card-text text-muted my-1">Harga :
                                {{ App\Models\Product::find($cart['product_id'])->price }}</p>
                            <p class="card-text text-muted my-1"> Kuantitas Produk : {{ $cart->qty }}</p>
                            <p class="card-text text-muted my-1"> Subtotal Produk : {{ $cart->subtotal }}</p>
                        </div>
                        <input type="hidden" name="product_id" value="{{App\Models\Product::find($cart['product_id'])->id}}">
                        <input type="hidden" name="product_name" value="{{App\Models\Product::find($cart['product_id'])->name}}">
                        <input type="hidden" name="price" value="{{App\Models\Product::find($cart['product_id'])->price}}">
                        <input type="hidden" name="qty" value="{{$cart->qty}}">
                        <input type="hidden" name="subtotal" value="{{$cart->subtotal}}">
                        <div class="card-body">
                            <h5 class="card-title">Deskripsi </h5>
                            <p class="card-text">{{ App\Models\Product::find($cart['product_id'])->description }}</p>
                        </div>
                        <button class="btn btn-primary my-2">Bayar</button>
                    </form>
                </div>
            </div>
        @endforeach

    </div>
@endsection
