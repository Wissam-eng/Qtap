<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class delivery_area extends Model
{
    use HasFactory;
    
    protected $fillable =[ 'brunch_id' , 'country' , 'city' , 'phone' , 'cost'];
}
