<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    public function event_accesses(): HasMany
    {
        return $this->hasMany(EventAccess::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
}
