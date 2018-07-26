@extends('layouts.masterPage')

@section('content')
<div class="container-fluid">
    <div class="row" id="story-hot">
        <div class="col-md-10 col-md-offset-1">
            <!-- Badges -->
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-7 col-xs-7">
                            <h2><i class="material-icons">whatshot</i>TRUYỆN HOT</h2>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-5 col-xs-5 col-md-offset-6  col-lg-offset-6">
                            <select class="form-control">
                                    <option >Tiên Hiệp</option>
                                    <option >Huyền Huyễn</option>
                                    <option >Đô Thị</option>
                                    <option >Võng Du</option>
                                    <option >Trọng Sinh</option>
                                    <option >Khoa Huyễn</option>
                                    <option >Đam Mỹ</option>
                                    <option >Tuyện Teen</option>
                                    <option >Sắc Hiệp</option>
                                    <option >Hài Hước</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-0 col-sm-0 col-xs-0 m-t-5">
                    <div class="list-group">
                        <a href="javascript:void(0);" class="list-group-item">Tiên Hiệp</a>
                        <a href="javascript:void(0);" class="list-group-item">Huyền Huyễn</a>
                        <a href="javascript:void(0);" class="list-group-item">Đô Thị</a>
                        <a href="javascript:void(0);" class="list-group-item">Võng Du</a>
                        <a href="javascript:void(0);" class="list-group-item">Trọng Sinh</a>
                        <a href="javascript:void(0);" class="list-group-item">Khoa Huyễn</a>
                        <a href="javascript:void(0);" class="list-group-item">Đam Mỹ</a>
                        <a href="javascript:void(0);" class="list-group-item">Tuyện Teen</a>
                        <a href="javascript:void(0);" class="list-group-item">Sắc Hiệp</a>
                        <a href="javascript:void(0);" class="list-group-item">Hài Hước</a>
                        <a href="javascript:void(0);" class="list-group-item">Hài Hước</a>

                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="row col-xs-0"> 
                        <div class="card-carousel">
                            <div class="my-card">
                                <img src="http://truyencv.com/images/poster/toi-cuong-trang-buc-da-kiem-he-thong-poster-1518975314-220x330.jpg"/>
                                  <div class="my-card-content">
                                    <p>Tối Cường Trang Bức Đả Kiểm Hệ Thống</p>
                                    <a href="javascript:void(0);" class="btn bg-pink btn-block btn-xs waves-effect">Đọc<span class="badge">99k+</span></a>
                                  </div>
                            </div>
                            <div class="my-card">
                                <img src="http://truyencv.com/images/poster/vo-han-phuc-loi-than-hao-poster-1529331181-200x300.jpg"/>
                                <div class="my-card-content">
                                    <p>Vô Hạn Phúc Lợi Thần Hào</p>
                                    <a href="javascript:void(0);" class="btn bg-pink btn-block btn-xs waves-effect">Đọc<span class="badge">99k+</span></a>
                                </div>
                            </div>
                            <div class="my-card">
                                <img  src="http://truyencv.com/images/poster/trong-chinh-mat-the-poster-1518518734-200x300.jpg"/>
                                <div class="my-card-content">
                                    <p>Vô Hạn Phúc Lợi Thần Hào</p>
                                    <a href="javascript:void(0);" class="btn bg-pink btn-block btn-xs waves-effect">Đọc
                                        <span class="badge">99k+</span></a>
                                </div>
                            </div>
                            <div class="my-card">
                                <img src="http://truyencv.com/images/poster/vong-du-tan-the-toan-cau-poster-1523513200-200x300.jpg"/>
                                <div class="my-card-content">
                                    <p>Vô Hạn Phúc Lợi Thần Hào</p>
                                    <a href="javascript:void(0);" class="btn bg-pink btn-block btn-xs waves-effect">Đọc<span class="badge">99k+</span></a>
                                </div>
                            </div>
                             <div class="my-card">
                                <img src="http://truyencv.com/images/poster/kinh-thien-kiem-de-poster-1530800289-200x300.jpg"/>
                                <div class="my-card-content">
                                    <p>Vô Hạn Phúc Lợi Thần Hào</p>
                                    <a href="javascript:void(0);" class="btn bg-pink btn-block btn-xs waves-effect">Đọc<span class="badge">99k+</span></a>
                                </div>
                            </div>
                            <div class="my-card">
                                <img src="http://truyencv.com/images/poster/phong-luu-chan-tien-poster-1515781874-200x300.jpg" />
                                <div class="my-card-content">
                                    <p>Vô Hạn Phúc Lợi Thần Hào</p>
                                    <a href="javascript:void(0);" class="btn bg-pink btn-block btn-xs waves-effect">Đọc<span class="badge">99k+</span></a>
                                </div>
                            </div>
                            <div class="my-card">
                                <img src="http://truyencv.com/images/poster/toi-cuong-than-thoai-de-hoang-poster-20170228-200x300.jpg"/>
                                <div class="my-card-content">
                                    <p>Vô Hạn Phúc Lợi Thần Hào</p>
                                    <a href="javascript:void(0);" class="btn bg-pink btn-block btn-xs waves-effect">Đọc<span class="badge">99k+</span></a>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-default btn-circle bnt-prev waves-effect waves-circle waves-float">
                            <i class="material-icons">navigate_before</i>
                        </button>
                        <button type="button" class="btn btn-default btn-circle bnt-next waves-effect waves-circle waves-float">
                            <i class="material-icons">navigate_next</i>
                        </button>
                    </div>

                    <div class="row"> 
                        <div class="column col-lg-2 col-md-2 col-sm-4 col-xs-4  m-t-25">
                            <img class="hover-shadow" src="http://truyencv.com/images/poster/the-gamer-he-thong-poster-20170720-220x330.jpg" style="width: 100%" />
                            <div class="top-right"><span class="badge bg-pink">New</span></div>
                            <div class="column-contents">
                                <h6 class="text-nowrap">The Gamer Hệ Thống</h6>
                                <h6 class="col-teal">1200 chương</h6>
                            </div>
                            <a href="javascript:void(0);" class="btn bg-pink btn-block btn-xs waves-effect">Đọc<span class="badge">99k+</span></a>
                        </div>
                        <div class="column col-lg-2 col-md-2 col-sm-4 col-xs-4  m-t-25">
                            <img class="hover-shadow" src="http://truyencv.com/images/poster/than-dao-dan-ton-poster-20161018-220x330.jpg" style="width: 100%" />
                            <div class="top-right"><span class="badge bg-pink">New</span></div>
                            <div class="column-contents">
                                <h6>Thần Đạo Đan Tôn</h6>
                                <h6 class="col-teal">1200 chương</h6>
                            </div>
                            <a href="javascript:void(0);" class="btn bg-pink btn-block btn-xs waves-effect">Đọc<span class="badge">99k+</span></a>
                        </div>
                        <div class="column col-lg-2 col-md-2 col-sm-4 col-xs-4  m-t-25">
                            <img class="hover-shadow" src="http://truyencv.com/images/poster/yeu-nghiet-tien-hoang-tai-do-thi-poster-1531740108-200x300.jpg" style="width: 100%" />
                            <div class="top-right"><span class="badge bg-pink">New</span></div>
                            <div class="column-contents">
                                <h6 class="text-truncate">Yêu Nghiệt Tiên Hoàng Tại Đô Thị</h6>
                                <h6 class="col-teal">1200 chương</h6>
                            </div>
                            <a href="javascript:void(0);" class="btn bg-pink btn-block btn-xs waves-effect">Đọc<span class="badge">99k+</span></a>
                        </div>
                        <div class="column col-lg-2 col-md-2 col-sm-4 col-xs-4  m-t-25">
                            <img class="hover-shadow" src="https://www.nae.vn/ttv/ttv/public/images/story/90cfd93e1e636628ca515cbe239effdaa44724df7bff46f3135f29c2b227f9f5.jpg" style="width: 100%" />
                            <div class="top-right"><span class="badge bg-pink">New</span></div>
                            <div class="column-contents">
                                <h6>Phàm Nhân Tu Tiên Chi Tiên Giới Thiên - 凡人修仙之仙界篇</h6>
                                <h6 class="col-teal">1200 chương</h6>
                            </div>
                            <a href="javascript:void(0);" class="btn bg-pink btn-block btn-xs waves-effect">Đọc<span class="badge">99k+</span></a>
                        </div>
                        <div class="column col-lg-2 col-md-2 col-sm-4 col-xs-4  m-t-25">
                            <img class="hover-shadow" src="https://www.nae.vn/ttv/ttv/public/images/story/102.jpg" style="width: 100%" />
                            <div class="top-right"><span class="badge bg-pink">New</span></div>
                            <div class="column-contents">
                                <h6>Tiên Lộ Xuân Thu</h6>
                                <h6 class="col-teal">1200 chương</h6>
                            </div>
                            <a href="javascript:void(0);" class="btn bg-pink btn-block btn-xs waves-effect">Đọc<span class="badge">99k+</span></a>
                        </div>
                        <div class="column col-lg-2 col-md-2 col-sm-4 col-xs-4  m-t-25">
                            <img class="hover-shadow" src="https://www.nae.vn/ttv/ttv/public/images/story/190.jpg" style="width: 100%" />
                            <div class="top-right"><span class="badge bg-pink">New</span></div>
                            <div class="column-contents">
                                <h6>Vạn Cổ Tiên Khung</h6>
                                <h6 class="col-teal">1200 chương</h6>
                            </div>
                            <a href="javascript:void(0);" class="btn bg-pink btn-block btn-xs waves-effect">Đọc<span class="badge">99k+</span></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 col-md-0 col-sm-0 col-xs-0 m-t-5">
                    <div class="list-group">
                        <a href="javascript:void(0);" class="list-group-item">Tiên Hiệp</a>
                        <a href="javascript:void(0);" class="list-group-item">Huyền Huyễn</a>
                        <a href="javascript:void(0);" class="list-group-item">Đô Thị</a>
                        <a href="javascript:void(0);" class="list-group-item">Võng Du</a>
                        <a href="javascript:void(0);" class="list-group-item">Trọng Sinh</a>
                        <a href="javascript:void(0);" class="list-group-item">Khoa Huyễn</a>
                        <a href="javascript:void(0);" class="list-group-item">Đam Mỹ</a>
                        <a href="javascript:void(0);" class="list-group-item">Tuyện Teen</a>
                        <a href="javascript:void(0);" class="list-group-item">Sắc Hiệp</a>
                        <a href="javascript:void(0);" class="list-group-item">Hài Hước</a>
                        <a href="javascript:void(0);" class="list-group-item">Hài Hước</a>
                    </div>
                </div>
            <!-- #END# Badges -->
       </div>
    </div>
     <div class="row m-t-50" style="height: 2000px;">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
               <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="block-header">
                        <h2>TRUYỆN ĐỀ CỬ</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="block-header">
                        <h2>TRUYỆN ĐANG HOT</h2>
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