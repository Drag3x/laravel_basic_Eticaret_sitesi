@extends('backend_layout')

@section('title')
    Kurumsal Sayfa Ekleme
    @endsection

@section('breadcrumbs')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Yeni Kurumsal Sayfası Ekle</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.kurumsal') }}">Kurumsal</a></li>
                <li class="breadcrumb-item active">Yeni Ekle</li>
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
    <form action="{{ route("admin.kurumsal.kurumsalEklePost") }}" enctype="multipart/form-data" method="POST">
        @Csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Kurumsal Başlık</label>
                <input type="text" name="kurumsal_baslik" class="form-control" id="exampleInputEmail1" placeholder="Kurumsal Başlık">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">İçerik</label>
                <textarea name="kurumsal_icerik" class="form-control" rows="3" placeholder="Enter ..."></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Resim</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input name="kurumsal_resim" type="file" class="custom-file-input" id="exampleInputFile">
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
            <button type="submit" class="btn btn-primary">Yeni Ekle</button>
        </div>
    </form>
    @endsection

@push('customCss')

    @endpush

@push('customJs')

    @endpush