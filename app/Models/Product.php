<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;


    public function presentPrice()
    {
        return 'Rp.' . number_format($this->price);
    }

    public function category()
    {
        return $this->BelongsTo(Category::class);
    }
    
    public function rating()
    {
        return $this->hasMany(Rating::class);
    }

    public function thumbnail()
    {
        return $this->hasOne(Thumbnail::class);
    }

}
