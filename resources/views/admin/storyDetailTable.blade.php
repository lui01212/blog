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
        <a href="{{ route('storiesmaster.index') }}" class="btn btn-success waves-effect">
            <i class="material-icons">assignment_return</i>
            <span>TRỞ VỀ LIST TRUYỆN</span>
        </a>
        <a href="{{ route('storydetail.create',['id'=>$id]) }}" class="btn btn-success waves-effect">
            <i class="material-icons">add</i>
            <span>THÊM CHƯƠNG TRUYỆN</span>
        </a>
    </div>
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        TRUYỆN
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Chương</th>
                                    <th>Tên Chương</th>
                                    <th>flag</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($storyListDetail as  $chapter)
                                <tr>
                                    <td>{{$chapter ->chapter_id}}</td>
                                    <td>{{$chapter ->chapter}}</td>
                                    <td>{{$chapter ->chapter_name}}</td>
                                    <td>{{$chapter ->flag}}</td>
                                    <td></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if ($storyListDetail->lastPage() > 1)
                        <ul class="pagination">
                            <li class="{{ ($storyListDetail->currentPage() == 1) ? ' disabled' : '' }}">
                                <a href="{{ $storyListDetail->url(1) }}">Previous</a>
                            </li>
                            @for ($i = 1; $i <= $storyListDetail->lastPage(); $i++)
                                <li class="{{ ($storyListDetail->currentPage() == $i) ? ' active' : '' }}">
                                    <a href="{{ $storyListDetail->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            <li class="{{ ($storyListDetail->currentPage() == $storyListDetail->lastPage()) ? ' disabled' : '' }}">
                                <a href="{{ $storyListDetail->url($storyListDetail->currentPage()+1) }}" >Next</a>
                            </li>
                        </ul>
                        @endif
                    </div>
                 </div>
            </div>
         </div>
    </div>
    <!-- #END# Basic Examples -->
</div>
@endsection
<!-- #END# Content -->

<!-- Custom Js -->
@section('customJs')
<script src="{{ asset('js/admin.js') }}"></script>
@endsection
<!-- #END# Custom Js -->
