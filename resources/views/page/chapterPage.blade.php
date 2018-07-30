@extends('layouts.masterPage')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-l-30 p-r-30">
            <div class="align-center">
                <a class="truyen-title" href="http://truyenfull.vn/thuc-nhan-hoa/" title="Thực Nhân Hoa"><h2>{{$chapter ->story_name}}</h2></a>
            </div>
            <div class="align-center">
                <span class="chapter-text">{{$chapter ->chapter_name}} </span>
            </div>
            <div class="align-center m-t-10">
                <button type="button" class="btn bg-pink waves-effect">
                    <i class="material-icons">navigate_before</i>
                    <span>TRƯỚC</span>
                </button>
                <button type="button" class="btn bg-pink waves-effect">
                                    <i class="material-icons">settings</i>
                                </button>
                <button type="button" class="btn bg-pink waves-effect">
                    <i class="material-icons">navigate_next</i>
                    <span>SAU</span>
                </button>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-l-30 p-r-30">
            <div class="content-chapter font-24">
                       {!!$chapter ->chapter_content!!}
            </div>
        </div>
    </div>
</div>
@endsection
<!-- #END# Content -->

<!-- Custom Js -->
@section('customJs')
<!-- <script src="{{ asset('js/index.js') }}"></script> -->
@endsection
<!-- #END# Custom Js -->
