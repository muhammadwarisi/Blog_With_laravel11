@extends('admin.layouts.app')

@section('title', 'General Dashboard')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="{{ asset('library/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('library/summernote/dist/summernote-bs4.min.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{$title}}</h1>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Article By {{Auth::user()->name}}</h4>
                </div>
                <div class="card-body">
                    <div class="section-title mt-0">
                        <a href="/dashboard/create" class="btn btn-primary">Buat Artikel Baru</a>
                    </div>
                    <table class="table-striped table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $item)
                            <tr>
                                <th scope="row">{{$item->id}}</th>
                                <td>{{Str::limit($item->title, 50)}}</td>
                                <td>
                                    <a href="#" class="btn btn-danger">Hapus</a>
                                    <a href="#" class="btn btn-secondary">Edit</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>
                    {{$posts->links()}}
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/simpleweather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('library/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('library/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('library/summernote/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('library/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/index-0.js') }}"></script>
@endpush
