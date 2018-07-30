<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class detailController extends Controller
{
    public  function getStoryForAuthor($author){
    	return view('page.authorPage');
    }
    public  function getStoryForType($type){
    	return view('page.typePage');
    }
    public function getStoryDetail($story){
    	return view('page.storyDetailPage');
    }
    public function getSeachPage($seach){
    	return view('page.seachPage');
    }
    public function getChapterPage($story,$chapter){
        return view('page.chapterPage');
    }
}
