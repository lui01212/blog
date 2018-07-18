<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class storyTypeDetail extends Model
{
    //
    protected $table = 'type_story_details';
    //
    protected $fillable = ['story_id','type_id'];
    //
}
