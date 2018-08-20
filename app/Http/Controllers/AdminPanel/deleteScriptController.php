<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use App\storyListDetail;

use App\DeleteScript;

class deleteScriptController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

    	$deleteScript = DeleteScript::where('delete_name','chapter_delete_id')->first();
        $storyListDetail = storyListDetail::where('chapter_id',$deleteScript->delete_value)->first();
        return view('admin.deleteScript',['user'=>$user,'storyListDetail'=>$storyListDetail]);
        // return $storyListDetail ->chapter_content;

    }
    public function update(Request $request, $id){
        return $request->input('chapter_content');
    }
}
