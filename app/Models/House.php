<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = [
        'name',
        'description',
        'bed_room',
        'bath_room',
        'living_room',
        'kitchen_room',
        'car_park',
        'pool_villa',
        'area',
        'blueprint',
    ];
}
