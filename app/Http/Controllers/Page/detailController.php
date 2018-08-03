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

        $storyType = StoryType::all();
        //----------------------------------------------------------------------//
        $author =  StoryAuthor::where('author_name_link','=',$author_name_link)->first();
        //----------------------------------------------------------------------//
        //----------------------------------------------------------------------//
        $storiesHotWeek = DB::table('stories')
                            ->where('stories.story_rating','>=','9')
                            ->where('stories.story_view','>','1000')
                            ->leftjoin('story_list_details',function($leftjoin){
                                    $leftjoin->on('story_list_details.story_id','stories.story_id')
                                             ->on('story_list_details.chapter','=','stories.story_sum_chapter')
                                             ->where('story_list_details.flag','=',1);
                            })
                            ->select('stories.story_name'
                                ,'stories.story_image'
                                ,'stories.story_name_link'
                                ,'stories.story_type'
                                ,'story_list_details.chapter'
                                )
                            ->orderBy('stories.story_rating', 'desc')

                            ->limit(10)

                            ->get();
        //----------------------------------------------------------------------//
        $storiesHotMonth = DB::table('stories')

                            ->where('stories.story_rating','>=','9')

                            ->where('stories.story_view','>','1000')

                            ->where('stories.updated_at','>',date_modify(new \DateTime(), "-1 months"))

                            ->leftjoin('story_list_details',function($leftjoin){
                                    $leftjoin->on('story_list_details.story_id','stories.story_id')
                                             ->on('story_list_details.chapter','=','stories.story_sum_chapter')
                                             ->where('story_list_details.flag','=',1);
                            })

                            ->select('stories.story_name'
                                ,'stories.story_image'
                                ,'stories.story_name_link'
                                ,'stories.story_type'
                                ,'story_list_details.chapter'
                            )
                            ->orderBy('stories.story_rating', 'desc')

                            ->limit(10)

                            ->get();
        //----------------------------------------------------------------------//
        $storiesHotAll= DB::table('stories')

                        ->where('stories.story_rating','>=','9')

                        ->where('stories.story_view','>','1000')

                        ->leftjoin('story_list_details',function($leftjoin){
                                $leftjoin->on('story_list_details.story_id','stories.story_id')
                                         ->on('story_list_details.chapter','=','stories.story_sum_chapter')
                                         ->where('story_list_details.flag','=',1);
                        })

                        ->select('stories.story_name'
                            ,'stories.story_image'
                            ,'stories.story_name_link'
                            ,'stories.story_type'
                            ,'story_list_details.chapter'
                            )

                        ->orderBy('stories.updated_at', 'desc')

                        ->limit(10)

                        ->get();
        //----------------------------------------------------------------------//
        $stories    = DB::table('story_authors')

                    ->where('story_authors.author_name_link','=',$author_name_link) 

                    ->where('story_authors.flag','=',1) 

                    ->leftjoin('stories',function($leftjoin){
                            $leftjoin->on('story_authors.author_id','stories.author_id')
                                     ->where('stories.flag','=',1);
                    })

                    ->leftjoin('story_list_details',function($leftjoin){
                            $leftjoin->on('story_list_details.story_id','stories.story_id')
                                     ->on('story_list_details.chapter','=','stories.story_sum_chapter')
                                     ->where('story_list_details.flag','=',1);
                    })

                    ->select('stories.story_name'
                        ,'stories.story_name_link'
                        ,'stories.story_image'
                        ,'story_list_details.chapter'
                        ,'story_list_details.chapter_name_link'
                        ,'story_authors.author_name','story_authors.author_name_link'
                    )

                    ->paginate(5);
        //----------------------------------------------------------------------//
        if($author !=null){           
    	    return view('page.authorPage',['storiesHotWeek'=>$storiesHotWeek
                                            ,'storiesHotMonth'=>$storiesHotMonth
                                            ,'storiesHotAll'=>$storiesHotAll,
                                            'storyType'=>$storyType,
                                            'stories' => $stories,
                                            'author' =>$author]);
        }else{
            return 'trang không tồn tại';
        }
    }
    //
    public  function getStoryForType($type_name_link){

        $storyType = StoryType::all();
        //----------------------------------------------------------------------//
        $type =  storyType::where('type_name_link','=',$type_name_link)->first();
        // ---------------------------------------------------------------------//
        //----------------------------------------------------------------------//
        $storiesHotWeek = DB::table('stories')
                            ->where('stories.story_rating','>=','9')
                            ->where('stories.story_view','>','1000')
                            ->leftjoin('story_list_details',function($leftjoin){
                                    $leftjoin->on('story_list_details.story_id','stories.story_id')
                                             ->on('story_list_details.chapter','=','stories.story_sum_chapter')
                                             ->where('story_list_details.flag','=',1);
                            })
                            ->select('stories.story_name'
                                ,'stories.story_image'
                                ,'stories.story_name_link'
                                ,'stories.story_type'
                                ,'story_list_details.chapter'
                                )
                            ->orderBy('stories.story_rating', 'desc')

                            ->limit(10)

                            ->get();
        //----------------------------------------------------------------------//
        $storiesHotMonth = DB::table('stories')

                            ->where('stories.story_rating','>=','9')

                            ->where('stories.story_view','>','1000')

                            ->where('stories.updated_at','>',date_modify(new \DateTime(), "-1 months"))

                            ->leftjoin('story_list_details',function($leftjoin){
                                    $leftjoin->on('story_list_details.story_id','stories.story_id')
                                             ->on('story_list_details.chapter','=','stories.story_sum_chapter')
                                             ->where('story_list_details.flag','=',1);
                            })

                            ->select('stories.story_name'
                                ,'stories.story_image'
                                ,'stories.story_name_link'
                                ,'stories.story_type'
                                ,'story_list_details.chapter'
                            )
                            ->orderBy('stories.story_rating', 'desc')

                            ->limit(10)

                            ->get();
        //----------------------------------------------------------------------//
        $storiesHotAll= DB::table('stories')

                        ->where('stories.story_rating','>=','9')

                        ->where('stories.story_view','>','1000')

                        ->leftjoin('story_list_details',function($leftjoin){
                                $leftjoin->on('story_list_details.story_id','stories.story_id')
                                         ->on('story_list_details.chapter','=','stories.story_sum_chapter')
                                         ->where('story_list_details.flag','=',1);
                        })

                        ->select('stories.story_name'
                            ,'stories.story_image'
                            ,'stories.story_name_link'
                            ,'stories.story_type'
                            ,'story_list_details.chapter'
                            )

                        ->orderBy('stories.updated_at', 'desc')

                        ->limit(10)

                        ->get();
        //----------------------------------------------------------------------//
        $stories   = DB::table('story_types')

                    ->where('story_types.type_name_link','=',$type_name_link)

                    ->where('story_types.flag','=',1) 

                    ->leftjoin('story_type_details','story_type_details.type_id','=','story_types.type_id')

                    ->leftjoin('stories',function($leftjoin){
                            $leftjoin->on('story_type_details.story_id','stories.story_id')
                                     ->where('stories.flag','=',1);
                    })

                    ->leftjoin('story_list_details',function($leftjoin){
                            $leftjoin->on('story_list_details.story_id','stories.story_id')
                                     ->on('story_list_details.chapter','=','stories.story_sum_chapter')
                                     ->where('story_list_details.flag','=',1);
                    })

                    ->leftjoin('story_authors',function($leftjoin){
                            $leftjoin->on('story_authors.author_id','stories.author_id')
                                     ->where('stories.flag','=',1);
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

                    ->paginate(5);
        // ---------------------------------------------------------------------//
        // ------------------------------EXIT-----------------------------------//
        if($type != null){
    	   return view('page.typePage',['storiesHotWeek'=>$storiesHotWeek
                                            ,'storiesHotMonth'=>$storiesHotMonth
                                            ,'storiesHotAll'=>$storiesHotAll,'storyType'=>$storyType,'stories' => $stories,'type' => $type]);
        }else{
            return 'trang không tồn tại';
        }
    }

    public function getStoryDetail($story_name_link){
        // ---------------------------------------------------------------------//
        $storyType      =  storyType::all();
        // ---------------------------------------------------------------------//
        $story         = Stories::where('story_name_link','=',$story_name_link)

                        ->leftjoin('story_authors','stories.author_id','=','story_authors.author_id')

                        ->first();
        // ---------------------------------------------------------------------//  
        //----------------------------------------------------------------------//
        $storiesHotWeek = DB::table('stories')
                            ->where('stories.story_rating','>=','9')
                            ->where('stories.story_view','>','1000')
                            ->leftjoin('story_list_details',function($leftjoin){
                                    $leftjoin->on('story_list_details.story_id','stories.story_id')
                                             ->on('story_list_details.chapter','=','stories.story_sum_chapter')
                                             ->where('story_list_details.flag','=',1);
                            })
                            ->select('stories.story_name'
                                ,'stories.story_image'
                                ,'stories.story_name_link'
                                ,'stories.story_type'
                                ,'story_list_details.chapter'
                                )
                            ->orderBy('stories.story_rating', 'desc')

                            ->limit(10)

                            ->get();
        //----------------------------------------------------------------------//
        $storiesHotMonth = DB::table('stories')

                            ->where('stories.story_rating','>=','9')

                            ->where('stories.story_view','>','1000')

                            ->where('stories.updated_at','>',date_modify(new \DateTime(), "-1 months"))

                            ->leftjoin('story_list_details',function($leftjoin){
                                    $leftjoin->on('story_list_details.story_id','stories.story_id')
                                             ->on('story_list_details.chapter','=','stories.story_sum_chapter')
                                             ->where('story_list_details.flag','=',1);
                            })

                            ->select('stories.story_name'
                                ,'stories.story_image'
                                ,'stories.story_name_link'
                                ,'stories.story_type'
                                ,'story_list_details.chapter'
                            )
                            ->orderBy('stories.story_rating', 'desc')

                            ->limit(10)

                            ->get();
        //----------------------------------------------------------------------//
        $storiesHotAll= DB::table('stories')

                        ->where('stories.story_rating','>=','9')

                        ->where('stories.story_view','>','1000')

                        ->leftjoin('story_list_details',function($leftjoin){
                                $leftjoin->on('story_list_details.story_id','stories.story_id')
                                         ->on('story_list_details.chapter','=','stories.story_sum_chapter')
                                         ->where('story_list_details.flag','=',1);
                        })

                        ->select('stories.story_name'
                            ,'stories.story_image'
                            ,'stories.story_name_link'
                            ,'stories.story_type'
                            ,'story_list_details.chapter'
                            )

                        ->orderBy('stories.updated_at', 'desc')

                        ->limit(10)

                        ->get();
        //----------------------------------------------------------------------//             
        $stories  = DB::table('stories')

                        ->where('story_name_link','=',$story_name_link)

                        ->where('stories.flag','=',1) 

                        ->leftjoin('story_list_details',function($leftjoin){
                            $leftjoin->on('story_list_details.story_id','stories.story_id')
                                     ->where('story_list_details.flag','=',1);
                        })

                        ->select('stories.story_name'
                            ,'stories.story_name_link'
                            ,'story_list_details.chapter_name'
                            ,'story_list_details.chapter_name_link'
                        )

                        ->orderBy('story_list_details.chapter', 'asc')

                        ->paginate(50);

        // ---------------------------------------------------------------------//   
        if($story != null){

    	   return view('page.storyDetailPage',['storiesHotWeek'=>$storiesHotWeek
                                            ,'storiesHotMonth'=>$storiesHotMonth
                                            ,'storiesHotAll'=>$storiesHotAll,'storyType'=>$storyType,'story'=> $story,'stories'=>$stories]);
        }else{
            return 'trang không tồn tại';
        }
    }
    public function postSeachPage(Request $request){

        $storyType = StoryType::all();
        //----------------------------------------------------------------------//
        $keyword = $request->input('search');
        //----------------------------------------------------------------------//
        $storiesHotWeek = DB::table('stories')
                            ->where('stories.story_rating','>=','9')
                            ->where('stories.story_view','>','1000')
                            ->leftjoin('story_list_details',function($leftjoin){
                                    $leftjoin->on('story_list_details.story_id','stories.story_id')
                                             ->on('story_list_details.chapter','=','stories.story_sum_chapter')
                                             ->where('story_list_details.flag','=',1);
                            })
                            ->select('stories.story_name'
                                ,'stories.story_image'
                                ,'stories.story_name_link'
                                ,'stories.story_type'
                                ,'story_list_details.chapter'
                                )
                            ->orderBy('stories.story_rating', 'desc')

                            ->limit(10)

                            ->get();
        //----------------------------------------------------------------------//
        $storiesHotMonth = DB::table('stories')

                            ->where('stories.story_rating','>=','9')

                            ->where('stories.story_view','>','1000')

                            ->where('stories.updated_at','>',date_modify(new \DateTime(), "-1 months"))

                            ->leftjoin('story_list_details',function($leftjoin){
                                    $leftjoin->on('story_list_details.story_id','stories.story_id')
                                             ->on('story_list_details.chapter','=','stories.story_sum_chapter')
                                             ->where('story_list_details.flag','=',1);
                            })

                            ->select('stories.story_name'
                                ,'stories.story_image'
                                ,'stories.story_name_link'
                                ,'stories.story_type'
                                ,'story_list_details.chapter'
                            )
                            ->orderBy('stories.story_rating', 'desc')

                            ->limit(10)

                            ->get();
        //----------------------------------------------------------------------//
        $storiesHotAll= DB::table('stories')

                        ->where('stories.story_rating','>=','9')

                        ->where('stories.story_view','>','1000')

                        ->leftjoin('story_list_details',function($leftjoin){
                                $leftjoin->on('story_list_details.story_id','stories.story_id')
                                         ->on('story_list_details.chapter','=','stories.story_sum_chapter')
                                         ->where('story_list_details.flag','=',1);
                        })

                        ->select('stories.story_name'
                            ,'stories.story_image'
                            ,'stories.story_name_link'
                            ,'stories.story_type'
                            ,'story_list_details.chapter'
                            )

                        ->orderBy('stories.updated_at', 'desc')

                        ->limit(10)

                        ->get();
        //----------------------------------------------------------------------//

        if($keyword !== null){

        $stories   = DB::table('stories')

                    ->leftjoin('story_list_details',function($leftjoin){
                            $leftjoin->on('story_list_details.story_id','stories.story_id')
                                     ->on('story_list_details.chapter','=','stories.story_sum_chapter')
                                     ->where('story_list_details.flag','=',1);
                    })

                    ->leftjoin('story_authors',function($leftjoin){
                            $leftjoin->on('story_authors.author_id','stories.author_id')
                                     ->where('stories.flag','=',1);
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

                    ->paginate(5);
        }else{

            $stories = null;

        }
    	return view('page.seachPage',['storiesHotWeek'=>$storiesHotWeek
                                            ,'storiesHotMonth'=>$storiesHotMonth
                                            ,'storiesHotAll'=>$storiesHotAll,'storyType'=>$storyType,'keyword'=>$keyword,'stories'=> $stories]);
    }
    public function getSeachPage($keyword){

        $storyType = StoryType::all();
        //----------------------------------------------------------------------//
        if($keyword !== null){

        $stories   = DB::table('stories')

                    ->leftjoin('story_authors',function($leftjoin){
                            $leftjoin->on('story_authors.author_id','stories.author_id')
                                     ->where('stories.flag','=',1);
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

        $storyType = StoryType::all();
        //----------------------------------------------------------------------//
        $chapter = DB::table('stories')

                    ->where('stories.story_name_link','=',$story_name_link)

                    ->leftjoin('story_list_details',function($leftjoin)use($chapter_name_link){
                            $leftjoin->on('story_list_details.story_id','stories.story_id')
                                     ->where('story_list_details.chapter_name_link','=',$chapter_name_link)
                                     ->where('story_list_details.flag','=',1);
                    })

                    ->select('stories.story_name'
                            ,'stories.story_name_link'
                            ,'story_list_details.chapter'
                            ,'story_list_details.chapter_name'
                            ,'story_list_details.chapter_content'
                            )

                    ->first();

        $chaptercurrent = $chapter->chapter;

        $chapterNext = DB::table('stories')

                    ->where('stories.story_name_link','=',$story_name_link)

                    ->leftjoin('story_list_details',function($leftjoin)use($chaptercurrent){
                            $leftjoin->on('story_list_details.story_id','stories.story_id')
                                     ->where('story_list_details.chapter','>',$chaptercurrent)
                                     ->where('story_list_details.flag','=',1);
                    })

                    ->select('stories.story_name_link'
                            ,'story_list_details.chapter_name_link'
                            )
                    ->orderBy('story_list_details.chapter', 'asc')

                    ->limit(1)


                    ->first();


        $chapterPrev = DB::table('stories')

                    ->where('stories.story_name_link','=',$story_name_link)

                    ->leftjoin('story_list_details',function($leftjoin)use($chaptercurrent){
                            $leftjoin->on('story_list_details.story_id','stories.story_id')
                                     ->where('story_list_details.chapter','<',$chaptercurrent)
                                     ->where('story_list_details.flag','=',1);
                    })

                    ->select('stories.story_name_link'
                            ,'story_list_details.chapter_name_link'
                            )
                    ->orderBy('story_list_details.chapter', 'desc')

                    ->limit(1)

                    ->first();

        return view('page.chapterPage',['storyType'=>$storyType,'chapterPrev' =>$chapterPrev,'chapter' =>$chapter,'chapterNext' =>$chapterNext]);
    }
}
