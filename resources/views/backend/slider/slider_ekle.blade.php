@extends('backend_layout')

@section('title')
    Slider Ekleme
    @endsection

@section('breadcrumbs')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Yeni Slider Ekle</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.slider') }}">Slider</a></li>
                <li class="breadcrumb-item active">Yeni Slider Ekle</li>
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
    <form action="{{ route("admin.slider.sliderEklePost") }}" enctype="multipart/form-data" method="POST">
        @Csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Slider Başlık</label>
                <input type="text" name="slider_baslik" class="form-control" id="exampleInputEmail1" placeholder="Slider Başlık">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">İçerik</label>
                <textarea name="slider_icerik" class="form-control" rows="3" placeholder="Enter ..."></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Resim</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input name="slider_resim" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Slider Btn</label>
                <input type="text" name="slider_btn" class="form-control" id="exampleInputEmail1" placeholder="Slider Button">
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