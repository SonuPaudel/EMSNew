<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function services()
    {
        return $this->hasMany(Services::class);
        
    }
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
    
    

}
