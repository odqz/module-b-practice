<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderPicture extends Model
{
    public function picture(): BelongsTo 
    {
        return $this->belongsTo(Picture::class);
    }

    public function picture_size(): BelongsTo 
    {
        return $this->belongsTo(PictureSize::class);
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
