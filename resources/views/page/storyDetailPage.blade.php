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
        <a href="javascript:void(0);" class="thumbnail">
            <img src="{{asset('images/' . $story ->story_image )}}">
        </a>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="align-center boder-dashed">
            <h2>{{$story ->story_name}}</h2>
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
            <h3>TÓM LƯỢC</h3>
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
                <span class="glyphicon glyphicon-certificate"></span> <a href="{{route('chapterpage.index',['story_name_link'=>$value ->story_name_link,'chapter_name_link'=>$value->chapter_name_link])}}" title="Vương {{$value ->story_name}} - {{$value->chapter_name}}">{{$value->chapter_name}}</a>
            </div>
            @endforeach
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 m-t-20">
            @foreach($stories as $key => $value)
            @if($key < 25)
            @continue;
            @endif
            <div class="list-item">
                <span class="glyphicon glyphicon-certificate"></span><a href="{{route('chapterpage.index',['story_name_link'=>$value ->story_name_link,'chapter_name_link'=>$value->chapter_name_link])}}" title="Vương {{$value ->story_name}} - {{$value->chapter_name}}">{{$value->chapter_name}}</a>
            </div>
            @endforeach
       </div>
    </div>
    <div class="row">
    @if ($stories->lastPage() > 1)
    <ul class="pagination">
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
