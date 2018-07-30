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
                @if(isset($storiesHotWeek))
                @foreach($storiesHotWeek as $story)
                <div class="media media-custum">
                    <div class="media-left">
                        <a href="javascript:void(0);">
                            <img class="media-object" src="{{asset('images/' . $story ->story_image )}}" width="40" height="40">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading text-truncate"><a href="{{route('storydetailpage.index',['story'=>$story->story_name_link])}}" title="{{$story->story_name}}">{{$story->story_name}}</a></h4>
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
                    </div>
                </div>
                @endforeach
                @endif
            </div>
            <div role="tabpanel" class="tab-pane animated flipInX" id="messages_md_col_3">
                @if(isset($storiesHotMonth))
                @foreach($storiesHotMonth as $story)
                <div class="media media-custum">
                    <div class="media-left">
                        <a href="javascript:void(0);">
                            <img class="media-object" src="{{asset('images/' . $story ->story_image )}}" width="40" height="40">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading text-truncate"><a href="{{route('storydetailpage.index',['story'=>$story->story_name_link])}}" title="{{$story->story_name}}">{{$story->story_name}}</a></h4>
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
                    </div>
                </div>
                @endforeach
                @endif
            </div>
            <div role="tabpanel" class="tab-pane animated flipInX" id="messages_animation_1">
                @if(isset($storiesHotAll))
                @foreach($storiesHotAll as $story)
                <div class="media media-custum">
                    <div class="media-left">
                        <a href="javascript:void(0);">
                            <img class="media-object" src="{{asset('images/' . $story ->story_image )}}" width="40" height="40">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading text-truncate"><a href="{{route('storydetailpage.index',['story'=>$story->story_name_link])}}" title="{{$story->story_name}}">{{$story->story_name}}</a></h4>
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
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
