<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['user_id','posted_by','title','img','start_date','end_date','status','about'];

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
