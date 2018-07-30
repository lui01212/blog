<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\StoryType;

use App\Stories;

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

        $storyType =  storyType::all();

        $storys = Stories::where('story_name_link','=',$story)->leftjoin('story_authors','stories.author_id','=','story_authors.author_id')->first();

        $storiesList = DB::table('stories')->where('story_name_link','=',$story) 
        ->leftjoin('story_list_details','stories.story_id','=','story_list_details.story_id')
        ->select('stories.story_name','stories.story_name_link','story_list_details.chapter_name','story_list_details.chapter_name_link')
        ->orderBy('story_list_details.chapter', 'asc')
        ->paginate(50);

    	return view('page.storyDetailPage',['storyType'=>$storyType,'story'=> $storys,'storiesList'=>$storiesList]);
        // return $storiesList;

        // return $stories;
    }
    public function getSeachPage($seach){
    	return view('page.seachPage');
    }
    public function getChapterPage($story,$chapter){
        $chapter = DB::table('stories')
        ->where('stories.story_name_link','=',$story)
        ->leftjoin('story_list_details','story_list_details.story_id','=','stories.story_id')
        ->where('story_list_details.chapter_name_link','=',$chapter)
        ->select('stories.story_name','stories.story_name_link','story_list_details.chapter_name','story_list_details.chapter_content')
        ->first();
        return view('page.chapterPage',['chapter' =>$chapter]);
        // return $chapter;
    }
}
