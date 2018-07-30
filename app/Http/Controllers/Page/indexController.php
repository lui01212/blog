<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\StoryType;

use App\Stories;

use DB;

class indexController extends Controller
{
    public  function index(){

    	$storyType = StoryType::all();

    	$stories = DB::table('stories') ->leftjoin('story_authors','stories.author_id','=','story_authors.author_id')->select('stories.*','story_authors.author_name')->limit(13)->get();
    	return view('page.index',['storyType' => $storyType,'stories' => $stories]);
    	// print_r($stories) ;
    }
}
