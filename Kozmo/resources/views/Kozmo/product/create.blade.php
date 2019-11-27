@extends('Kozmo.main')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3> Ürün <small>Ekle</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <form class="form-horizontal form-label-left" action="{{route('Kozmo.product.create_post')}}"
                          method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <h2>Üst Kategori Başlık</h2>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <select name="category_id" class="form-control">
                                    <option value="">---Kategori seç---</option>
                                    @foreach($upcategory as $item)
                                        <option value="{{$item->id}}">{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Ürün Başlık</h2>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title" name="title"
                                       placeholder="Yeni Başlık">
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Ürün Resim</h2>
                            <div class="col-sm-12">
                                <input type="file" class="form-control" id="image" name="image"
                                       placeholder="Yeni Resim">
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Ürün İçerik</h2>
                            <div class="col-sm-12">
                                <textarea id="summernote" name="content" class="summernote"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Ürün Fiyat</h2>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="price" name="price"
                                       placeholder="Yeni Başlık">
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Ürün İndirim</h2>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="discount" name="discount"
                                       placeholder="Yeni Başlık">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success">Kaydet</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('KZM/vendors/summernote/summernote.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('#summernote').summernote();
        });
    </script>
@endsection

@section('styles')
    <link href="{{asset('KZM/vendors/summernote/summernote.css')}}" rel="stylesheet" type="text/css">
@endsection

