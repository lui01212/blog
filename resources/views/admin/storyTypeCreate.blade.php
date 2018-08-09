@extends('layouts.masterAdmin')

<!-- Custom Css Js-->
@section('customCssJs')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
<!-- #END# Custom Css Js -->

<!-- Content -->
@section('content')
<div class="container-fluid">
    <div class="block-header">
	    <a href="{{ route('storymaster.index') }}" class="btn btn-success waves-effect">
	        <i class="material-icons">assignment_return</i>
	        <span>TRỞ VỀ LIST</span>
	    </a>
	</div>
    <!-- Vertical Layout -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        THÊM THỂ LOẠI
                    </h2>
                </div>
                <div class="body">
                    <form method="POST" action="{{ route('storymaster.store') }}">
                    	{{ csrf_field() }}
                        <label for="type_name">Loại Truyện</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text"  name ="type_name" id="type_name" class="form-control" placeholder="Nhập Thể Loại .....">
                            </div>
                            @if ($errors->has('type_name'))
                            <label id="email-error" class="error" for="email">{{ $errors->first('type_name') }}</label>
                            @endif
                        </div>
                        <label for="keywords">keywords</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text"  name ="keywords" id="keywords" class="form-control" placeholder="Nhập keywords .....">
                            </div>
                        </div>
                        <label for="description_head">MÔ TẢ HEAD</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text"  name ="description_head" id="description_head" class="form-control">
                            </div>
                        </div>
						<label for="type_name">MÔ TẢ</label>
                        <div class="form-group">
                            <textarea id="tinymce" name="description">
                            </textarea>
                        </div>
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">THÊM</button>
                    </form>
                </div>
            </div>
        </div>
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
<script language="javascript">
    //TinyMCE
    tinymce.init({
        selector: "textarea#tinymce",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools'
        ],
        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        image_advtab: true
    });
    tinymce.suffix = ".min";
    tinyMCE.baseURL = "{{ asset('plugins/tinymce') }}";
</script>
@endsection
<!-- #END# Custom Js -->
