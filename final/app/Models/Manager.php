<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;


class Manager extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name', 'contact'];

    public function project(): HasMany
    {
        return $this->hasMany(Project::class);
    }

}
