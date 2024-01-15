<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;


class ProjectDeveloper extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['project_id', 'developer_id', 'datetime', 'status', 'project_id'];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);

    }
    public function developer(): BelongsTo
    {
        return $this->belongsTo(Developer::class);

    }
}
