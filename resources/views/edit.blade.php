@extends('layout.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-header">
                        Edit Data Barang
                    </div>
                    <div class="card-body">
                        <form action="/barang/{{ $barang->id }}" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="kode_barang" class="form-label">Kode Barang</label>
                                        <input type="text" class="form-control @error('kode_barang') is-invalid @enderror"
                                            name="kode_barang" id="kode_barang" value="{{ $barang->kode_barang }}">
                                        @error('kode_barang')
                                            <div class="valid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama Barang</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                            name="nama" id="nama" value="{{ $barang->nama }}">
                                        @error('nama')
                                            <div class="valid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="berat" class="form-label">Berat (gram)</label>
                                        <input type="text" class="form-control @error('berat') is-invalid @enderror"
                                            name="berat" id="berat" value="{{ $barang->berat }}">
                                        @error('berat')
                                            <div class="valid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="panjang" class="form-label">Panjang (cm)</label>
                                        <input type="text" class="form-control @error('panjang') is-invalid @enderror"
                                            name="panjang" id="panjang" value="{{ $barang->panjang }}">
                                        @error('panjang')
                                            <div class="valid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="lebar" class="form-label">Lebar (cm)</label>
                                        <input type="text" class="form-control @error('lebar') is-invalid @enderror"
                                            name="lebar" id="lebar" value="{{ $barang->lebar }}">
                                        @error('lebar')
                                            <div class="valid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="tinggi" class="form-label">Tinggi (cm)</label>
                                        <input type="text" class="form-control @error('tinggi') is-invalid @enderror"
                                            name="tinggi" id="tinggi" value="{{ $barang->tinggi }}">
                                        @error('tinggi')
                                            <div class="valid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="btn btn-warning">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
