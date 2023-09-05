<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
