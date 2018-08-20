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
        <a href="" class="btn btn-success waves-effect">
            <i class="material-icons">assignment_return</i>
            <span>TRỞ VỀ LIST CHAPTER</span>
        </a>
    </div>
    <form method="POST" action="{{route('deleteScript.update',['id'=>$storyListDetail->chapter_id])}}">
        {{ csrf_field() }}
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        NỘI DUNG CHAPTER
                    </h2>
                </div>
                <div class="body">
                    <textarea id="tinymce" name="chapter_content">
                        {{ $storyListDetail->chapter_content }}
                    </textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary m-t-5 m-b-15 waves-effect">DELETE SCRIPT</button>
        </div>
    </form>
    <br>
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
<script src="{{ asset('js/admin.deleteScript.js') }}"></script>
@endsection
<!-- #END# Custom Js -->
