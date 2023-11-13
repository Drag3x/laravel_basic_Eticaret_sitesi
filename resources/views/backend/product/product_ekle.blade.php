@extends('backend_layout')

@section('title')
    Ürün Ekleme
    @endsection

@section('breadcrumbs')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Yeni Ürün Ekle</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.product') }}">Ürün</a></li>
                <li class="breadcrumb-item active">Ürün Ekle</li>
            </ol>
        </div>
    </div>
    @endsection

@section('content')
    <form action="{{ route("admin.product.productEklePost") }}" enctype="multipart/form-data" method="POST">
        @Csrf

        <div class="card-body">

            <div class="form-group">
                <label for="exampleInputEmail1">Ürün Kategorisi</label>
                <select name="product_kat_id" class="form-control">
            @foreach ($categories as $category)

                {{ "Ana :".$category->kategori_ad }}<br>
                    <option value="">{{ $category->kategori_ad }}</option>
                @foreach ($subcategories as $subcategory)
                    @if ( $subcategory->parent_id == $category->id )
                            <option value="">---{{ $subcategory->kategori_ad }}</option>
                    @endif
                @endforeach
            @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Ürün İsmi</label>
                <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Ürün İsmi">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">İçerik</label>
                <textarea name="product_text" class="form-control" rows="3" placeholder="Enter ..."></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ürün Fiyati</label>
                <input type="text" name="product_money" class="form-control" id="exampleInputEmail1" placeholder="Ürün Fiyati">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Ürün Betseller</label>
                <select name="betseller" class="form-control">
                    <option value="0">Hayır</option>
                    <option value="1">Evet</option>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Ürün Çok satan</label>
                <select name="coksatan" class="form-control">
                    <option value="0">Hayır</option>
                    <option value="1">Evet</option>
                </select>
            </div>



            <div class="form-group">
                <label for="exampleInputFile">Resim</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input name="product_images" type="file" class="custom-file-input" id="exampleInputFile">
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