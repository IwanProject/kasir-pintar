@extends('layout.app')


@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        Data Barang
                    </div>
                    <div class="card-body">
                        @if (session()->has('success'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @auth
                            <a href="/barang/create/" class="btn btn-primary">Tambah Barang</a>
                        @endauth



                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kode Barang</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Berat</th>
                                    <th scope="col">Panjang</th>
                                    <th scope="col">Lebar</th>
                                    <th scope="col">Tinggi</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $b)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $b->kode_barang }}</td>
                                        <td>{{ $b->nama }}</td>
                                        <td>{{ $b->berat }}</td>
                                        <td>{{ $b->panjang }}</td>
                                        <td>{{ $b->lebar }}</td>
                                        <td>{{ $b->tinggi }}</td>
                                        <td>

                                            @auth

                                                @if (auth()->user()->is_admin == null)
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <a href="/barang/{{ $b->id }}"
                                                                class="btn btn-secondary">Detail</a>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <a href="/barang/{{ $b->id }}/edit"
                                                                class="btn btn-warning">Edit</a>
                                                        </div>

                                                    </div>
                                                @else
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <a href="/barang/{{ $b->id }}"
                                                                class="btn btn-secondary">Detail</a>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <a href="/barang/{{ $b->id }}/edit"
                                                                class="btn btn-warning">Edit</a>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <form action="/barang/{{ $b->id }}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button onclick="return confirm('Are you sure?')" type="submit"
                                                                    class="btn btn-danger">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>

                                                @endif



                                            @endauth



                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
