@extends('page.detailPage')
@section('breadcrumb')
<div class="row clearfix" style="margin: 80px 0 0 0;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ol class="breadcrumb align-center">
            <li><a href="{{ url('/') }}"><i class="material-icons">home</i> Home</a></li>
            <li><a href="javascript:void(0);"><i class="material-icons">library_books</i>{{$story ->story_name}}</a></li>
        </ol>
    </div>
</div>
@endsection
@section('list-content')
<!-- Badges -->
<div class="block-header block-header-custum">
    <h2>THÔNG TIN TRUYỆN</h2>
</div>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <a href="javascript:void(0);" class="thumbnail" style="height: 80%;width: 80%; margin:0 auto;">
            <img src="{{asset('images/' . $story ->story_image )}}" style="height: 100%;width: 100%;" >
        </a>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="align-center boder-dashed">
            <h2 class="font-25 col-purple">{{$story ->story_name}}</h2>
        </div>
        <div class="align-center m-t-20">
            <h3 class="font-20 col-purple">Đánh Giá</h3>
            <div class="rateit" data-productid="{{$story ->story_name_link}}" data-rateit-value="{{$story ->story_rating}}" data-rateit-min="0" data-rateit-max="10"></div><span class="badge bg-purple font-20 m-l-5 rateit-text">{{$story ->story_rating}}</span>
            <h6 class="font-italic comment-rateit-text">Đã có <span class="rating_sum">{{$story ->story_rating_sum}}</span> lược đánh giá <span class="rating">{{$story ->story_rating}}</span>/10</h6>
        </div>
        <ul class="list-unstyled">
            <li>&nbsp;</li>
            <li><span class="font-bold">Tác Giả : </span><span>{{$story->author_name}}</span></li>
            <li>&nbsp;</li>
            <li><span class="font-bold">Thể Loại :</span>
            <span>
            <?php $step = ''; ?>
            @foreach($storyType as $type)
                @foreach(unserialize($story ->story_type) as $types)
                        @if($types == $type ->type_id)
                        {{$step}}<a title="{{$type->type_name}}" href="{{route('typepage.index',['type'=>$type->type_name_link])}}">{{$type->type_name}}</a>
                        <?php $step =','; ?>
                        @break;
                        @endif
                @endforeach
            @endforeach
            </span>
            </li>
            <li>&nbsp;</li>
            <li><span class="font-bold">Tình Trạng :</span>
                <span>
                    @if($story->story_status == '1')
                    {{__('Hoàn Thành')}}
                    @else
                    {{__('Đang Ra')}}
                    @endif
                </span>
            </li>
            <li>&nbsp;</li>
            <li><span class="font-bold">Nguồn :</span><span>{{$story->story_source}}</span></li>
            <li>&nbsp;</li>
        </ul>
            @foreach($stories as $key => $value)
            @if($key == 1) 
            @break;
            @endif
            <a href="{{route('chapterpage.index',['story_name_link'=>$value ->story_name_link,'chapter_name_link'=>$value->chapter_name_link])}}"" class="btn bg-pink btn-block btn-lg waves-effect">ĐỌC TỪ ĐẦU</a>
            @endforeach
    </div>
</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 m-t-20">
    <div class="align-center boder-dashed m-b-10">
            <h3 class="font-25 col-purple">Tóm Lược</h3>
    </div>
    <span>
    {!! $story ->story_intro !!}
    </span>
</div>
</div>
<div class="row">
    <div class="block-header block-header-custum">
        <h2>DANH SÁCH CHƯƠNG</h2>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-t-20">
            @foreach($stories as $key => $value)
            @if($key == 25) 
            @break;
            @endif
            <div class="list-item">
                <span class="glyphicon glyphicon-certificate"></span> <a class="m-l-5" href="{{route('chapterpage.index',['story_name_link'=>$value ->story_name_link,'chapter_name_link'=>$value->chapter_name_link])}}" title="Vương {{$value ->story_name}} - {{$value->chapter_name}}">{{$value->chapter_name}}</a>
            </div>
            @endforeach
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-t-20">
            @foreach($stories as $key => $value)
            @if($key < 25)
            @continue;
            @endif
            <div class="list-item">
                <span class="glyphicon glyphicon-certificate"></span><a class="m-l-10" href="{{route('chapterpage.index',['story_name_link'=>$value ->story_name_link,'chapter_name_link'=>$value->chapter_name_link])}}" title="Vương {{$value ->story_name}} - {{$value->chapter_name}}">{{$value->chapter_name}}</a>
            </div>
            @endforeach
       </div>
    </div>
    <div class="row m-t-20 m-r-10 m-l-10" style="background-color: #fff;">
    @if ($stories->lastPage() > 1)
    <ul class="pagination m-l-10">
        @for ($i = 1; $i <= $stories->lastPage(); $i++)
            <li class="{{ ($stories->currentPage() == $i) ? ' active' : '' }}">
                <a href="{{ $stories->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
    </ul>
    @endif
    </div>
</div>
@endsection
<!-- Custom Js -->
@section('customJs')
<link href="{{ asset('plugins/rateit/src/rateit.css') }}" rel="stylesheet" />
<script src="{{ asset('plugins/jquery-cookie/jquery.cookie.js') }}"></script>
<script src="{{ asset('plugins/rateit/src/jquery.rateit.min.js') }}"></script>
<script src="{{ asset('js/storydetail.js') }}"></script>
<script type="text/javascript">
  var base_url = '{!! url('/rating/'. $story ->story_name_link) !!}';
</script>
@endsection
<!-- #END# Custom Js -->
