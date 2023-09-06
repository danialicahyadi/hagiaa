@extends('admin.layout.app')
@section('heading', 'Form Resi Pengiriman')
@section('title', 'Form Resi Pengiriman')
@section('main_content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>@yield('heading')</h1>
                <div class="ml-auto">
                    {{-- <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> Button</a> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin-resi-store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label>Pengirim</label>
                                            <input type="text" class="form-control" name="pengirim" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label>No Telpon</label>
                                            <input type="number" class="form-control" name="no_telp_pengirim"
                                                value="" minlength="12">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label>Alamat Pengirim</label>
                                            <textarea name="alamat_pengirim" class="form-control h_100" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label>Penerima</label>
                                            <input type="text" class="form-control" name="penerima" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label>No Telpon</label>
                                            <input type="number" class="form-control" name="no_telp_penerima"
                                                value="" minlength="12">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label>Alamat Penerima</label>
                                            <textarea name="alamat_penerima" class="form-control h_100" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label>Quantity (Koli)</label>
                                            <input type="number" class="form-control" name="quantity" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label>Berat Asli (kg)</label>
                                            <input type="number" class="form-control" name="berat_asli" value="">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group mb-3">
                                            <label>Berat Volume (kg)</label>
                                            <input type="number" class="form-control" name="berat_volume" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Isi Kiriman</label>
                                    <input type="text" class="form-control" name="isi_kiriman" value="">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Tarif</label>
                                    <input type="number" class="form-control" name="tarif" value="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
