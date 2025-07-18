<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Departement extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }    
}