<?php

namespace App\Http\Controllers\Adminpanel;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use App\storyListDetail;

use App\Stories;

use DB;

use App\Http\Requests\storyDetailRequest;

class storyDetailController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
    	$user = Auth::user();

    	$storyListDetail  = storyListDetail::paginate(1);

        return view('admin.storyDetailTable',compact('id','user','storyListDetail'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $user = Auth::user();

        $stories = DB::table('stories') ->where('story_id', $id) ->leftjoin('story_authors','stories.author_id','=','story_authors.author_id')->select('stories.*','story_authors.author_name')->first();

    	return view('admin.chapterCreate',compact('id','user','stories'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storyDetailRequest $request,$id)
    {
        DB::beginTransaction();
        //
        $storyListDetail  = new storyListDetail();
        $storyListDetail  ->story_id = $id;
        $storyListDetail  ->chapter  = $request->input('chapter');
        $storyListDetail  ->chapter_name = $request->input('chapter_name'); 
        $storyListDetail  ->chapter_name_link = 'chuong'.'-'.str_slug($storyListDetail  ->chapter).'_'.str_random(4);
        $storyListDetail  ->chapter_content = $request->input('chapter_content'); 
        $storyListDetail  ->flag = 1;
        $storyListDetail  ->save();
        //
        $Stories = Stories::find($id);
        //
        $Stories ->story_sum_chapter = storyListDetail::whereRaw('flag = 1 and story_id = '.$id) ->count();
        //
        $Stories ->save();
        //
        DB::commit();
        //
        return redirect()->route('storydetail.create',['id'=>$id]);
    }
}
