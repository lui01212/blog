@extends('layouts.masterAdmin')

<!-- Custom Css Js-->
@section('customCssJs')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!-- Bootstrap Select Css -->
<link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endsection
<!-- #END# Custom Css Js -->

<!-- Content -->
@section('content')
<div class="container-fluid">
    <div class="block-header">
	    <a href="{{ route('storiesmaster.index') }}" class="btn btn-success waves-effect">
	        <i class="material-icons">assignment_return</i>
	        <span>TRỞ VỀ LIST</span>
	    </a>
	</div>
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <form method="POST" action="{{ route('storiesmaster.store') }}">
            {{ csrf_field() }}
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                <div class="card">
                    <div class="thumbnail">
                        <div class="caption">
                            <h3>Ảnh Đại Diện</h3>
                        </div>
                        <img class="img-thumbnail" alt="194x284" src="http://placehold.it/194x284" style="width: 194px; height: 284px;">
                        <div class="caption">
                            <p>
                                <a onclick="event.preventDefault();
                                     document.getElementById('story_image').click();" class="btn btn-primary waves-effect" role="button">ADD</a>
                            </p>
                        </div>
                        <input type="file" name="story_image" class="form-control-file"  style="display: none;" id="story_image" onchange="OnJspSelectImage(this);">
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            THÊM TRUYỆN
                        </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">

                            <div class="col-md-6">
                                <label for="story_name">Tên Truyện</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="story_name" name="story_name" class="form-control" placeholder="Nhập Tên Truyện..." >
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="author_id">Tác Giả</label>
                                <select class="form-control show-tick" name="author_id">
                                    <option ></option>
                                    <option>Thiên Tằm Thổ Đậu</option>
                                    <option>Đường Gia Tam Thiếu</option>
                                </select>
                            </div>

                        </div>
                        <div class="row clearfix">

                            <div class="col-md-4">
                               <label for="story_source">Nguồn</label>
                               <div class="form-group">
                                    <div class="form-line">
                                       <input type="story_source" name="story_source" class="form-control" placeholder="Nhập Nguồn Truyện..." > 
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <label for="storyType">Loại Truyện</label>
                                <select multiple  class="form-control show-tick" multiple name="storyType[]">
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                 </select>
                            </div>

                            <div class="col-md-4">
                               <label for="story_sum_chapter">Số Chương</label>
                               <div class="form-group">
                                    <div class="form-line">
                                       <input type="text" name="story_sum_chapter" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">

                            <div class="col-md-3">
                                <label for="story_view">Lược Xem</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="story_view" class="form-control" id="story_view">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="story_rating">Đánh Giá</label>
                                <select class="form-control show-tick" name="story_rating">
                                    <option ></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label for="story_status">Trạng Thái</label>
                                <select class="form-control show-tick" name="story_status" id="story_status">
                                    <option></option>
                                    <option value="1">Hoàn Thành</option>
                                    <option value="2">Đang Ra</option>
                                </select>
                            </div>

                            <div class="col-md-3">
                                <label for="story_price">Tính Phí</label>
                                <select class="form-control show-tick" name="story_price" id="story_price">
                                    <option></option>
                                    <option value="1">Có</option>
                                    <option value="2">Không</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        MÔ TẢ
                    </h2>
                </div>
                <div class="body">
                    <textarea id="tinymce">
                        <h2>WYSIWYG Editor</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.</p>
                        <h3>Lacinia</h3>
                        <ul>
                            <li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
                            <li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
                            <li>Praesent non lacinia mi.</li>
                            <li>Mauris a ante neque.</li>
                            <li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
                        </ul>
                        <h3>Pellentesque adipiscing</h3>
                        <p>Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.</p>
                    </textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary m-t-15 waves-effect">THÊM</button>
    </div>
    <!-- #END# Vertical Layout -->
</div>
@endsection
<!-- #END# Content -->

<!-- Custom Js -->
@section('customJs')
<!-- TinyMCE -->
<script src="{{ asset('plugins/tinymce/tinymce.js') }}"></script>
<script src="{{ asset('js/admin.js') }}"></script>
<script src="{{ asset('js/pages/forms/editors.js') }}"></script>
<script src="{{ asset('js/admin.stories.js') }}"></script>
@endsection
<!-- #END# Custom Js -->
