<?php

namespace App\Http\Controllers\Adminpanel;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use App\storyListDetail;

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

    	$storyListDetail  = storyListDetail::paginate(5);

        return view('admin.storyDetailTable',compact('id','user','storyListDetail'));
    }
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
    	return $id;
    }
}
