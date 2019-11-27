@extends('Kozmo.main')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Kategori <small>Listesi</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_content">
                        <!-- start project list -->
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 5%">ID</th>
                                <th style="width: 20%"> Üst Kategori Başlık</th>
                                <th style="width: 20%"> Başlık</th>
                                <th style="width: 10%">Oluşturulma Tarihi </th>
                                <th style="width: 10%">Güncellenme Tarihi </th>
                                <th style="width: 20%">Düzenleme</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($category as $key => $item)
                                <tr>
                                    <td style="width: 5%">{{$key + 1}}</td>
                                    <td style="width: 20%">
                                        @if(isset($item->up_category->title))
                                            <a>{{$item->up_category->title}}</a>
                                        @else
                                            <a style="color: #953b39">Kategori Bulunamadı</a>
                                        @endif

                                    </td>
                                    <td style="width: 20%">
                                        <a>{{$item->title}}</a>
                                    </td>
                                    <td style="width: 10%">
                                        <small>{{$item->created_at}}</small>
                                    </td>
                                    <td style="width: 10%">
                                        <small>{{$item->updated_at}}</small>
                                    </td>
                                    <td style="width: 15%">
                                        <a href="{{route('Kozmo.category.edit',$item->id)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                        <a href="{{route('Kozmo.category.remove',$item->id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o">></i> Delete </a>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
{{--                    {{ $category->links() }}--}}
                    <!-- end project list -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
