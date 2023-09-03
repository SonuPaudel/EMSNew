<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function offer()
    {
        return $this->hasOne(Offer::class);
    }
}
