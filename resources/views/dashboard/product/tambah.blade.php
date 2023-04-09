@extends('dashboard.layouts.main')

@section('container')



    <form enctype="multipart/form-data" method="post" action="{{route('product.store')}}">
    @csrf
      <div class="mt-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
      </div>
      <div class="mt-3">
        <label for="exampleInputEmail1" class="form-label">Harga</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="price">
      </div>
      <div class="mt-3">
        <label for="exampleInputEmail1" class="form-label">Deskripsi</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="description">
      </div>
      <div class="mt-3">
        <label for="exampleInputEmail1" class="form-label">category</label>
        {{-- <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="category_id"> --}}
        <select class="form-control @error('category_id') is-invalid @enderror" id="category_id"
                        name="category_id" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
      </div>
      <div class="form-group mt-3">
        <label for="exampleFormControlFile1">Gambar</label>
        <input type="file" class="form-control" id="exampleFormControlFile1" name="gambar">
    </div>
      <button type="submit" class="btn btn-primary mt-3">Tambah dong</button>
      
    </form>
  </div>

  @endsection