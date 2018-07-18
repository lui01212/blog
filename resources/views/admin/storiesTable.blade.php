@extends('layouts.masterAdmin')

<!-- Custom Css Js-->
@section('customCssJs')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!-- JQuery DataTable Css -->
<link href="{{ asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endsection
<!-- #END# Custom Css Js -->

<!-- Content -->
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <a href="{{ route('storiesmaster.create') }}" class="btn btn-success waves-effect">
            <i class="material-icons">add</i>
            <span>THÊM TRUYỆN</span>
        </a>
    </div>
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        TRUYỆN
                    </h2>
                </div>
                <div class="body">
                    <div class="body table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Tên Truyện</th>
                                    <th>Ảnh Đại Diện</th>
                                    <th>Tác Giả</th>
                                    <th>Nguồn</th>
                                    <th>Loại Truyện</th>
                                    <th>Số Chương</th>
                                    <th>Lược Xem</th>
                                    <th>Đánh Giá</th>
                                    <th>Trạng Thái</th>
                                    <th>Tính Phí</th>
                                    <th>Flag</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($stores as $story)
                                <tr>
                                    <td>{{$story ->story_name}}</td>
                                    <td>
                                        <img src="" width="120" height="120">
                                    </td>
                                    <td>{{$story ->author_name}}</td>
                                    <td>{{$story ->story_source}}</td>
                                    <td>{{$story ->story_type}}</td>
                                    <td>{{$story ->story_sum_chapter}}</td>
                                    <td>{{$story ->story_view}}</td>
                                    <td>
                                        {{$story ->story_rating . __(' *')}}
                                    </td>
                                    <td>
                                        @if($story ->story_status == 1)
                                        {{__('Hoàn Thành')}}
                                        @else
                                        {{__('Đang Ra')}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($story ->story_price == 1)
                                        {{__('Có Phí')}}
                                        @else
                                        {{__('Không Phí')}}
                                        @endif
                                    </td>
                                    <td>
                                        @if($story ->flag == 1)
                                        {{__('true')}}
                                        @else
                                        {{__('false')}}
                                        @endif
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Examples -->
</div>
@endsection
<!-- #END# Content -->

<!-- Custom Js -->
@section('customJs')
<!-- Jquery DataTable Plugin Js -->
<script src="{{ asset('plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
<script src="{{ asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
<!-- #END - Jquery DataTable Plugin Js -->
<script src="{{ asset('js/admin.js') }}"></script>
<script src="{{ asset('js/pages/tables/jquery-datatable.js') }}"></script>
@endsection
<!-- #END# Custom Js -->
