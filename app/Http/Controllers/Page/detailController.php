<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\StoryType;

use DB;

class detailController extends Controller
{
    public  function getStoryForAuthor($author){
    	return view('page.authorPage');
    }
    public  function getStoryForType($type){

        $storyType =  storyType::where('type_name_link','=',$type)->first();
        
        $stories   = DB::table('story_types')->where('type_name_link','=',$type) 
                    ->leftjoin('story_type_details','story_type_details.type_id','=','story_types.type_id')
                    ->leftjoin('stories','story_type_details.story_id','=','stories.story_id')
                    ->leftjoin('story_list_details',function($leftjoin){
                            $leftjoin->on('story_list_details.story_id','stories.story_id')->on('story_list_details.chapter','=','stories.story_sum_chapter');
                    })
                    ->leftjoin('story_authors','story_authors.author_id','=','stories.author_id')
                    ->select('story_types.type_name','story_types.type_name_link','stories.story_name','stories.story_name_link','stories.story_image','story_list_details.chapter','story_list_details.chapter_name_link','story_authors.author_name','story_authors.author_name_link')
                    ->paginate(5);

    	return view('page.typePage',['stories' => $stories,'storyType' => $storyType]);
                    // return $stories ;
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
