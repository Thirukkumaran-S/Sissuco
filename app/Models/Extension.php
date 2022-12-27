<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extension extends Model
{
    use HasFactory;
    protected $table='extensions';
    protected $fillable=['subscription_id','priority','msisdn'];

}
