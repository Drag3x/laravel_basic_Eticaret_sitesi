@extends('backend_layout')

@section('title')
    Referans Ekleme
    @endsection

@section('breadcrumbs')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Yeni Referans Ekleme Bölümü</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.referanslar') }}">Referanslar</a></li>
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
    <form action="{{ route("admin.referanslar.referansEklePost") }}" enctype="multipart/form-data" method="POST">
        @Csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Referans Adı</label>
                <input type="text" name="referans_ad" class="form-control" id="exampleInputEmail1" placeholder="Referans İsmi">
            </div>

            <div class="form-group">
                <label for="exampleInputFile">Referans Resim</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input name="referans_resim" type="file" class="custom-file-input" id="exampleInputFile">
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