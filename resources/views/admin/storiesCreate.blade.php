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
    <form method="POST" action="{{ route('storiesmaster.store') }}">
    {{ csrf_field() }}
    <div class="row clearfix">

            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
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
            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">
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
                                        <input type="story_name"  value="{{ old('story_name') }}" name="story_name" class="form-control" placeholder="Nhập Tên Truyện..." >
                                    </div>
                                     @if ($errors->has('story_name'))
                                    <h6 id="story_name-error" class="error col-pink" for="story_name">{{ $errors->first('story_name') }}</h6>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="author_id">Tác Giả</label>
                                <select class="form-control show-tick" name="author_id">
                                    <option ></option>
                                    @foreach($storyAuthor as $author)
                                    <option value="{{$author ->author_id}}" @if (old('author_id') == $author ->author_id) selected="selected" @endif>{{$author ->author_name}}</option>
                                    @endforeach
                                </select>
                            @if ($errors->has('author_id'))
                            <h6 id="author_id-error" class="error col-pink" for="author_id">{{ $errors->first('author_id') }}</h6>
                            @endif
                            </div>

                        </div>
                        <div class="row clearfix">

                            <div class="col-md-4">
                               <label for="story_source">Nguồn</label>
                               <div class="form-group">
                                    <div class="form-line">
                                       <input type="story_source" value="{{ old('story_source') }}" name="story_source" class="form-control" placeholder="Nhập Nguồn Truyện..." > 
                                    </div>
                                    @if ($errors->has('story_source'))
                                    <h6 id="story_source-error" class="error col-pink" for="story_source">{{ $errors->first('story_source') }}</h6>
                                    @endif
                                </div>

                            </div>


                            <div class="col-md-4">
                                <label for="story_type">Loại Truyện</label>
                                <select multiple  class="form-control show-tick" multiple name="story_type[]">
                                    @foreach($storyType as $type)
                                    <option value="{{$type ->type_id}}">{{$type ->type_name}}</option>
                                    @endforeach
                                 </select>
                            @if ($errors->has('story_type'))
                            <h6 id="story_type-error" class="error col-pink" for="story_type">{{ $errors->first('story_type') }}</h6>
                            @endif
                            </div>

                            <div class="col-md-4">
                               <label for="story_sum_chapter">Số Chương</label>
                               <div class="form-group">
                                    <div class="form-line">
                                       <input type="text" value="{{ old('story_sum_chapter') }}" name="story_sum_chapter" class="form-control">
                                    </div>
                                     @if ($errors->has('story_sum_chapter'))
                                    <h6 id="story_sum_chapter-error" class="error col-pink" for="story_sum_chapter">{{ $errors->first('story_sum_chapter') }}</h6>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">

                            <div class="col-md-3">
                                <label for="story_view">Lược Xem</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text"  value="{{ old('story_view') }}" name="story_view" class="form-control" id="story_view">
                                    </div>
                                    @if ($errors->has('story_view'))
                                    <h6 id="story_view-error" class="error col-pink" for="story_view">{{ $errors->first('story_view') }}</h6>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="story_rating">Đánh Giá</label>
                                <select class="form-control show-tick" value="{{ old('story_rating') }}" name="story_rating">
                                    <option ></option>
                                    @for($ix = 1; $ix <= 10 ;$ix++)
                                    <option value="{{$ix}}" @if (old('story_rating') == $ix) selected="selected" @endif>{{$ix}}*</option>
                                    @endfor
                                </select>
                            @if ($errors->has('story_rating'))
                            <h6 id="story_rating-error" class="error col-pink" for="story_rating">{{ $errors->first('story_rating') }}</h6>
                            @endif
                            </div>

                            <div class="col-md-3">
                                <label for="story_status">Trạng Thái</label>
                                <select class="form-control show-tick" name="story_status" id="story_status">
                                    <option></option>
                                    <option value="1" @if (old('story_status') == '1') selected="selected" @endif>Hoàn Thành</option>
                                    <option value="2" @if (old('story_status') == '2') selected="selected" @endif>Đang Ra</option>
                                </select>
                            @if ($errors->has('story_status'))
                            <h6 id="story_status-error" class="error col-pink" for="story_status">{{ $errors->first('story_status') }}</h6>
                            @endif
                            </div>

                            <div class="col-md-3">
                                <label for="story_price">Tính Phí</label>
                                <select class="form-control show-tick" value="{{ old('story_price') }}"  name="story_price">
                                    <option></option>
                                    <option value="1" @if (old('story_price') == '1') selected="selected" @endif>Có</option>
                                    <option value="2" @if (old('story_price') == '2') selected="selected" @endif>Không</option>
                                </select>
                            @if ($errors->has('story_price'))
                            <h6 id="story_price-error" class="error col-pink" for="story_price">{{ $errors->first('story_price') }}</h6>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
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
                    <textarea id="tinymce" name="story_intro">
                        {{ old('story_intro') }}
                    </textarea>
                @if ($errors->has('story_intro'))
                <h6 id="story_intro-error" class="error col-pink" for="story_intro">{{ $errors->first('story_intro') }}</h6>
                @endif
                </div>
            </div>
        </div>
        <br>
    </div>
    <div class="row clearfix">
    <button type="submit" class="btn btn-primary m-t-5 m-b-15 waves-effect">THÊM</button>
    </div>
    </form>
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
