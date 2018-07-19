@extends('layouts.masterAdmin')

<!-- Custom Css Js-->
@section('customCssJs')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<!-- JQuery DataTable Css -->
<link href="{{ asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet">
@endsection
<!-- #END# Custom Css Js -->

<!-- Content -->
@section('content')
<div class="container-fluid">
    <div class="block-header">
        <a href="{{ route('authormaster.create') }}" class="btn btn-success waves-effect">
            <i class="material-icons">add</i>
            <span>THÊM TÁC GIẢ</span>
        </a>
    </div>
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        TÁC GIẢ
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tác Giả</th>
                                    <th>Flag</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Tác Giả</th>
                                    <th>Flag</th>
                                    <th>Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
	                            @foreach($storyAuthor as $author)
					            	<tr>
					                    <td>{{$author ->author_id}}</td>
					                    <td>{{$author ->author_name}}</td>
					                    <td>
					                    	@if($author ->flag == 1)
						                	{{__('true')}}
						                	@else
						                	{{__('false')}}
						                	@endif
					                    </td>
	                                    <td class="col-md-2">                                
			                                <a href="{{ route('authormaster.edit', ['id' => $author ->author_id]) }}" type="button" class="btn btn-default waves-effect">
			                                    <i class="material-icons">mode_edit</i>
			                                </a>
			                                <a type="button" class="btn bg-red waves-effect" onclick="event.preventDefault();
                                                     document.getElementById('destroy{{$author ->author_id}}').submit();">
			                                    <i class="material-icons">delete_forever</i>
			                                </a>
                                            <form id="destroy{{$author ->author_id}}" action="{{ route('authormaster.destroy', ['id' => $author ->author_id]) }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>
	                            		</td>
					                </tr>
					            @endforeach
                            </tbody>
                        </table>
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
<!-- Jquery DataTable Plugin Js -->
<script src="{{ asset('plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
<script src="{{ asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
<script src="{{ asset('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
<!-- #END - Jquery DataTable Plugin Js -->
<script src="{{ asset('js/admin.js') }}"></script>
<script src="{{ asset('js/pages/tables/jquery-datatable.js') }}"></script>
@endsection
<!-- #END# Custom Js -->