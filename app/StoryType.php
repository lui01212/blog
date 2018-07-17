<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoryType extends Model
{
    //
    protected $table = 'story_types';
    //
    protected $primaryKey = 'type_id';
    //
    protected $fillable = ['type_id','type_name','type_name_link','flag'];
    //
}
