@extends('admin.layout.app')
@section('heading', 'Resi Pengiriman Langsung')
@section('title', 'Resi Pengiriman Langsung')
@section('main_content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>@yield('heading')</h1>
                <div class="ml-auto">
                    <a href="javascript:window.print();"
                        class="btn btn-warning btn-icon icon-left text-white print-invoice-button"><i
                            class="fas fa-print"></i>
                        Print</a>
                </div>
            </div>
            <div class="invoice">
                <div class="invoice-print">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="invoice-title">
                                <h2><img src="{{ asset('uploads/dakota.png') }}" alt=""></h2>
                                <div class="invoice-number">{{ $data['resi']->no_resi }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <address>
                                        <strong>DAKOTA BUANA SEMESTA
                                        </strong><br>
                                        <strong>HANKAM AGEN
                                        </strong><br>
                                        0813 2031 1552 / 0812 8606 8110,<br>
                                        Jl. Hankam Raya No. 7E Rt. 6 Rw. 9 Jatiwarna – Pondok Melati, Bekasi
                                    </address>
                                </div>
                                <div class="col-md-6 text-md-right">
                                    <address>
                                        <strong>Tanggal Resi</strong><br>
                                        {{ Carbon\Carbon::parse($data['resi']->created_at)->locale('id')->isoFormat('dddd, D MMMM Y') }}
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <h3 class="text-center" style="text-color: black;">Resi Pengiriman Langsung</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>
                                        {{ Carbon\Carbon::parse($data['resi']->created_at)->locale('id')->isoFormat('dddd, D MMMM Y') }}
                                    </p>
                                </div>
                                <div class="col-md-6 text-md-right">
                                    <p>No Polisi : B 9679 NJ</p>
                                </div>
                            </div>
                            <hr class="invoice-above-table">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-md">
                                    <tr>
                                        <th>No</th>
                                        <th>Pengirim</th>
                                        <th class="text-center">Penerima</th>
                                        <th class="text-center">Qty</th>
                                        <th class="text-center">Berat Asli (kg)</th>
                                        <th class="text-center">Berat Volume (kg)</th>
                                        <th class="text-center">Isi Kiriman</th>
                                        <th class="text-right">Subtotal</th>
                                    </tr>
                                    <tr>
                                        <td>{{ $data['resi']->no_resi }}</td>
                                        <td class="text-center">
                                            {{ $data['resi']->pengirim }}<br>{{ $data['resi']->no_telp_pengirim }}<br>{{ $data['resi']->alamat_pengirim }}
                                        </td>
                                        <td class="text-center">
                                            {{ $data['resi']->penerima }}<br>{{ $data['resi']->no_telp_penerima }}<br>{{ $data['resi']->alamat_penerima }}
                                        <td class="text-right">{{ $data['resi']->quantity }}</td>
                                        <td class="text-right">{{ $data['resi']->berat_asli }}</td>
                                        <td class="text-right">{{ $data['resi']->berat_volume }}</td>
                                        <td class="text-right">{{ $data['resi']->isi_kiriman }}</td>
                                        <td class="text-right">Rp {{ number_format($data['resi']->tarif) }}</td>
                                    </tr>
                                </table>
                            </div>
                            {{-- <div class="row mt-2">
                                <div class="col-lg-12 text-right">
                                    <div class="invoice-detail-item">
                                        <div class="invoice-detail-name">Total</div>
                                        <div class="invoice-detail-value invoice-detail-value-lg">Rp
                                            {{ number_format($data['resi']->tarif) }}</div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                {{-- <hr class="about-print-button"> --}}
                <div class="row mb-5">
                    <div class="col-md-6">
                        <p>
                            Kiriman telah kami terima dengan baik,
                        </p>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <p>CABANG / AGEN PENGIRIM</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            Tanda Tangan / Stempel
                        </p>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <p>Tanda Tangan / Stempel</p>
                    </div>
                </div>
            </div>
            <div class="invoice">
                <div class="invoice-print">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="invoice-title">
                                <h2><img src="{{ asset('uploads/dakota.png') }}" alt=""></h2>
                                <div class="invoice-number">{{ $data['resi']->no_resi }}</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <address>
                                        <strong>DAKOTA BUANA SEMESTA
                                        </strong><br>
                                        <strong>HANKAM AGEN
                                        </strong><br>
                                        0813 2031 1552 / 0812 8606 8110,<br>
                                        Jl. Hankam Raya No. 7E Rt. 6 Rw. 9 Jatiwarna – Pondok Melati, Bekasi
                                    </address>
                                </div>
                                <div class="col-md-6 text-md-right">
                                    <address>
                                        <strong>Tanggal Resi</strong><br>
                                        {{ Carbon\Carbon::parse($data['resi']->created_at)->locale('id')->isoFormat('dddd, D MMMM Y') }}
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-12">
                            <h3 class="text-center" style="text-color: black;">Resi Pengiriman Langsung</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <p>
                                        {{ Carbon\Carbon::parse($data['resi']->created_at)->locale('id')->isoFormat('dddd, D MMMM Y') }}
                                    </p>
                                </div>
                                <div class="col-md-6 text-md-right">
                                    <p>No Polisi : B 9679 NJ</p>
                                </div>
                            </div>
                            <hr class="invoice-above-table">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover table-md">
                                    <tr>
                                        <th>No</th>
                                        <th>Pengirim</th>
                                        <th class="text-center">Penerima</th>
                                        <th class="text-center">Qty</th>
                                        <th class="text-center">Berat Asli (kg)</th>
                                        <th class="text-center">Berat Volume (kg)</th>
                                        <th class="text-center">Isi Kiriman</th>
                                        <th class="text-right">Subtotal</th>
                                    </tr>
                                    <tr>
                                        <td>{{ $data['resi']->no_resi }}</td>
                                        <td class="text-center">
                                            {{ $data['resi']->pengirim }}<br>{{ $data['resi']->no_telp_pengirim }}<br>{{ $data['resi']->alamat_pengirim }}
                                        </td>
                                        <td class="text-center">
                                            {{ $data['resi']->penerima }}<br>{{ $data['resi']->no_telp_penerima }}<br>{{ $data['resi']->alamat_penerima }}
                                        <td class="text-right">{{ $data['resi']->quantity }}</td>
                                        <td class="text-right">{{ $data['resi']->berat_asli }}</td>
                                        <td class="text-right">{{ $data['resi']->berat_volume }}</td>
                                        <td class="text-right">{{ $data['resi']->isi_kiriman }}</td>
                                        <td class="text-right">Rp {{ number_format($data['resi']->tarif) }}</td>
                                    </tr>
                                </table>
                            </div>
                            {{-- <div class="row mt-2">
                                <div class="col-lg-12 text-right">
                                    <div class="invoice-detail-item">
                                        <div class="invoice-detail-name">Total</div>
                                        <div class="invoice-detail-value invoice-detail-value-lg">Rp
                                            {{ number_format($data['resi']->tarif) }}</div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                {{-- <hr class="about-print-button"> --}}
                <div class="row mb-5">
                    <div class="col-md-6">
                        <p>
                            Kiriman telah kami terima dengan baik
                        </p>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <p>CABANG / AGEN PENGIRIM</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            Tanda Tangan / Stempel
                        </p>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <p>Tanda Tangan / Stempel</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
