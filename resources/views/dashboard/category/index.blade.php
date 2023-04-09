@extends('dashboard.layouts.main')

@section('container')
    
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kategory</h1>
</div>

<body>
    <div class="container my-3">
      <a href="{{ route('category.create') }}" class="btn btn-primary my-3">+ Tambah Kategori</a>
      
      <div class="row my-3">
        @foreach ($dataCategory as $item)    
        <div class="col-md-3">
          <div class="card">
            <img src="{{ asset('storage/'.$item->image) }}" alt="gambar kategori" style="width: 200px; margin: 10px auto;">
            <div class="card-body">
              <h5 class="card-title M-1">{{ $item->name }}</h5>
              <p>{{ $item->description }}</p>
              <a href="/dashboard/category/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>

              <form action="{{ url('/dashboard/category/'.$item->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Delete</button>
              </form>
              
            </div>
          </div>      
        </div>
        @endforeach
      </div>
    </div>
  </body>

@endsection

