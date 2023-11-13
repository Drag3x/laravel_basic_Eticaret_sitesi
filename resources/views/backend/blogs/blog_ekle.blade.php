@extends('backend_layout')

@section('title')
    Blog Ekleme
    @endsection

@section('breadcrumbs')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Yeni Blog Konusu Ekle</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.blog') }}">Blog</a></li>
                <li class="breadcrumb-item active">Blog Ekle</li>
            </ol>
        </div>
    </div>
    @endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route("admin.blog.blogEklePost") }}" enctype="multipart/form-data" method="POST">
        @Csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Blog Başlık</label>
                <input type="text" name="blog_baslik" class="form-control" id="exampleInputEmail1" placeholder="Kategori İsmi">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Blog konu Baslik İçerik</label>
                <input type="text" name="blog_konu_baslik" class="form-control" id="exampleInputEmail1" placeholder="Blog baslik İsmi">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">İçerik</label>
                <textarea name="blog_icerik" class="form-control" rows="3" placeholder="Enter ..."></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Blog Resim</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input name="blog_resim" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
            </div>
            <div class="form-check">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Yeni Ekle</button>
        </div>
    </form>
    @endsection

@push('customCss')

    @endpush

@push('customJs')

    @endpush