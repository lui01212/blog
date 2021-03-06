@extends('page.detailPage')

@section('description','tác các phẩm của '. $author ->author_name)

@section('keywords',$author ->author_name .',truyen cua '.$author ->author_name .', tim kiem '.$author ->author_name)

@section('title')
    {{ 'Tác giả '.$author ->author_name }}
@endsection

@section('OpenGraph')
<meta name="ROBOTS" content="INDEX, FOLLOW">
<meta property="og:locale" content="vi_VN">
<meta property="og:title" content="{{ __('Đọc Truyện Online|Truyện Hay Nhất') }}">
<meta property="og:description" content="{{'tác các phẩm của '. $author ->author_name}}">
<meta property="og:url" content="{{ URL::current() }}">
<meta property="og:site_name" content="author">
<meta property="og:type" content="website">
<meta property="og:image" content="{{asset('images/logo.jpg')}}">
@endsection

@section('breadcrumb')
<div class="row clearfix" style="margin: 80px 0 0 0;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ol class="breadcrumb align-center">
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="{{ url('/') }}"><i class="material-icons">home</i><span itemprop="title">Home</span></a></li>
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="{{ URL::current() }}"><i class="material-icons">library_books</i><span itemprop="title">{{$author ->author_name}}</span></a></li>
        </ol>
    </div>
</div>
@endsection

@section('list-content')
<!-- Badges -->
<div class="block-header">
    <div class='block-header-class'>
        <h2 class="block-header-content">         
            <span>{{__('TÁC GIẢ '. mb_strtoupper($author ->author_name ,'UTF-8'))}}</span>
        </h2>
        <hr>
    </div>
</div>
@if($stories)
@foreach($stories as $story)
@if($story ->story_name == null)
<h3>{{__('TRUYỆN CỦA TÁC GIẢ '. mb_strtoupper($author ->author_name ,'UTF-8') . ' KHÔNG TỒN TẠI')}}</h3>
@break;
@endif
<div class="row boder-dashed">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
        <div class="media media-custum" itemscope itemtype="http://schema.org/Book">
            <div class="media-left">
                <a href="javascript:void(0);">
                    <img alt="{{$author ->author_name}}" alt="Đọc truyện hay và mới nhất của tác giả {{$author ->author_name}}" itemprop="image" class="media-object" src="{{asset('images/' . $story ->story_image )}}"  width="80" height="80">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading" itemprop="name"><a  class="col-teal"  itemprop="url" href="{{route('storydetailpage.index',['story_name_link'=>$story ->story_name_link])}}" title="{{$story ->story_name}}">{{$story ->story_name}}</a></h4><a itemprop="author" href="{{route('authorpage.index',['author'=>$story ->author_name_link])}}" title="{{$story ->author_name}}">{{$story ->author_name}}</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <a class="col-teal" href="{{route('chapterpage.index',['story_name_link'=>$story ->story_name_link,'chapter_name_link'=>$story ->chapter_name_link])}}" title="{{$story ->story_name}} - Chương {{$story ->chapter}}"><span><span>Chương </span></span>{{$story ->chapter}}</a>
    </div>
</div>
@endforeach

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
@endif
@endsection
