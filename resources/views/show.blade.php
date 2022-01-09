@extends('layout.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mt-5">
                    <div class="card-body text-center">
                        <table class="table table-striped table-hover">

                            <tbody>
                                <tr>
                                    <td>Kode Barang : {{ $barang->kode_barang }}</td>

                                </tr>
                                <tr>
                                    <td>Nama Barang : {{ $barang->nama }}</td>

                                </tr>
                                <tr>
                                    <td>Berat : {{ $barang->berat }}</td>

                                </tr>
                                <tr>
                                    <td>Panjang : {{ $barang->panjang }}</td>

                                </tr>
                                <tr>
                                    <td>Lebar : {{ $barang->lebar }}</td>

                                </tr>
                                <tr>
                                    <td>Tinggi : {{ $barang->tinggi }}</td>

                                </tr>
                                <tr>
                                    <td><a href="/">Back</a></td>
                                </tr>
                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
