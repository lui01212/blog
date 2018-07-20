<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use DB;

use App\Stories;

use App\storyTypeDetail;

use App\Http\Requests\storyDetailRequest;

class autoloadChapterController extends Controller
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

        $stories = DB::table('stories') ->where('story_id', $id) ->leftjoin('story_authors','stories.author_id','=','story_authors.author_id')->select('stories.*','story_authors.author_name')->first();

    	return view('admin.autoloadChapter',compact('id','user','stories'));
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        try{
            ////////////////////////////////////////////////////////////
            DB::beginTransaction();
            ////////////////////////////////////////////////////////////
            
            /////////////////////////////////////////////////////////////
            DB::commit();
            /////////////////////////////////////////////////////////////
            echo "string";
            //
        }catch(\Exception $e){  
            //
            DB::rollback();
            //
            echo "error";
        }
    }

}
