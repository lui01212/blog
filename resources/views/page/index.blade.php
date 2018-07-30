@extends('layouts.masterPage')

@section('content')
<div class="container-fluid">
    <div class="row" id="story-hot">
        <div class="col-md-10 col-md-offset-1">
            <!-- Badges -->
            <div class="block-header block-header-custum">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-7 col-xs-7">
                        <h2><i class="material-icons">whatshot</i>TRUYỆN HOT</h2>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 col-md-offset-6  col-lg-offset-6">
                        <select class="form-control">
                            @foreach($storyType as $type)
                                <option value="{{$type ->type_name_link}}">{{$type->type_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-0 col-sm-0 col-xs-0 m-t-5">
                <div class="list-group  list-group-custum">
                    @foreach($storyType as $key => $type)
                        @if($key == 12) 
                          @break;
                        @endif
                        <a href="javascript:void(0);" class="list-group-item">{{$type ->type_name}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="row col-xs-0">
                    <div class="card-carousel">
                        @foreach($stories as $key => $story)
                            @if($key == 7)
                                @break;
                            @endif
                        <div class="my-card">
                            <img src="{{asset('images/' . $story ->story_image )}}" />
                            <div class="my-card-content">
                                <p>{{$story ->story_name}}</p>
                                <a href="javascript:void(0);" class="btn bg-pink btn-block btn-xs waves-effect">Đọc<span class="badge">99k+</span></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button type="button" class="btn btn-default btn-circle bnt-prev waves-effect waves-circle waves-float">
                        <i class="material-icons">navigate_before</i>
                    </button>
                    <button type="button" class="btn btn-default btn-circle bnt-next waves-effect waves-circle waves-float">
                        <i class="material-icons">navigate_next</i>
                    </button>
                </div>

                <div class="row">
                    @foreach($stories as $key => $story)
                        @if($key < 7)
                            @continue;
                        @endif
                    <div class="column col-lg-2 col-md-2 col-sm-4 col-xs-4  m-t-25">
                        <img class="hover-shadow" src="{{asset('images/' . $story ->story_image )}}" style="width: 100%" />
                        <div class="top-right"><span class="badge bg-pink">New</span></div>
                        <div class="column-contents">
                            <h6 class="text-nowrap">{{$story->story_name}}</h6>
                            <h6 class="col-teal">{{$story->story_sum_chapter}} chương</h6>
                        </div>
                        <a href="javascript:void(0);" class="btn bg-pink btn-block btn-xs waves-effect">Đọc<span class="badge">99k+</span></a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-2 col-md-0 col-sm-0 col-xs-0 m-t-5">
                <div class="list-group list-group-custum">
                    @foreach($storyType as $key => $type)
                        @if($key < 12 || $key > 23) 
                          @continue;
                        @endif
                        <a href="javascript:void(0);" class="list-group-item">{{$type ->type_name}}</a>
                    @endforeach
                </div>
            </div>
            <!-- #END# Badges -->
        </div>
    </div>
    <div class="row m-t-85">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="block-header block-header-custum">
                        <h2>TRUYỆN MỚI CẬP NHẬT</h2>
                    </div>
                    <div class="row row-list-item">

                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-9">
                            <span class="glyphicon glyphicon-chevron-right"></span><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-0">
                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                            <a href="http://truyenfull.vn/toi-ten-la-ark/quyen-5-chuong-5-2/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất - Quyển 5 Chương 5-2"><span class="book-text"><span>Quyển </span></span>5 - <span class="chapter-text"><span>Chương </span></span>5-2</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0">
                            5 giờ trước 
                        </div>
                    </div>
                    <div class="row row-list-item">

                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-9">
                            <span class="glyphicon glyphicon-chevron-right"></span><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-0">
                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                            <a href="http://truyenfull.vn/toi-ten-la-ark/quyen-5-chuong-5-2/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất - Quyển 5 Chương 5-2"><span class="book-text"><span>Quyển </span></span>5 - <span class="chapter-text"><span>Chương </span></span>5-2</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0">
                            5 giờ trước 
                        </div>
                    </div>
                    <div class="row row-list-item">

                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-9">
                            <span class="glyphicon glyphicon-chevron-right"></span><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-0">
                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                            <a href="http://truyenfull.vn/toi-ten-la-ark/quyen-5-chuong-5-2/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất - Quyển 5 Chương 5-2"><span class="book-text"><span>Quyển </span></span>5 - <span class="chapter-text"><span>Chương </span></span>5-2</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0">
                            5 giờ trước 
                        </div>
                    </div>
                    <div class="row row-list-item">

                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-9">
                            <span class="glyphicon glyphicon-chevron-right"></span><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-0">
                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                            <a href="http://truyenfull.vn/toi-ten-la-ark/quyen-5-chuong-5-2/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất - Quyển 5 Chương 5-2"><span class="book-text"><span>Quyển </span></span>5 - <span class="chapter-text"><span>Chương </span></span>5-2</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0">
                            5 giờ trước 
                        </div>
                    </div>
                    <div class="row row-list-item">

                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-9">
                            <span class="glyphicon glyphicon-chevron-right"></span><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-0">
                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                            <a href="http://truyenfull.vn/toi-ten-la-ark/quyen-5-chuong-5-2/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất - Quyển 5 Chương 5-2"><span class="book-text"><span>Quyển </span></span>5 - <span class="chapter-text"><span>Chương </span></span>5-2</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0">
                            5 giờ trước 
                        </div>
                    </div>
                    <div class="row row-list-item">

                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-9">
                            <span class="glyphicon glyphicon-chevron-right"></span><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-0">
                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                            <a href="http://truyenfull.vn/toi-ten-la-ark/quyen-5-chuong-5-2/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất - Quyển 5 Chương 5-2"><span class="book-text"><span>Quyển </span></span>5 - <span class="chapter-text"><span>Chương </span></span>5-2</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0">
                            5 giờ trước 
                        </div>
                    </div>
                    <div class="row row-list-item">

                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-9">
                            <span class="glyphicon glyphicon-chevron-right"></span><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-0">
                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                            <a href="http://truyenfull.vn/toi-ten-la-ark/quyen-5-chuong-5-2/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất - Quyển 5 Chương 5-2"><span class="book-text"><span>Quyển </span></span>5 - <span class="chapter-text"><span>Chương </span></span>5-2</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0">
                            5 giờ trước 
                        </div>
                    </div>
                    <div class="row row-list-item">

                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-9">
                            <span class="glyphicon glyphicon-chevron-right"></span><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-0">
                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                            <a href="http://truyenfull.vn/toi-ten-la-ark/quyen-5-chuong-5-2/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất - Quyển 5 Chương 5-2"><span class="book-text"><span>Quyển </span></span>5 - <span class="chapter-text"><span>Chương </span></span>5-2</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0">
                            5 giờ trước 
                        </div>
                    </div>
                    <div class="row row-list-item">

                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-9">
                            <span class="glyphicon glyphicon-chevron-right"></span><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-0">
                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                            <a href="http://truyenfull.vn/toi-ten-la-ark/quyen-5-chuong-5-2/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất - Quyển 5 Chương 5-2"><span class="book-text"><span>Quyển </span></span>5 - <span class="chapter-text"><span>Chương </span></span>5-2</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0">
                            5 giờ trước 
                        </div>
                    </div>
                    <div class="row row-list-item">

                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-9">
                            <span class="glyphicon glyphicon-chevron-right"></span><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-0">
                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                            <a href="http://truyenfull.vn/toi-ten-la-ark/quyen-5-chuong-5-2/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất - Quyển 5 Chương 5-2"><span class="book-text"><span>Quyển </span></span>5 - <span class="chapter-text"><span>Chương </span></span>5-2</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0">
                            5 giờ trước 
                        </div>
                    </div>
                    <div class="row row-list-item">

                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-9">
                            <span class="glyphicon glyphicon-chevron-right"></span><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-0">
                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                            <a href="http://truyenfull.vn/toi-ten-la-ark/quyen-5-chuong-5-2/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất - Quyển 5 Chương 5-2"><span class="book-text"><span>Quyển </span></span>5 - <span class="chapter-text"><span>Chương </span></span>5-2</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0">
                            5 giờ trước 
                        </div>
                    </div>
                    <div class="row row-list-item">

                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-9">
                            <span class="glyphicon glyphicon-chevron-right"></span><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-0">
                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                            <a href="http://truyenfull.vn/toi-ten-la-ark/quyen-5-chuong-5-2/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất - Quyển 5 Chương 5-2"><span class="book-text"><span>Quyển </span></span>5 - <span class="chapter-text"><span>Chương </span></span>5-2</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0">
                            5 giờ trước 
                        </div>
                    </div>
                    <div class="row row-list-item">

                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-9">
                            <span class="glyphicon glyphicon-chevron-right"></span><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-0">
                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                            <a href="http://truyenfull.vn/toi-ten-la-ark/quyen-5-chuong-5-2/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất - Quyển 5 Chương 5-2"><span class="book-text"><span>Quyển </span></span>5 - <span class="chapter-text"><span>Chương </span></span>5-2</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0">
                            5 giờ trước 
                        </div>
                    </div>
                    <div class="row row-list-item">

                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-9">
                            <span class="glyphicon glyphicon-chevron-right"></span><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-0">
                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                            <a href="http://truyenfull.vn/toi-ten-la-ark/quyen-5-chuong-5-2/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất - Quyển 5 Chương 5-2"><span class="book-text"><span>Quyển </span></span>5 - <span class="chapter-text"><span>Chương </span></span>5-2</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0">
                            5 giờ trước 
                        </div>
                    </div>
                    <div class="row row-list-item">

                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-9">
                            <span class="glyphicon glyphicon-chevron-right"></span><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-0">
                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                            <a href="http://truyenfull.vn/toi-ten-la-ark/quyen-5-chuong-5-2/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất - Quyển 5 Chương 5-2"><span class="book-text"><span>Quyển </span></span>5 - <span class="chapter-text"><span>Chương </span></span>5-2</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0">
                            5 giờ trước 
                        </div>
                    </div>
                    <div class="row row-list-item">

                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-9">
                            <span class="glyphicon glyphicon-chevron-right"></span><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-0">
                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3">
                            <a href="http://truyenfull.vn/toi-ten-la-ark/quyen-5-chuong-5-2/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất - Quyển 5 Chương 5-2"><span class="book-text"><span>Quyển </span></span>5 - <span class="chapter-text"><span>Chương </span></span>5-2</a>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-0 col-xs-0">
                            5 giờ trước 
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <!-- hot For Sidebars -->
                    @include('page.custumPage.hotSidebar')
                    <!-- #END# hot For Sidebars -->
                </div>
            </div>
        </div>
    </div>
    <div class="row m-t-50">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="row p-r-25 p-l-25 block">
                        <div class="block-header block-header-custum">
                            <h2>TRUYỆN ĐÃ HOÀN THÀNH</h2>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-pink btn-circle waves-effect waves-circle waves-float">1</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float">2</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 p-l-15 p-r-15">
                    <div class="row p-r-25 p-l-25 block">
                        <div class="block-header block-header-custum">
                            <h2>TRUYỆN MỚI ĐĂNG</h2>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-pink btn-circle waves-effect waves-circle waves-float">1</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float">2</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 p-l-15 p-r-15">
                    <div class="row p-r-25 p-l-25 block">
                        <div class="block-header block-header-custum">
                            <h2>TRUYỆN BTV ĐỀ CỬ</h2>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-pink btn-circle waves-effect waves-circle waves-float">1</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float">2</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                        <div class="row row-list-item">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <button type="button" class="btn bg-teal btn-circle waves-effect waves-circle waves-float">3</button><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                1222k
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- #END# Content -->

<!-- Custom Js -->
@section('customJs')
<script src="{{ asset('js/index.js') }}"></script>
@endsection
<!-- #END# Custom Js -->
