<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PictureSize extends Model
{
    protected $guarded = [];
    
    protected $primaryKey = 'pic_size_id';

    public function order_pictures(): HasMany
    {
        return $this->hasMany(OrderPicture::class);
    }
}
