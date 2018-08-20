<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\StoryType;

use DB;

class composerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //----------------------------------------------------------------------//
        view()->composer(['page.custumPage.hotSidebar'], function ($view) {

                $storiesHotWeek = DB::table('stories')
                                    ->where('stories.story_rating','>=','9')
                                    ->where('stories.story_view','>','1000')
                                    ->where('stories.story_status','=','1')
                                    ->select('stories.story_name'
                                        ,'stories.story_image'
                                        ,'stories.story_name_link'
                                        ,'stories.story_type'
                                        ,'stories.story_sum_chapter'
                                        )
                                    ->orderBy('stories.story_rating', 'desc')

                                    ->limit(10)

                                    ->get();
                //----------------------------------------------------------------------//
                $storiesHotMonth = DB::table('stories')

                                    ->where('stories.story_rating','>=','9')

                                    ->where('stories.story_view','>','1000')

                                    ->where('stories.story_status','=','1')

                                    ->where('stories.updated_at','>',date_modify(new \DateTime(), "-1 months"))

                                    ->select('stories.story_name'
                                        ,'stories.story_image'
                                        ,'stories.story_name_link'
                                        ,'stories.story_type'
                                        ,'stories.story_sum_chapter'
                                    )
                                    ->orderBy('stories.story_rating', 'desc')

                                    ->limit(10)

                                    ->get();
                //----------------------------------------------------------------------//
                $storiesHotAll= DB::table('stories')

                                ->where('stories.story_rating','>=','9')

                                ->where('stories.story_view','>','1000')

                                ->where('stories.story_status','=','1')

                                ->select('stories.story_name'
                                    ,'stories.story_image'
                                    ,'stories.story_name_link'
                                    ,'stories.story_type'
                                    ,'stories.story_sum_chapter'
                                    )

                                ->orderBy('stories.updated_at', 'desc')

                                ->limit(10)

                                ->get();

            $view->with(['storiesHotWeek'=>$storiesHotWeek,'storiesHotMonth'=>$storiesHotMonth,'storiesHotAll'=>$storiesHotAll]);
        });
        //----------------------------------------------------------------------//
        view()->composer(['page.authorPage','page.typePage','page.storyDetailPage','page.seachPage','page.index','page.chapterPage'], function ($view) {

            $storyType = StoryType::all();

            $view->with(['storyType'=>$storyType]);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
