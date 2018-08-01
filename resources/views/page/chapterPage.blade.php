@extends('layouts.masterPage')

@section('breadcrumb')
<div class="row clearfix" style="margin: 80px 0 0 0;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ol class="breadcrumb align-center">
            <li><a href="{{ url('/') }}"><i class="material-icons">home</i> Home</a></li>
            <li><a href="{{route('storydetailpage.index',['story'=>$chapter ->story_name_link])}}"><i class="material-icons">library_books</i>{{$chapter ->story_name}}</a></li>
            <li><a href="javascript:void(0);" class="active"><i class="material-icons">archive</i>{{$chapter ->chapter_name}}</a></li>
        </ol>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-l-30 p-r-30">
            <div class="align-center">
                <a class="truyen-title" href="{{route('storydetailpage.index',['story'=>$chapter ->story_name_link])}}" title="Thực Nhân Hoa"><h2>{{$chapter ->story_name}}</h2></a>
            </div>
            <div class="align-center">
                <span class="chapter-text">{{$chapter ->chapter_name}} </span>
            </div>
            <div class="align-center m-t-10">
                <a @if($chapterPrev->chapter_name_link !=null) href="{{route('chapterpage.index',['story_name_link'=>$chapterPrev ->story_name_link,'chapter_name_link'=>$chapterPrev ->chapter_name_link])}}" @endif class="btn bg-pink waves-effect" @if($chapterPrev->chapter_name_link == null) disabled="disabled" @endif>
                    <i class="material-icons">navigate_before</i>
                    <span>TRƯỚC</span>
                </a>
                <button type="button" class="btn bg-pink waves-effect">
                                    <i class="material-icons">settings</i>
                                </button>
                <a @if($chapterNext->chapter_name_link !=null) href="{{route('chapterpage.index',['story_name_link'=>$chapterNext ->story_name_link,'chapter_name_link'=>$chapterNext ->chapter_name_link])}}" @endif class="btn bg-pink waves-effect" @if($chapterNext->chapter_name_link == null) disabled="disabled" @endif >
                    <span>SAU</span><i class="material-icons">navigate_next</i>
                </a>
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
