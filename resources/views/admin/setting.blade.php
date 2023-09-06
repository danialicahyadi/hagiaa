@extends('admin.layout.app')
@section('heading', 'Setting')
@section('title', 'Setting')
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

                                <div class="row">
                                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                            aria-orientation="vertical">
                                            <a class="nav-link active" id="v-1-tab" data-toggle="pill" href="#v-1"
                                                role="tab" aria-controls="v-1" aria-selected="true">
                                                Photo Item
                                            </a>
                                            <a class="nav-link" id="v-2-tab" data-toggle="pill" href="#v-2"
                                                role="tab" aria-controls="v-2" aria-selected="false">
                                                Text Item
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-10 col-lg-9 col-md-8 col-sm-12">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="pt_0 tab-pane fade show active" id="v-1" role="tabpanel"
                                                aria-labelledby="v-1-tab">
                                                <!-- Photo Item Start -->
                                                <div class="form-group mb-3">
                                                    <label>
                                                        Existing Photo
                                                    </label>
                                                    <div>
                                                        <img src="{{ asset('uploads/logo.png') }}" alt=""
                                                            class="w_200">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>
                                                        Change Photo
                                                    </label>
                                                    <div>
                                                        <input type="file" name="">
                                                    </div>
                                                </div>
                                                <!-- Photo Item End -->
                                            </div>

                                            <div class="pt_0 tab-pane fade" id="v-2" role="tabpanel"
                                                aria-labelledby="v-2-tab">
                                                <!-- Text Item Start -->
                                                <div class="form-group mb-3">
                                                    <label>Text</label>
                                                    <input type="text" class="form-control" name=""
                                                        value="123">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>Status</label>
                                                    <select name="recaptcha_status" class="form-control">
                                                        <option value="Show">Show</option>
                                                        <option value="Hide">Hide</option>
                                                    </select>
                                                </div>
                                                <!-- Text Item End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mt_30">
                                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
