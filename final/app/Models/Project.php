<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['project_name', 'system_pic', 'system_owner', 'start_date', 'end_date', 'duration', 'methodology', 'platform', 'deployment_type'];

    public function Bu(): BelongsTo
    {
        return $this->belongsTo(Bu::class);
    }
    public function developers(): BelongsToMany
    {
        return $this->belongsToMany(Developer::class, 'project_developers', 'project_id', 'developer_id');
    }
    public function reports(): HasMany
    {
        return $this->hasMany(Report::class);
    }
}
