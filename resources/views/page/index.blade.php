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
                            <option>Tiên Hiệp</option>
                            <option>Huyền Huyễn</option>
                            <option>Đô Thị</option>
                            <option>Võng Du</option>
                            <option>Trọng Sinh</option>
                            <option>Khoa Huyễn</option>
                            <option>Đam Mỹ</option>
                            <option>Tuyện Teen</option>
                            <option>Sắc Hiệp</option>
                            <option>Hài Hước</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-0 col-sm-0 col-xs-0 m-t-5">
                <div class="list-group  list-group-custum">
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
                            <img src="http://truyencv.com/images/poster/toi-cuong-trang-buc-da-kiem-he-thong-poster-1518975314-220x330.jpg" />
                            <div class="my-card-content">
                                <p>Tối Cường Trang Bức Đả Kiểm Hệ Thống</p>
                                <a href="javascript:void(0);" class="btn bg-pink btn-block btn-xs waves-effect">Đọc<span class="badge">99k+</span></a>
                            </div>
                        </div>
                        <div class="my-card">
                            <img src="http://truyencv.com/images/poster/vo-han-phuc-loi-than-hao-poster-1529331181-200x300.jpg" />
                            <div class="my-card-content">
                                <p>Vô Hạn Phúc Lợi Thần Hào</p>
                                <a href="javascript:void(0);" class="btn bg-pink btn-block btn-xs waves-effect">Đọc<span class="badge">99k+</span></a>
                            </div>
                        </div>
                        <div class="my-card">
                            <img src="http://truyencv.com/images/poster/trong-chinh-mat-the-poster-1518518734-200x300.jpg" />
                            <div class="my-card-content">
                                <p>Vô Hạn Phúc Lợi Thần Hào</p>
                                <a href="javascript:void(0);" class="btn bg-pink btn-block btn-xs waves-effect">Đọc
                                        <span class="badge">99k+</span></a>
                            </div>
                        </div>
                        <div class="my-card">
                            <img src="http://truyencv.com/images/poster/vong-du-tan-the-toan-cau-poster-1523513200-200x300.jpg" />
                            <div class="my-card-content">
                                <p>Vô Hạn Phúc Lợi Thần Hào</p>
                                <a href="javascript:void(0);" class="btn bg-pink btn-block btn-xs waves-effect">Đọc<span class="badge">99k+</span></a>
                            </div>
                        </div>
                        <div class="my-card">
                            <img src="http://truyencv.com/images/poster/kinh-thien-kiem-de-poster-1530800289-200x300.jpg" />
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
                            <img src="http://truyencv.com/images/poster/toi-cuong-than-thoai-de-hoang-poster-20170228-200x300.jpg" />
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
                <div class="list-group list-group-custum">
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
    <div class="row m-t-85">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
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
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                    <div class="block-header block-header-custum">
                        <h2>TRUYỆN ĐANG HOT</h2>
                    </div>
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs tab-col-teal" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#profile_md_col_3" data-toggle="tab">TUẦN</a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages_md_col_3" data-toggle="tab">THÁNG</a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages_animation_1" data-toggle="tab">ALL TIME</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane animated flipInX active" id="profile_md_col_3">
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/than-dao-dan-ton-poster-20161018-220x330.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="https://www.nae.vn/ttv/ttv/public/images/story/90cfd93e1e636628ca515cbe239effdaa44724df7bff46f3135f29c2b227f9f5.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/huyen-huyen-chi-hoang-co-cam-dia-poster-1532529191-230x343.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/sieu-viet-tai-chinh-poster-1520127968-230x343.png" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="https://www.nae.vn/ttv/ttv/public/images/story/190.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/than-dao-dan-ton-poster-20161018-220x330.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/than-dao-dan-ton-poster-20161018-220x330.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/than-dao-dan-ton-poster-20161018-220x330.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/than-dao-dan-ton-poster-20161018-220x330.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/than-dao-dan-ton-poster-20161018-220x330.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane animated flipInX" id="messages_md_col_3">
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/than-dao-dan-ton-poster-20161018-220x330.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="https://www.nae.vn/ttv/ttv/public/images/story/90cfd93e1e636628ca515cbe239effdaa44724df7bff46f3135f29c2b227f9f5.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/huyen-huyen-chi-hoang-co-cam-dia-poster-1532529191-230x343.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/sieu-viet-tai-chinh-poster-1520127968-230x343.png" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="https://www.nae.vn/ttv/ttv/public/images/story/190.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/than-dao-dan-ton-poster-20161018-220x330.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/than-dao-dan-ton-poster-20161018-220x330.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/than-dao-dan-ton-poster-20161018-220x330.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/than-dao-dan-ton-poster-20161018-220x330.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/than-dao-dan-ton-poster-20161018-220x330.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane animated flipInX" id="messages_animation_1">
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/than-dao-dan-ton-poster-20161018-220x330.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="https://www.nae.vn/ttv/ttv/public/images/story/90cfd93e1e636628ca515cbe239effdaa44724df7bff46f3135f29c2b227f9f5.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/huyen-huyen-chi-hoang-co-cam-dia-poster-1532529191-230x343.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/sieu-viet-tai-chinh-poster-1520127968-230x343.png" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="https://www.nae.vn/ttv/ttv/public/images/story/190.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/than-dao-dan-ton-poster-20161018-220x330.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/than-dao-dan-ton-poster-20161018-220x330.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/than-dao-dan-ton-poster-20161018-220x330.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/than-dao-dan-ton-poster-20161018-220x330.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                    <div class="media media-custum">
                                        <div class="media-left">
                                            <a href="javascript:void(0);">
                                                <img class="media-object" src="http://truyencv.com/images/poster/than-dao-dan-ton-poster-20161018-220x330.jpg" width="40" height="40">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading text-truncate"><a href="http://truyenfull.vn/toi-ten-la-ark/" title="Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất">Tết Thiếu Nhi Của Sơ Tam Và Lục Nhất</a></h4>
                                            <a itemprop="genre" href="http://truyenfull.vn/the-loai/do-thi/" title="Đô Thị">Đô Thị</a>, <a itemprop="genre" href="http://truyenfull.vn/the-loai/vong-du/" title="Võng Du">Võng Du</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
<div class="container-fluid footer m-t-25">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 align-center m-t-25">
            <div class="row">
                <div class="col-md-6 col-md-offset-1">
                    <p class="align-left">
                        <b>Giới Thiệu</b>
                    </p>
                    <div class="align-left">
                        Truyện Tiên Hiệp Full - Đọc truyện online, đọc truyện chữ, truyện hay. Website luôn cập nhật những bộ truyện mới thuộc các thể loại đặc sắc như truyện tiên hiệp, truyện kiếm hiệp, hay truyện ngôn tình một cách nhanh nhất. Hỗ trợ mọi thiết bị như di động và máy tính bảng.
                    </div>
                </div>
                <div class="col-md-5">
                    <p class="align-left">
                        <b>Liên Hệ Quảng Cáo</b>
                    </p>
                    <div class="align-left">
                        <i class="material-icons">email</i><span class="icon-name">truyentienhiepfull@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="legal m-t-30">
                <div class="copyright">
                    &copy; 2018 <a href="javascript:void(0);">Admin - TruyenTienHiepFull</a>.
                </div>
                <div class="version">
                    <b>Version: </b>1.0.0
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
