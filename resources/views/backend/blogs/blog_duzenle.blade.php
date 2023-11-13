@extends('backend_layout')

@section('title')
    Blog Ekleme
    @endsection

@section('breadcrumbs')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Blog Konusu Düzenle / {{ $blogcek->blog_baslik }}</h1>
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
    <form action="{{ route("admin.blog.blogGuncellePost",["id"=>$blogcek->id]) }}" enctype="multipart/form-data" method="POST">
        @Csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Blog Başlık</label>
                <input type="text" name="blog_baslik" value="{{ $blogcek->blog_baslik }}" class="form-control" id="exampleInputEmail1" placeholder="Kategori İsmi">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Blog konu Baslik İçerik</label>
                <input type="text" name="blog_konu_baslik" value="{{ $blogcek->blog_konu_baslik }}" class="form-control" id="exampleInputEmail1" placeholder="Blog baslik İsmi">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">İçerik</label>
                <textarea name="blog_icerik" class="form-control" rows="3" placeholder="Enter ...">{{ $blogcek->blog_icerik }}</textarea>
            </div>

            <div class="form-group">
                <label>Yüklene Resim</label>
                <img src="{{ asset('assets/images/blog/'.$blogcek->blog_resim) }}" width="80" height="70">
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
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </div>
    </form>
    @endsection

@push('customCss')

    @endpush

@push('customJs')

    @endpush