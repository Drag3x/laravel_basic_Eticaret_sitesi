@extends('backend_layout')

@section('title')
    Kategori Ekleme
    @endsection

@section('breadcrumbs')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Yeni Kategori Ekle</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.kategori') }}">Kategoriler</a></li>
                <li class="breadcrumb-item active">Kategori Ekle</li>
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
    <form action="{{ route("admin.kategori.kategorieklepost") }}" method="POST">
        @Csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Ürün Kategorisi</label>
            <select name="parent_id" class="form-control">
                <option value="0">Anakategori</option>
                @foreach($mainkategori as $keys)
                <option value="{{ $keys->id }}">{{ $keys->kategori_ad }}</option>
                @endforeach
            </select>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Kategori Adı</label>
                <input type="text" name="kategori_ad" class="form-control" id="exampleInputEmail1" placeholder="Kategori İsmi">
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