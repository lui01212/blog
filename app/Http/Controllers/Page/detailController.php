<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\StoryType;

use App\Stories;

use App\StoryAuthor;

use DB;

class detailController extends Controller
{

    public  function getStoryForAuthor($author_name_link){

        $author =  StoryAuthor::where('author_name_link','=',$author_name_link)->first();

        if($author == null) return redirect()->route('404');
        //----------------------------------------------------------------------//
        $stories    = DB::table('story_authors')

                    ->where('story_authors.author_name_link','=',$author_name_link) 

                    ->where('story_authors.flag','=',1) 

                    ->leftjoin('stories',function($leftjoin){
                            $leftjoin->on('story_authors.author_id','stories.author_id')
                                     ->where('stories.flag','=','1');
                    })

                    ->leftjoin('story_list_details',function($leftjoin){
                            $leftjoin->on('story_list_details.story_id','stories.story_id')
                                     ->on('story_list_details.chapter','=','stories.story_sum_chapter')
                                     ->where('story_list_details.flag','=','1');
                    })

                    ->select('stories.story_name'
                        ,'stories.story_name_link'
                        ,'stories.story_image'
                        ,'story_list_details.chapter'
                        ,'story_list_details.chapter_name_link'
                        ,'story_authors.author_name','story_authors.author_name_link'
                    )

                    ->paginate(15);
        //----------------------------------------------------------------------//        
    	return view('page.authorPage',['stories' => $stories,
                                            'author' =>$author]);
    }
    //
    public function postStoryForType(Request $request){

        $type_name_link = $request->input('type_name_link');

        return redirect()->route('typepage.index',['type_name_link'=>$type_name_link]);

    }
    public  function getStoryForType($type_name_link){
        //----------------------------------------------------------------------//
        $type =  storyType::where('type_name_link','=',$type_name_link)->first();

        if($type == null) return redirect()->route('404');
        // ---------------------------------------------------------------------//
        $stories   = DB::table('story_types')

                    ->where('story_types.type_name_link','=',$type_name_link)

                    ->where('story_types.flag','=','1') 

                    ->leftjoin('story_type_details','story_type_details.type_id','=','story_types.type_id')

                    ->leftjoin('stories',function($leftjoin){
                            $leftjoin->on('story_type_details.story_id','stories.story_id')
                                     ->where('stories.flag','=','1');
                    })

                    ->leftjoin('story_list_details',function($leftjoin){
                            $leftjoin->on('story_list_details.story_id','stories.story_id')
                                     ->on('story_list_details.chapter','=','stories.story_sum_chapter')
                                     ->where('story_list_details.flag','=','1');
                    })

                    ->leftjoin('story_authors',function($leftjoin){
                            $leftjoin->on('story_authors.author_id','stories.author_id')
                                     ->where('stories.flag','=','1');
                    })

                    ->select('story_types.type_name'
                        ,'story_types.type_name_link'
                        ,'stories.story_name'
                        ,'stories.story_name_link'
                        ,'stories.story_image'
                        ,'story_list_details.chapter'
                        ,'story_list_details.chapter_name_link'
                        ,'story_authors.author_name'
                        ,'story_authors.author_name_link'
                    )

                    ->paginate(15);
        // ---------------------------------------------------------------------//
        // ------------------------------EXIT-----------------------------------//
    	return view('page.typePage',['stories' => $stories,'type' => $type]);
    }

