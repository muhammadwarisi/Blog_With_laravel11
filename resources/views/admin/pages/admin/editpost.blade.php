@extends('admin.layouts.app')

@section('title', 'Create New Post')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <div class="section-header-back">
                    <a href="features-posts.html"
                        class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
                </div>
                <h1>Create New Post</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Posts</a></div>
                    <div class="breadcrumb-item">Create New Post</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Edit Post</h2>
                <p class="section-lead">
                    On this page you can create a new post and fill in all fields.
                </p>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Write Your Post</h4>
                            </div>
                            <form action="{{'/dashboard/'.$data->id}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                            <div class="card-body">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="title" value="{{$data->title}}">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slug</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" class="form-control" name="slug" placeholder="artikel-pertama" value="{{$data->slug}}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="summernote-simple" name="body">{{$data->body}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary">Update Post</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/upload-preview/upload-preview.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-post-create.js') }}"></script>
@endpush
