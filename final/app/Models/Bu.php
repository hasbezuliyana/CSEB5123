<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Bu extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'address', 'phone_number', 'email'];

    public function systemOwner(): HasMany
    {
        return $this->hasMany(Project::class, 'system_owner');
    }

}
