<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Center extends Model
{
    protected $table = "centers";
    protected $fillable = [
        "name",
        "address"
    ];

    public function user() : HasMany {
        return $this->hasMany(User::class);
    }
}
