@extends('layouts.masterPage')

@section('breadcrumb')
<div class="row clearfix" style="margin: 80px 0 0 0;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ol class="breadcrumb align-center">
            <li><a href="{{ url('/') }}"><i class="material-icons">home</i> Home</a></li>
        </ol>
    </div>
</div>
@endsection

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
                            @foreach($storyType as $type)
                                <option value="{{$type ->type_name_link}}">{{$type->type_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-0 col-sm-0 col-xs-0 m-t-5">
                <div class="list-group  list-group-custum">
                    @foreach($storyType as $key => $type)
                        @if($key == 12) 
                          @break;
                        @endif
                        <a href="{{route('typepage.index',['type_name_link'=>$type->type_name_link])}}" class="list-group-item">{{$type ->type_name}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                <div class="row col-xs-0">
                    <div class="card-carousel">
                        @foreach($stories as $key => $story)
                            @if($key == 7)
                                @break;
                            @endif
                        <div class="my-card">
                            <img src="{{asset('images/' . $story ->story_image )}}" />
                            <div class="my-card-content">
                                <p>{{$story ->story_name}}</p>
                                <a href="{{route('storydetailpage.index',['story_name_link'=> $story ->story_name_link])}}" class="btn bg-pink btn-block btn-xs waves-effect">Đọc<span class="badge">{{round ($story ->story_view/1000 , 2)}}Kv</span></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button type="button" class="btn btn-default btn-circle bnt-prev waves-effect waves-circle waves-float">
                        <i class="material-icons">navigate_before</i>
                    </button>
                    <button type="button" class="btn btn-default btn-circle bnt-next waves-effect waves-circle waves-float">
                        <i class="material-icons">navigate_next</i>
                    </button>
                </div>

                <div class="row">
                    @foreach($stories as $key => $story)
                        @if($key < 7)
                            @continue;
                        @endif
                    <div class="column col-lg-2 col-md-2 col-sm-4 col-xs-4  m-t-25">
                        <img class="hover-shadow" src="{{asset('images/' . $story ->story_image )}}" style="width: 100%" />
                        <div class="top-right"><span class="badge bg-pink">New</span></div>
                        <div class="column-contents">
                            <h6 class="text-nowrap"><a href="{{route('storydetailpage.index',['story'=> $story ->story_name_link])}}" >{{$story->story_name}}</a></h6>
                            <h6 class="col-teal">{{$story->story_sum_chapter}} chương</h6>
                        </div>
                        <a href="{{route('storydetailpage.index',['story'=> $story ->story_name_link])}}" class="btn bg-pink btn-block btn-xs waves-effect">Đọc<span class="badge">{{round ($story ->story_view/1000 , 2)}}Kv</span></a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-2 col-md-0 col-sm-0 col-xs-0 m-t-5">
                <div class="list-group list-group-custum">
                    @foreach($storyType as $key => $type)
                        @if($key < 12 || $key > 23) 
                          @continue;
                        @endif
                        <a href="{{route('typepage.index',['type_name_link'=>$type->type_name_link])}}" class="list-group-item">{{$type ->type_name}}</a>
                    @endforeach
                </div>
            </div>
            <!-- #END# Badges -->
        </div>
    </div>
    <div class="row m-t-85">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="block-header block-header-custum">
                        <h2>TRUYỆN MỚI CẬP NHẬT</h2>
                    </div>
                    @foreach($storiesNewUpdate as $story)
                    <div class="row row-list-item">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-9 font-16">
                            <span class="glyphicon glyphicon-chevron-right"></span><a href="{{route('storydetailpage.index',['story'=>$story ->story_name_link])}}" title="{{$story ->story_name}}">{{$story ->story_name}}</a>
                        </div>
                        <div class="col-lg-3 col-md-0 col-sm-2 col-xs-0">
                            <?php $step = ''; ?>
                            @foreach($storyType as $type)
                                        @foreach(unserialize($story ->story_type) as $types)
                                                @if($types == $type ->type_id)
                                                {{$step}}<a class="font-14" title="{{$type->type_name}}" href="{{route('typepage.index',['type_name_link'=>$type->type_name_link])}}">{{$type->type_name}}</a>
                                                <?php $step =','; ?>
                                                @break;
                                                @endif
                                        @endforeach
                            @endforeach
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-2 col-xs-3">
                            <a href="{{route('chapterpage.index',['story'=>$story->story_name_link,'chapter'=>$story ->chapter_name_link])}}" title="{{$story->story_name}}  -  {{$story->chapter_name}}"><span class="chapter-text"><span>Chương </span></span>{{$story ->chapter}}</a>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-2 col-xs-0">
                            <?php 
                                $date = new DateTime($story->updated_at);
                                $now  = new DateTime('now');
                                $diff = $now->getTimestamp() - $date->getTimestamp();
                            ?>
                            {{round($diff/3600,0)==0 ? ' Vừa Mới Đăng' : (round($diff/3600,0) . ' tiếng trước')}}
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <!-- hot For Sidebars -->
                    @include('page.custumPage.hotSidebar')
                    <!-- #END# hot For Sidebars -->
                </div>
            </div>
        </div>
    </div>
    <?php 
        $arrayColor  = array('bg-green' ,'bg-light-green','bg-lime','bg-yellow','bg-amber','bg-orange','bg-deep-orange','bg-brown','bg-grey','bg-blue-grey');
    ?>
    <div class="row m-t-50">
        <div class="col-md-10 col-md-offset-1">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="row p-r-25 p-l-15">
                        <div class="block-header block-header-custum">
                            <h2>TRUYỆN ĐÃ HOÀN THÀNH</h2>
                        </div>
                        <ul class="list-group">
                        @foreach($storiesFull as $key => $story)
                            @if($key == 0)
                                <li class="list-group-item" style="background-image: url('images/backgroud-list1.jpg'); background-size: 100% 100%;">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 m-r-5">
                                            <button type="button" class="btn {{$arrayColor[$key]}} btn-circle waves-effect waves-circle waves-float" style="width: 30px;height: 30px; line-height: 15px;">
                                            {{$key +1 }}
                                            </button>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 text-overflow align-center">
                                            <a class="btn bg-purple waves-effect" href="{{route('storydetailpage.index',['story_name_link'=> $story ->story_name_link])}}" ><span>{{$story->story_name}}</span>
                                            </a>
                                            <div class="m-t-10 font-12">
                                                <p>Thể loại:
                                                    <?php $step = ''; ?>
                                                    @foreach($storyType as $type)
                                                                @foreach(unserialize($story ->story_type) as $types)
                                                                        @if($types == $type ->type_id)
                                                                        {{$step}}
                                                                        {{$type->type_name}}
                                                                        <?php $step =','; ?>
                                                                        @break;
                                                                        @endif
                                                                @endforeach
                                                    @endforeach
                                                </p>
                                                <p>Tác Giả :{{$story->author_name}}</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @if($key > 0)
                                <li class="list-group-item text-overflow">
                                    <button type="button" class="btn {{$arrayColor[$key]}} btn-circle waves-effect waves-circle waves-float m-r-5" style="width: 30px;height: 30px; line-height: 15px;">
                                            {{$key +1 }}
                                    </button>
                                    <a href="{{route('storydetailpage.index',['story_name_link'=> $story ->story_name_link])}}" ><span class="style:">{{$story->story_name}}</span>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="row p-r-25 p-l-15">
                        <div class="block-header block-header-custum">
                            <h2>TRUYỆN ĐÃ MỚI</h2>
                        </div>
                        <ul class="list-group">
                        @foreach($storiesNew as $key => $story)
                            @if($key == 0)
                                <li class="list-group-item" style="background-image: url('images/backgroud-list2.jpg'); background-size: 100% 100%;">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 m-r-5">
                                            <button type="button" class="btn {{$arrayColor[$key]}} btn-circle waves-effect waves-circle waves-float" style="width: 30px;height: 30px; line-height: 15px;">
                                            {{$key +1 }}
                                            </button>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 text-overflow align-center">
                                            <a class="btn bg-purple waves-effect" href="{{route('storydetailpage.index',['story_name_link'=> $story ->story_name_link])}}" ><span>{{$story->story_name}}</span>
                                            </a>
                                            <div class="m-t-10 font-12">
                                                <p>Thể loại:
                                                    <?php $step = ''; ?>
                                                    @foreach($storyType as $type)
                                                                @foreach(unserialize($story ->story_type) as $types)
                                                                        @if($types == $type ->type_id)
                                                                        {{$step}}
                                                                        {{$type->type_name}}
                                                                        <?php $step =','; ?>
                                                                        @break;
                                                                        @endif
                                                                @endforeach
                                                    @endforeach
                                                </p>
                                                <p>Tác Giả :{{$story->author_name}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @if($key > 0)
                                <li class="list-group-item text-overflow">
                                    <button type="button" class="btn {{$arrayColor[$key]}} btn-circle waves-effect waves-circle waves-float m-r-5" style="width: 30px;height: 30px; line-height: 15px;">
                                            {{$key +1 }}
                                    </button>
                                    <a href="{{route('storydetailpage.index',['story_name_link'=> $story ->story_name_link])}}" ><span class="style:">{{$story->story_name}}</span>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="row p-r-25 p-l-15">
                        <div class="block-header block-header-custum">
                            <h2>TRUYỆN ĐÃ BTV ĐỀ CỬ</h2>
                        </div>
                        <ul class="list-group">
                        @foreach($storiesOffer as $key => $story)
                            @if($key == 0)
                                <li class="list-group-item" style="background-image: url('images/backgroud-list3.jpg'); background-size: 100% 100%;">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 m-r-5">
                                            <button type="button" class="btn {{$arrayColor[$key]}} btn-circle waves-effect waves-circle waves-float" style="width: 30px;height: 30px; line-height: 15px;">
                                            {{$key +1 }}
                                            </button>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 text-overflow align-center">
                                            <a class="btn bg-purple waves-effect" href="{{route('storydetailpage.index',['story_name_link'=> $story ->story_name_link])}}" ><span>{{$story->story_name}}</span>
                                            </a>
                                            <div class="m-t-10 font-12">
                                                <p>Thể loại:
                                                    <?php $step = ''; ?>
                                                    @foreach($storyType as $type)
                                                                @foreach(unserialize($story ->story_type) as $types)
                                                                        @if($types == $type ->type_id)
                                                                        {{$step}}
                                                                        {{$type->type_name}}
                                                                        <?php $step =','; ?>
                                                                        @break;
                                                                        @endif
                                                                @endforeach
                                                    @endforeach
                                                </p>
                                                <p>Tác Giả :{{$story->author_name}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endif
                            @if($key > 0)
                                <li class="list-group-item text-overflow">
                                    <button type="button" class="btn {{$arrayColor[$key]}} btn-circle waves-effect waves-circle waves-float m-r-5" style="width: 30px;height: 30px; line-height: 15px;">
                                            {{$key +1 }}
                                    </button>
                                    <a href="{{route('storydetailpage.index',['story_name_link'=> $story ->story_name_link])}}" ><span class="style:">{{$story->story_name}}</span>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                        </ul>
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
