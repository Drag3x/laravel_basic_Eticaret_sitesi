@extends('backend_layout')

@section('title')
    SSS Ekleme
    @endsection

@section('breadcrumbs')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Yeni sss Ekle</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.sss') }}">Sık sorular Bölümü</a></li>
                <li class="breadcrumb-item active">SSS Ekle</li>
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
    <form action="{{ route("admin.sss.ssseklePost") }}" method="POST">
        @Csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">SSS Başlık</label>
                <input type="text" name="sss_baslik" class="form-control" id="exampleInputEmail1" placeholder="sss İsmi">
            </div>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">İçerik</label>
            <textarea name="sss_icerik" class="form-control" rows="3" placeholder="Enter ..."></textarea>
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