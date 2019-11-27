@extends('Kozmo.main')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Kategori <small>Düzenleme</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <form role="form" class="form-horizontal form-label-left" action="{{route('Kozmo.category.edit', $category[0]->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <h2>Yeni Üst Kategori</h2>
                            <div class="col-sm-12">
                                <select name="up_category_id" class="form-control" disabled>
                                    <option value = "{{$varsayilan->id}}">{{$varsayilan->title}}</option>
                                    @foreach($category as $item)
                                        <option value = "{{$item->id}}">{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Yeni Başlık</h2>
                            <div class="col-sm-12">
                                <select name="title" class="form-control">
                                    @foreach($category as $item)
                                        <option value = "{{$item->id}}">{{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success">Edit/Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
