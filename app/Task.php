<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
protected $fillable = ['project_id','user_id','posted_by','title','start_date','end_date','status','category','description'];

public function project()
{
    return $this->belongsTo('App\Project');
}
}
