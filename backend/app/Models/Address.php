<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $primaryKey = 'add_id';

    protected $fillable = [
        'foreign_key',
        'village',
        'commune',
        'district',
        'province',
        'road',
    ];
}
