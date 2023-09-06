@extends('admin.layout.app')
@section('heading', 'Form')
@section('title', 'Form')
@section('main_content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>@yield('heading')</h1>
                <div class="ml-auto">
                    <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> Button</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group mb-3">
                                    <label>Text</label>
                                    <input type="text" class="form-control" name="" value="">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Datepicker</label>
                                    <input type="text" class="form-control datepicker" name="" value="">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Datepicker</label>
                                    <input type="text" class="form-control timepicker" name="" value="">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Color</label>
                                    <input type="text" class="form-control jscolor" name="" value="A2A5FF">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Textarea</label>
                                    <textarea name="" class="form-control h_100" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Textarea (Summernote)</label>
                                    <textarea name="" class="form-control snote" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Toggle Option *</label>
                                    <div class="toggle-container">
                                        <input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No"
                                            data-onstyle="success" data-offstyle="danger" name="" value="Yes">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Toggle Option *</label>
                                    <div class="toggle-container">
                                        <input type="checkbox" data-toggle="toggle" data-on="Yes" data-off="No"
                                            data-onstyle="success" data-offstyle="danger" name="" value="Yes"
                                            checked>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Photo</label>
                                    <div>
                                        <input type="file" name="">
                                    </div>
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
