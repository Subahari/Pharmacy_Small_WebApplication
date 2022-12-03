<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Prescription extends Model
{
    use HasFactory;
    protected $fillable = [
        
       // 'drug',
        'note',
        'deliveryAddress',
        'deliveryTime',
        'image',
        //'quantity',
        'user_id',

    ];

    public function users()
    {
        return $this->belongsTo(Users::class);
    }
}
