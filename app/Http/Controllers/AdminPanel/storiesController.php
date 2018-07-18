<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests\storiesRequest;

use App\Stories;

use App\StoryType;

use App\StoryAuthor;

class storiesController extends Controller
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
    public function index()
    {
        $user = Auth::user();

        $stores = Stories::paginate(2);

        return view('admin.storiesTable',['user' =>$user,'stores' =>$stores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();

        $storyType   = StoryType::all();

        $storyAuthor    = StoryAuthor::all();

        return view('admin.storiesCreate',['user' =>$user,'storyType'=>$storyType,'storyAuthor'=>$storyAuthor]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storiesRequest $request)
    {
        // $nameImage = "";

        // if ($request ->hasFile('storyImage')) {

        //     $file = $request ->file('storyImage');

        //     $nameFile = $file->getClientOriginalName();

        //     $nameImage = str_random(4)."_".$nameFile;

        //     while (file_exists('images/'.$nameImage)) {

        //         $nameImage = str_random(4)."_".$nameFile;

        //     }

        //     $file ->move('images/',$nameImage);

        // }
        // $listStory      = new listStory();
        // $listStory->story_image = $nameImage;
        // //
        // $storyType = $request ->input('storyType');
        // //
        // $html = '';
        // $step = '';
        // foreach ($storyType as  $value) {
        //     $html = $html.$step.$value;
        //     $step = ',';
        // }
        // $listStory->story_type = $html;
        // //
        // $listStory->story_name = $request ->input('storyName');
        // $listStory->author_id = $request ->input('authorId');
        // $listStory->story_source = $request ->input('storySource');
        // $listStory->story_sum_chapter = $request ->input('storySumChapter');
        // $listStory->story_view = $request ->input('storyView');
        // $listStory->story_rating = $request ->input('storyRating');
        // $listStory->story_status = $request ->input('storyStatus');
        // $listStory->story_price = $request ->input('storyPrice');
        // $listStory->story_intro = $request ->input('storyIntro');
        // $listStory->update_id = Auth::id();
        // $listStory->flag = 1;
        // //
        // $listStory ->save();
        // //---------------------------------------------------------------------
        // foreach ($storyType as  $value) {
        //     $typeStoryDetail = new typeStoryDetail();
        //     $typeStoryDetail ->story_id = $listStory->story_id;
        //     $typeStoryDetail ->type_name_link = str_slug($value);
        //     $typeStoryDetail->save();
        // }
        // return $storyType;
        return $request ->all(); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
