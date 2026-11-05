<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventAccess extends Model
{
    public function event(): BelongsTo 
    {
        return $this->belongsTo(Event::class);
    }

    public function customer(): BelongsTo 
    {
        return $this->belongsTo(Customer::class);
    }
}
