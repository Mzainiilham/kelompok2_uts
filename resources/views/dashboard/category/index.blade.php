@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><strong>Category</strong></h1>
</div>

<body>
    <div class="container my-3">
      <a href="{{ route('category.create') }}" class="btn btn-success my-3">+ Tambah Kategori</a>

      <div class="row my-3">
        <table class="table table-bordered table-striped mx-6">
            <thead class="table-dark">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Foto</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($dataCategory as $item)
              <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td><img src="{{ asset('storage/'.$item->image) }}" alt=""></td>
                <td>{{ $item->description }}</td>
                <td>
                    <div class="row">
                        <div class="col-sm-1">
                            <a href="/dashboard/category/{{ $item->id }}/edit" class="btn btn-primary">Edit</a>
                        </div>
                        <div class="col-sm-1">
                            <form action="{{ url('/dashboard/category/'.$item->id) }}" method="post">
                              @method('DELETE')
                              @csrf
                              <button class="btn btn-danger">Hapus</button>
                            </form>

                        </div>
                      </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{-- @foreach ($dataCategory as $item) --}}
        {{-- <div class="col-md-3">
          <div class="card">
            <img src="{{ asset('storage/'.$item->image) }}" alt="gambar kategori" style="width: 200px; margin: 10px auto;">
            <div class="card-body">
              <h5 class="card-title M-1">{{ $item->name }}</h5>
              <p>{{ $item->description }}</p>
              <div class="row g-5">
                <div class="col-md-6">
                    <a href="/dashboard/category/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>
                </div>
                <div class="col-md-6">
                    <form action="{{ url('/dashboard/category/'.$item->id) }}" method="post">
                      @method('DELETE')
                      @csrf
                      <button class="btn btn-danger">Hapus</button>
                    </form>

                </div>
              </div>
            </div>


          </div>
        </div> --}}
        {{-- @endforeach --}}
      </div>
    </div>
  </body>

@endsection