    public function getStoryDetail($story_name_link){
        // ---------------------------------------------------------------------//
        $storyType      =  storyType::all();
        // ---------------------------------------------------------------------//
        $story         = Stories::where('story_name_link','=',$story_name_link)

                        ->leftjoin('story_authors','stories.author_id','=','story_authors.author_id')

                        ->first();

        if($story == null) return redirect()->route('404');

        $authorStory   = DB::table('story_authors')->where('story_authors.author_id',$story->author_id)
                                                   ->leftjoin('stories','stories.author_id','=','story_authors.author_id')
                                                   ->select('stories.story_name'
                                                        ,'stories.story_name_link'
                                                    )
                                                   ->get();
        // ---------------------------------------------------------------------//  
        //----------------------------------------------------------------------//             
        $stories  = DB::table('stories')

                        ->where('story_name_link','=',$story_name_link)

                        ->where('stories.flag','=','1') 

                        ->leftjoin('story_list_details',function($leftjoin){
                            $leftjoin->on('story_list_details.story_id','stories.story_id')
                                     ->where('story_list_details.flag','=','1');
                        })

                        ->select('stories.story_name'
                            ,'stories.story_name_link'
                            ,'story_list_details.chapter_name'
                            ,'story_list_details.chapter_name_link'
                        )

                        ->orderBy('story_list_details.chapter', 'asc')

                        ->paginate(50);

        $stories5Top  = DB::table('stories')

                        ->where('story_name_link','=',$story_name_link)

                        ->where('stories.flag','=','1') 

                        ->leftjoin('story_list_details',function($leftjoin){
                            $leftjoin->on('story_list_details.story_id','stories.story_id')
                                     ->where('story_list_details.flag','=','1');
                        })

                        ->select(
                            'stories.story_name'
                            ,'stories.story_name_link'
                            ,'story_list_details.chapter_name'
                            ,'story_list_details.chapter_name_link'
                            ,'story_list_details.created_at'
                        )

                        ->orderBy('story_list_details.chapter', 'desc')

                        ->limit(5)

                        ->get();

        // ---------------------------------------------------------------------//   

    	return view('page.storyDetailPage',['story'=> $story
                                            ,'stories'=>$stories
                                            ,'stories5Top'=>$stories5Top
                                            ,'authorStory'=> $authorStory]);
    }
    public function postSeachPage(Request $request){
        //----------------------------------------------------------------------//
        $keyword = $request->input('search');
        //----------------------------------------------------------------------//
        if($keyword !== null){

        $stories   = DB::table('stories')

                    ->leftjoin('story_list_details',function($leftjoin){
                            $leftjoin->on('story_list_details.story_id','stories.story_id')
                                     ->on('story_list_details.chapter','=','stories.story_sum_chapter')
                                     ->where('story_list_details.flag','=','1');
                    })

                    ->leftjoin('story_authors',function($leftjoin){
                            $leftjoin->on('story_authors.author_id','stories.author_id')
                                     ->where('stories.flag','=','1');
                    })

                    ->where('stories.story_name','like','%' . $keyword . 'a%') 

                    ->orWhere('stories.story_name_link','like','%' . str_slug($keyword). '%') 

                    ->orWhere('story_authors.author_name','like','%' . $keyword . '%')

                    ->orWhere('story_authors.author_name_link','like','%' . str_slug($keyword) . '%') 

                    ->select('stories.story_name'
                        ,'stories.story_name_link'
                        ,'stories.story_image'
                        ,'story_list_details.chapter'
                        ,'story_list_details.chapter_name_link'
                        ,'story_authors.author_name'
                        ,'story_authors.author_name_link'
                        )

                    ->get();
        }else{

            $stories = null;

        }
    	return view('page.seachPage',['keyword'=>$keyword,'stories'=> $stories]);
    }
    public function getSeachPage($keyword){

        $storyType = StoryType::all();
        //----------------------------------------------------------------------//
        if($keyword !== null){

        $stories   = DB::table('stories')

                    ->leftjoin('story_authors',function($leftjoin){
                            $leftjoin->on('story_authors.author_id','stories.author_id')
                                     ->where('stories.flag','=','1');
                    })
                    ->where('stories.flag','=',1) 

                    ->where(function ($query)use($keyword){
                            $query->where('stories.story_name','like','%' . $keyword . '%') 
                                  ->orWhere('story_authors.author_name','like','%' . $keyword . '%');
                    })

                    ->select('stories.story_name'
                        ,'stories.story_name_link'
                        ,'stories.story_image'
                        ,'story_authors.author_name'
                        ,'story_authors.author_name_link'
                        )

                    ->limit(6)

                    ->get();
        }else{
            $stories = null;
        }
        return view('page.custumPage.resultSearchBar',['stories'=> $stories]);
    }
    public function getChapterPage($story_name_link,$chapter_name_link){

        $updateStory = DB::table('stories')->where('story_name_link','=',$story_name_link)
        
                                           ->increment('story_view');
        //----------------------------------------------------------------------//
        $chapter = DB::table('stories AS  stor')

                    ->leftjoin('story_list_details AS  det',function($leftjoin)use($chapter_name_link){
                            $leftjoin->on('det.story_id','stor.story_id')
                                     ->where('det.chapter_name_link','=',$chapter_name_link)
                                     ->where('det.flag','=','1');
                    })

                    ->where('stor.story_name_link','=',$story_name_link)

                    ->where('stor.flag','=','1')

                    ->select('stor.story_name'
                            ,'stor.story_name_link'
                            ,'det.chapter'
                            ,'det.chapter_name'
                            ,'det.chapter_content'
                            )

                    ->first();
                    
        if($chapter == null) return redirect()->route('404');

        if($chapter->chapter == null )  return redirect()->route('404');

        $chaptercurrent = $chapter->chapter;

        $chapterNext = DB::table('stories AS  stor')

                    ->where('stor.story_name_link','=',$story_name_link)

                    ->leftjoin('story_list_details AS  det',function($leftjoin)use($chaptercurrent){
                            $leftjoin->on('det.story_id','stor.story_id')
                                     ->where('det.chapter','>',$chaptercurrent)
                                     ->where('det.flag','=','1');
                    })

                    ->where('stor.flag','=','1')

                    ->select('stor.story_name_link'
                            ,'det.chapter_name_link'
                            )
                    ->orderBy('det.chapter', 'asc')

                    ->limit(1)


                    ->first();


        $chapterPrev = DB::table('stories AS  stor')

                    ->where('stor.story_name_link','=',$story_name_link)

                    ->leftjoin('story_list_details AS  det',function($leftjoin)use($chaptercurrent){
                            $leftjoin->on('det.story_id','stor.story_id')
                                     ->where('det.chapter','<',$chaptercurrent)
                                     ->where('det.flag','=','1');
                    })

                    ->where('stor.flag','=','1')

                    ->select('stor.story_name_link'
                            ,'det.chapter_name_link'
                            )
                    ->orderBy('det.chapter', 'desc')

                    ->limit(1)

                    ->first();

        return view('page.chapterPage',['chapterPrev' =>$chapterPrev,'chapter' =>$chapter,'chapterNext' =>$chapterNext]);
    }
    public function getRating($story_name_link,$rating){

        $stories = DB::table('stories') ->where('stories.story_name_link',$story_name_link)->first();

        if($stories == null) return redirect()->route('404');

        $rating  = ($rating*1 + $stories->story_rating*$stories->story_rating_sum)/($stories->story_rating_sum +1);

        $rating  = round($rating,2);

        DB::table('stories') ->where('stories.story_name_link',$story_name_link)->update(['story_rating'=>$rating ,'story_rating_sum'=>$stories->story_rating_sum + 1]);

        return response()->json([
                'rating' => $rating,
                'story_rating_sum' => $stories->story_rating_sum + 1
        ]);

    }
}
