@extends('admin.layout.app')
@section('heading', 'Resi Pengiriman')
@section('title', 'Resi Pengiriman')
@section('main_content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>@yield('heading')</h1>
                <div class="ml-auto">
                    <a href="{{ route('admin-resi-create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Button</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="example1">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Pengirim</th>
                                            <th>Penerima</th>
                                            <th>Isi Kiriman</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data['resi'] as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->pengirim }}</td>
                                                <td>{{ $row->penerima }}</td>
                                                <td>{{ $row->isi_kiriman }}</td>
                                                <td class="pt_10 pb_10">
                                                    <a href="{{ route('admin-resi-show', $row->id) }}"
                                                        class="btn btn-primary">Show</a>
                                                    <a href="" class="btn btn-danger"
                                                        onClick="return confirm('Are you sure?');">Delete</a>
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
        </section>
    </div>
@endsection
@push('js')
    {{-- <script>
        function redirectToResiDetail(url) {
            window.location.href = url;
        }
    </script> --}}
@endpush
