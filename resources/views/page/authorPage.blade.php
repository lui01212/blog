@extends('page.detailPage')

@section('list-content')
<!-- Badges -->
<div class="block-header block-header-custum">
    <h2>{{__('TÁC GIẢ '. mb_strtoupper($author ->author_name ,'UTF-8'))}}</h2>
</div>
@if($stories)
@foreach($stories as $story)
@if($story ->story_name == null)
    <h3>{{__('TRUYỆN CỦA TÁC GIẢ '. mb_strtoupper($author ->author_name ,'UTF-8') . ' KHÔNG TỒN TẠI')}}</h3>
    @break;
@endif
<div class="row boder-dashed">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
        <div class="media media-custum">
            <div class="media-left">
                <a href="javascript:void(0);">
                    <img class="media-object" src="{{asset('images/' . $story ->story_image )}}"  width="80" height="80">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading"><a href="{{route('storydetailpage.index',['story_name_link'=>$story ->story_name_link])}}" title="{{$story ->story_name}}">{{$story ->story_name}}</a></h4><a href="{{route('authorpage.index',['author'=>$story ->author_name_link])}}" title="{{$story ->author_name}}">{{$story ->author_name}}</a>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <a href="{{route('chapterpage.index',['story_name_link'=>$story ->story_name_link,'chapter_name_link'=>$story ->chapter_name_link])}}" title="{{$story ->story_name}} - Chương {{$story ->chapter}}"><span><span>Chương </span></span>{{$story ->chapter}}</a>
    </div>
</div>
@endforeach

@if ($stories->lastPage() > 1)
<div class="card">
<ul class="pagination">
    <li class="{{ ($stories->currentPage() == 1) ? ' disabled' : '' }}">
        <a href="{{ $stories->url(1) }}">Previous</a>
    </li>
    @for ($i = 1; $i <= $stories->lastPage(); $i++)
        <li class="{{ ($stories->currentPage() == $i) ? ' active' : '' }}">
            <a href="{{ $stories->url($i) }}">{{ $i }}</a>
        </li>
    @endfor
    <li class="{{ ($stories->currentPage() == $stories->lastPage()) ? ' disabled' : '' }}">
        <a href="{{ $stories->url($stories->currentPage()+1) }}" >Next</a>
    </li>
</ul>
</div>
@endif
@endif
@endsection
