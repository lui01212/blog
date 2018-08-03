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
                <a class="truyen-title" href="{{route('storydetailpage.index',['story'=>$chapter ->story_name_link])}}" title="Thực Nhân Hoa"><h2 class="col-teal">{{$chapter ->story_name}}</h2></a>
            </div>
            <div class="align-center">
                <span class="chapter-text">{{$chapter ->chapter_name}} </span>
            </div>
            <div class="align-center m-t-10">
                <a @if($chapterPrev->chapter_name_link !=null) href="{{route('chapterpage.index',['story_name_link'=>$chapterPrev ->story_name_link,'chapter_name_link'=>$chapterPrev ->chapter_name_link])}}" @endif class="btn bg-pink waves-effect" @if($chapterPrev->chapter_name_link == null) disabled="disabled" @endif>
                    <i class="material-icons">navigate_before</i>
                    <span>TRƯỚC</span>
                </a>
                <button type="button" class="btn bg-pink waves-effect" data-toggle="modal" data-target="#defaultModal">
                                    <i class="material-icons">settings</i>
                                </button>
                <a @if($chapterNext->chapter_name_link !=null) href="{{route('chapterpage.index',['story_name_link'=>$chapterNext ->story_name_link,'chapter_name_link'=>$chapterNext ->chapter_name_link])}}" @endif class="btn bg-pink waves-effect" @if($chapterNext->chapter_name_link == null) disabled="disabled" @endif >
                    <span>SAU</span><i class="material-icons">navigate_next</i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container m-t-50">
    <div class="row custum-width" style="margin: 0 auto;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-r-10 p-l-0">
            <div class="content-chapter font-24 align-justify">
                       {!!$chapter ->chapter_content!!}
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-l-30 p-r-30">
            <div class="align-center m-t-10">
                <a @if($chapterPrev->chapter_name_link !=null) href="{{route('chapterpage.index',['story_name_link'=>$chapterPrev ->story_name_link,'chapter_name_link'=>$chapterPrev ->chapter_name_link])}}" @endif class="btn bg-pink waves-effect" @if($chapterPrev->chapter_name_link == null) disabled="disabled" @endif>
                    <i class="material-icons">navigate_before</i>
                    <span>TRƯỚC</span>
                </a>
                <button type="button" class="btn bg-pink waves-effect" data-toggle="modal" data-target="#defaultModal">
                                    <i class="material-icons">settings</i>
                                </button>
                <a @if($chapterNext->chapter_name_link !=null) href="{{route('chapterpage.index',['story_name_link'=>$chapterNext ->story_name_link,'chapter_name_link'=>$chapterNext ->chapter_name_link])}}" @endif class="btn bg-pink waves-effect" @if($chapterNext->chapter_name_link == null) disabled="disabled" @endif >
                    <span>SAU</span><i class="material-icons">navigate_next</i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Default Size -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Cài Đặt Giao Diện</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <label>Màu Nền</label>
                        <div class="form-group demo-radio-button">
                            <input name="group" type="radio" id="radio_1" class="radio-col-red" checked />
                            <label for="radio_1">RED</label>
                            <input name="group" type="radio" id="radio_2" class="radio-col-pink" />
                            <label for="radio_2">PINK</label>
                            <input name="group" type="radio" id="radio_3" class="radio-col-purple" />
                            <label for="radio_3">PURPLE</label>
                            <input name="group" type="radio" id="radio_4" class="radio-col-deep-purple" />
                            <label for="radio_4">DEEP PURPLE</label>
                            <input name="group" type="radio" id="radio_5" class="radio-col-indigo" />
                            <label for="radio_5">INDIGO</label>
                            <input name="group" type="radio" id="radio_6" class="radio-col-blue" />
                            <label for="radio_6">BLUE</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="col-md-4">Cỡ Chữ</label>
                        <div class="btn-group m-l-15 group-size" role="group">
                            <button type="button" class="btn bg-teal waves-effect" onclick="if($('.btn-text-size').text() > 10){$.cookie('csize',Number($('.btn-text-size').text()) - 1);$('.btn-text-size').text(Number($('.btn-text-size').text()) - 1);}"><i class="material-icons">remove</i></button>
                            <button type="button" class="btn btn-default waves-effect" style="width: 100px; height:37px;"><span class="btn-text-size">24</span></button>
                            <button type="button" class="btn bg-teal waves-effect" onclick="if($('.btn-text-size').text()<30){$.cookie('csize',Number($('.btn-text-size').text())+1);$('.btn-text-size').text(Number($('.btn-text-size').text()) + 1);}"><i class="material-icons">add</i></button>
                        </div>
                    </div>
                    <div class="col-md-12 m-t-20">
                        <label class="col-md-4">Chiều rộng Khung</label>
                        <div class="btn-group m-l-15 group-framesize" role="group">
                            <button type="button" class="btn bg-teal waves-effect" onclick="if($('.btn-text-framesize').text()>50){$.cookie('cfull',Number($('.btn-text-framesize').text())-10);$('.btn-text-framesize').text(Number($('.btn-text-framesize').text()) - 10);}"><i class="material-icons">remove</i></button>
                            <button type="button" class="btn btn-default waves-effect" style="width: 100px; height:37px;"><span class="btn-text-framesize">100</span>%</button>
                            <button type="button" class="btn bg-teal waves-effect" onclick="if($('.btn-text-framesize').text()<100){$.cookie('cfull',Number($('.btn-text-framesize').text())+10);$('.btn-text-framesize').text(Number($('.btn-text-framesize').text()) + 10);}"><i class="material-icons">add</i></button>
                        </div>
                    </div>
                    <div class="col-md-12 m-t-20">
                        <label class="col-md-4">Dãn Dòng</label>
                        <div class="btn-group m-l-15 group-lineheight" role="group">
                            <button type="button" class="btn bg-teal waves-effect" onclick="if($('.btn-text-lineheight').text()>100){$.cookie('cline',Number($('.btn-text-lineheight').text())-10);$('.btn-text-lineheight').text(Number($('.btn-text-lineheight').text()) - 10);}"><i class="material-icons">remove</i></button>
                            <button type="button" class="btn btn-default waves-effect" style="width: 100px; height:37px;"><span class="btn-text-lineheight">100</span>%</button>
                            <button type="button" class="btn bg-teal waves-effect" onclick="if($('.btn-text-lineheight').text()<200){$.cookie('cline',Number($('.btn-text-lineheight').text())+10);$('.btn-text-lineheight').text(Number($('.btn-text-lineheight').text()) + 10);}"><i class="material-icons" >add</i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect">Lưu Thay Đổi</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- #END# Content -->

<!-- Custom Js -->
@section('customJs')
<script src="{{ asset('plugins/jquery-cookie/jquery.cookie.js') }}"></script>
@endsection
<!-- #END# Custom Js -->
