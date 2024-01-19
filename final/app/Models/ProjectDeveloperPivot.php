<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProjectDeveloperPivot extends Pivot
{
    protected $table = 'project_developer';

    protected $fillable = ['project_id', 'developer_id', 'is_lead'];

    public $timestamps = true;

}
