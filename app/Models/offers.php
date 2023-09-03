<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offers extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id',
        'discounted_rate',
    ];
    public function service()
    {
        return $this->belongsTo(Services::class);
    }
    

}
