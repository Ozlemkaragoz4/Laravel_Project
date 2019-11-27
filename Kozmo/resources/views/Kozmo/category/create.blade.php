@extends('Kozmo.main')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3> Kategori <small>Ekle</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <form class="form-horizontal form-label-left" action="{{route('Kozmo.category.create')}}"
                          method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <h2>Üst Kategori Başlık</h2>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <select name="up_category_id" class="form-control">
                                    <option>---Kategori Seç---</option>
                                    @foreach($category as $up_category)
                                        <option value="{{$up_category->id}}">{{$up_category->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Kategori Başlık</h2>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="title" name="title"
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
@endsection()
